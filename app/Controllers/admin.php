<?php

namespace App\Controllers;
use App\Models\Adminmodel;
use App\Models\userModel;
class Admin extends BaseController
{
    public function index(){
        return view('home');
    } 
    public function resultView(){
        return view('home');
    } 
    // public function viewUser(){
    //     $db=db_connect();
    //     $model = new Usermodel($db);
    //    $data=[]; 
    //    if($this->request->getMethod()==='get'){
    //     $data['email'] = $this->request->getPost('email');
    //     $data['password'] = $this->request->getPost('password');
    //     // die(var_dump($data));
    // }
    // $isUser= $model->where('email',$data['email'])
    // ->where('password',$data['password'])
    // ->first();
    // } 

    public function logout()
    {
      $session = \Config\Services::session();
      $session->remove('admin');
      return redirect()->to(base_url('home/adminLogin'));
    }
}

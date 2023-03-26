<?php

namespace App\Controllers;
use App\Models\userModel;
use App\Models\Adminmodel;
use App\Models\Quizmodel;
class Home extends BaseController
{
    public function index()
    {
        return view('login');
        // echo view('include/footer');
    }

    public function registerForm(){
        return view('register');
    }

    public function adminLogin(){
        return view('adminLogin');
    }

    public function dashboard(){
        $issessionuser = $this->isSessionSetuser();
        if($issessionuser){
            $db= db_connect();
            $model = new Quizmodel($db);
            $data = [];
            $data['questions']=$model->allQuestions();
            $data['options']=$model->getOption();
            return view('userDashboard',$data);
        }
        else{
            return redirect()->to(base_url('home/'));
        }
        
    }

    public function login(){
        $db=db_connect();
        $model = new Usermodel($db);
       $data=[]; 
       if($this->request->getMethod()==='post'){
        $data['email'] = $this->request->getPost('email');
        $data['password'] = $this->request->getPost('password');
        // die(var_dump($data));
    }
    $isUser= $model->where('email',$data['email'])
    ->where('password',$data['password'])
    ->first();
    if($isUser){
        $session=\Config\Services::session();
        $session->set('user',$data['email']);
        return redirect()->to(base_url('home/dashboard'));
       }
       else{
        return '<h4>Email or Password does not match.<a href="'.base_url('home').'">Retry</a></h4>';
       }
    }

    public function isSessionSetuser(){
        $session=\Config\Services::session();
        $admin = $session->get('user');
      if($admin=='' || $admin == null){
          return false;  
      }
      else{
         return true; 
      }
    }


    public function register(){
       $data=[]; 
       if($this->request->getMethod()==='post'){
        $data['username'] = $this->request->getPost('email');
        $data['email'] = $this->request->getPost('email');
        $data['password'] = $this->request->getPost('password');
        // die(var_dump($data));
        $db=db_connect(); //db connection
        $model = new Usermodel($db);

        // check if exists 
        $model->where('email',$data['email']);
        $num_rows = $model->countAllResults();
        if($num_rows>0){
            return '<h3>Email already exists.<a href="'.base_url('home/registerForm').'">Retry</a></h3>';
        }
        else{

            $result=$model->save($data);
            if($result){
                return view('login');
            }
            else{
                return;
            }
        }

       }
    }

    public function qtn_option(){
        echo "HI<br>";
        $db = db_connect();
        $model = new Quizmodel($db);
        $response = $model->questionWithOption(3);
        die(var_dump($response));
    }

    public function adminDashboard(){
        $db=db_connect();
        $admmodel = new AdminModel($db);
        $data=[];
        if($this->request->getMethod()==='post'){
            $data['email'] = $this->request->getPost('email');
            $data['password'] = $this->request->getPost('password');
            // die(var_dump($data));
        } 
        $isAdmin= $admmodel->where('email',$data['email'])
        ->where('password',$data['password'])
        ->first();
        if($isAdmin){
            $session=\Config\Services::session();
            $session->set('admin',$data['email']);
            return redirect()->to(base_url('home/adminHome'));
           }
           else{
            return '<h4>Email or Password does not match.<a href="'.base_url('home/adminLogin').'">Retry</a></h4>';
           }
      } 

      //admin session set
      public function isSessionSet(){
          $session=\Config\Services::session();
          $admin = $session->get('admin');
        if($admin=='' || $admin == null){
            return false;  
        }
        else{
           return true; 
        }
      }
      
      //admin dashboard
      public function adminHome(){
        $issession = $this->isSessionSet();
        if($issession){
            return view('dashboard/home');
        }
        else{
            return redirect()->to(base_url('home/adminLogin'));
        }
    } 

    //user logout
    public function userlogout()
    {
      $session = \Config\Services::session();
      $session->remove('user');
      return redirect()->to(base_url('home'));
    }
// submit answer
    public function quizSubmit(){
        $data = $this->request->getpost();
        var_dump($data);
        die(); 
    }
  
}

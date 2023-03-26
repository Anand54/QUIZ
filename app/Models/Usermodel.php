<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
  protected $table      = 'users';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $allowedFields = ['username', 'email','password'];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at'; 


// public function check_email_exists($email){
//   $user_id = $this->where('email',$email)->first();
//   if($user_id->){

//   }  
// }
}
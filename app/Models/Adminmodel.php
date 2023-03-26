<?php

namespace App\Models;

use CodeIgniter\Model;

class Adminmodel extends Model
{
  protected $table      = 'admin';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $allowedFields = ['email','password'];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at'; 

}
<?php

namespace App\Models;

use CodeIgniter\Model;

class questionModel extends Model
{
  protected $table      = 'quiz_questions';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $allowedFields = ['question'];
}
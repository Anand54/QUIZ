<?php

namespace App\Models;

use CodeIgniter\Model;

class optionModel extends Model
{
  protected $table      = 'quiz_options';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $allowedFields = ['optionName','question_id','istrue'];
}
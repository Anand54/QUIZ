<?php

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface; 
use CodeIgniter\Model;

class Quizmodel
{
  protected $db;
    protected $table='quiz_questions';

    public function __construct(ConnectionInterface &$db){
        $this->db=&$db;
    }
  
 
    function allQuestions(){
      return $this->db->table($this->table)->get()->getResult();
  }

  function questionWithOption($qtn_id){
      return $this->db->table($this->table)
                      ->join('quiz_options','quiz_questions.id = quiz_options.question_id')
                      ->where('quiz_questions.id',$qtn_id)
                      ->get()
                      ->getResult();
  }

  function randomQuestionIds(){
      $builder = $this->db->table($this->table);
      $builder->select('id')
              ->orderBy('RAND()')
              ->limit(10);
      $query = $builder->get();
      $question_ids = $query->getResultArray();
      return $question_ids;
  }
  public function getOption(){
    return $this->db->table('quiz_options')->get()->getResult();
  }
}
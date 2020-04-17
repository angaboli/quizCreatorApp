<?php 

namespace App\Table;

use Core\Table\Table;

class QuestionTable extends Table{


    protected $table = 'questions';
    public $numbering = 1;

    /**
     * Récupère les questions
     * @return array
     */
    public function ask(){
        return $this->query("
            SELECT questions.id, questions.label, questions.type_id 
            FROM questions
            ");
    }

    /**
     * Récupère le type de question pour chaque question
     * @param $id int
     * @return \App\Entity\PostEntity
     */
    public function findQuestionType($id)
    { 
        return $this->query("
            SELECT questions.type_id
            FROM questions "
            , [$id], true);
    }
    
   

}
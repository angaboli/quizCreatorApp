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
            SELECT questions.id, questions.label, questions.type_id, questions.questionnaire_id
            FROM questions
            ORDER BY questions.id ASC ");
    }

    /**
     * Récupère le type de question pour chaque question
     * @param $id int
     * @return \App\Entity\QuestionEntity
     */
    public function findQuestionnaireById($questionnaire_id)
    { 
        return $this->query("
            SELECT questionnaires.id, questionnaires.name
            FROM questions
            LEFT JOIN questionnaires
            ON questionnaire_id = questionnaires.id
            WHERE questionnaire.id = ? ",
            [$questionnaire_id]);
    }

    public function askByQuestionnaire($questionnaire_id){
        return $this->query("
            SELECT questions.id, questions.label, questions.questionnaire_id as questionnaire, questions.type_id as type
            FROM questions
            LEFT JOIN questionnaires
            ON questionnaire_id = questionnaires.id
            WHERE questionnaire_id = ?
            ORDER BY questions.id ASC"
            ,   [$questionnaire_id]);

    }


    
   

}
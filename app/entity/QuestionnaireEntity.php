<?php


namespace App\Entity;


use Core\Entity\Entity;

class QuestionnaireEntity extends Entity
{
    public function getUrl(){
        return 'index.php?p=questions.questionnaire&questionnaire_id=' . $this->id;
    }

}
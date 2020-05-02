<?php


namespace App\Table;


use Core\Table\Table;

class QuestionnaireTable extends Table
{
    /**
     * Récupère les questionnaires
     * @return array
     */
    public function ask(){
        return $this->query("
            SELECT questionnaires.id, questionnaires.name
            FROM questionnaires
            ");
    }


}
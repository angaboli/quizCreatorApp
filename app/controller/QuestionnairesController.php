<?php


namespace App\Controller;


use Core\html\BootstrapForm;

class QuestionnairesController extends AppController
{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Questionnaire');
        $this->loadModel('Question');

    }

    public function index(){
        $questionnaires = $this->Questionnaire->ask();

        $this->render('questionnaires.index', compact('questionnaires'));
    }




}
<?php 

namespace App\Controller;
use Core\HTML\BootstrapForm;


class QuestionsController extends AppController{

    public function __construct(){
            parent::__construct();
            $this->loadModel('Question');
            $this->loadModel('Questionnaire');

    }
    
    public function index(){
        $questions = $this->Question->ask();
        $questionnaires = $this->Questionnaire->ask();
        $no = $this->Question->numbering;
        $form = new BootstrapForm($_POST); 
        $this->render('questions.index', compact('questionnaires','questions', 'no', 'form'));
    }

    public function questionnaire(){

        $questionnaire = $this->Questionnaire->find($_GET['questionnaire_id']);

        if($questionnaire===false){
            $this->notFound();
        }
        $questions = $this->Question->askByQuestionnaire($_GET['questionnaire_id']);
        $no = $this->Question->numbering;
        $form = new BootstrapForm($_POST);
        $this->render('questions.index', compact('questionnaire','questions', 'form', 'no'));
    }
    


}


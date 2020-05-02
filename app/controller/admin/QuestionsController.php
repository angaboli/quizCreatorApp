<?php 

namespace App\Controller\Admin;

use \App\Controller\Admin\AppController;
use Core\HTML\BootstrapForm;

class QuestionsController extends AppController{


    public function __construct(){
        parent::__construct();
        $this->loadModel('Question');
        $this->loadModel('Questionnaire');
    }


    public function index(){
        $questions = $this->Question->ask();
        $no = $this->Question->numbering;
        $form = new BootstrapForm($_POST);
        $questionnaires = $this->Questionnaire->extract('id','name');
        $this->render('admin.questions.index', compact('questions', 'form', 'no', 'questionnaires'));

    }

    public function byQuestionnaire(){
        $questionnaire = $this->Questionnaire->find($_GET['id']);
        if($questionnaire === false){
             $this->notFound();
        }
        $questions = $this->Question->askByQuestionnaire($_GET['id']);
        $form = new BootstrapForm($_POST);
        $this->render('admin.questions.by_questionnaire', compact('questionnaire', 'questionnaires', 'questions', 'form'));

    }


    public function add(){

        if(!empty($_POST)){
            $res = $this->Question->create([
                'id' => $_POST['id'],
                'label' => $_POST['label'],
                'questionnaire_id' => $_POST['questionnaire_id']
                ]);
            if ($res) {
                return $this->index();
            }
        }

        $surveys = $this->Questionnaire->extract('id','name');
        $form = new BootstrapForm($_POST); 
        $this->render('admin.questions.edit', compact( 'form', 'surveys'));


    }

    public function edit(){

        if(!empty($_POST)){
            $res = $this->Question->update($_GET['id'], [
                'id' => $_POST['id'],
                'label' => $_POST['label'],
                'questionnaire_id' => $_POST['questionnaire_id']
                ]);

            if ($res) {
               return $this->index();
            }
        }
        $question = $this->Question->find($_GET['id']);
        $surveys = $this->Questionnaire->extract('id','name');
        $form = new BootstrapForm($question); 
        $this->render('admin.questions.edit', compact('surveys','question', 'form'));

    }

    public function delete(){

        if(!empty($_POST)){
            $this->Question->delete($_POST['id']);

            return $this->index();   
        }

    }
    
}

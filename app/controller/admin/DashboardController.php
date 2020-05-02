<?php


namespace App\Controller\Admin;


class DashboardController extends AppController
{
    public function __construct(){
        parent::__construct();
        $this->loadModel('Questionnaire');
        $this->loadModel('Question');
    }


    public function index(){
        $surveys = $this->Questionnaire->ask();
        $countSurveys = count($this->Questionnaire->ask());
        $countQuestions = count($this->Question->ask());
        $this->render('admin.dashboard.index', compact('surveys', 'countSurveys', 'countQuestions', 'count'));
    }

    public function Create(){

        if(!empty($_POST)){
            $res = $this->Questionnaire->create([
                'name' => $_POST['name']
            ]);
            if ($res) {
                return $this->index();
            }
        }

        $form = new BootstrapForm($_POST);
        $this->render('admin.surveys.edit', compact( 'form'));


    }
}
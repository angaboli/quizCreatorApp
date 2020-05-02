<?php


namespace App\Controller\Admin;


use Core\html\BootstrapForm;

class SurveysController extends AppController
{
    public function __construct(){
        parent::__construct();
        $this->loadModel('Questionnaire');
    }

    public function index(){
        $surveys = $this->Questionnaire->ask();
        $this->render('admin.surveys.index', compact('surveys'));
    }

    public function add(){

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

    public function edit(){

        if(!empty($_POST)){
            $res = $this->Questionnaire->update($_GET['id'], [
                'name' => $_POST['name']
            ]);

            if ($res) {
                return $this->index();
            }
        }
        $surveys = $this->Questionnaire->find($_GET['id']);


        $form = new BootstrapForm($surveys);
        $this->render('admin.surveys.edit', compact('surveys', 'form'));

    }

    public function delete(){

        if(!empty($_POST)){
            $this->Questionnaire->delete($_POST['id']);

            return $this->index();
        }

    }

}
<?php 

namespace App\Controller;
use Core\HTML\BootstrapForm;


class QuestionsController extends AppController{

    public function __construct(){
            parent::__construct();
            $this->loadModel('Question');

    }
    
    public function index(){
        $questions = $this->Question->ask();
        $no = $this->Question->numbering;

        $form = new BootstrapForm($_POST); 
        $this->render('questions.index', compact('questions', 'no', 'form'));
    }
    


}


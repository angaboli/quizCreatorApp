<?php 

namespace App\Controller\Admin;

use \App\Controller\Admin\AppController;
use Core\HTML\BootstrapForm;

class QuestionsController extends AppController{


	public function __construct(){
		parent::__construct();
		$this->loadModel('Question');
	}


	public function index(){
		$questions = $this->Question->ask();
		$this->render('admin.questions.index', compact('questions'));
	}

	public function add(){

		if(!empty($_POST)){
		    $res = $this->Question->create([
		        'label' => $_POST['label'],
		        'type_id' => $_POST['type_id']
		        ]);

		    if ($res) {
		        return $this->index();
		    }
		}

		$form = new BootstrapForm($_POST); 
		$this->render('admin.questions.edit', compact( 'form'));


	}

	public function edit(){

		if(!empty($_POST)){
		    $res = $this->Qestion->update($_GET['id'], [
		        'label' => $_POST['label'],
		        'type_id' => $_POST['type_id']
		        ]);

		    if ($res) {
		       return $this->index();
		    }
		}
		$question = $this->Question->find($_GET['id']);


		$form = new BootstrapForm($question); 
		$this->render('admin.questions.edit', compact('question', 'form'));

	}

	public function delete(){

		if(!empty($_POST)){
		    $this->Question->delete($_POST['id']);

		    return $this->index();   
		}

	}
    
}

?>
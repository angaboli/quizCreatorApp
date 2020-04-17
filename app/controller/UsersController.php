<?php 


namespace App\Controller;

use Core\Auth\DBAuth;
use \App;

class UsersController extends AppController{


	public function login(){

		$errors = false;

		if(!empty($_POST)) {
	    $auth = new  DBAuth(App::getInstance()->getDb());
		    if($auth->login($_POST['username'], $_POST['password'])){
		        header('Location: index.php?p=admin.questions.index');
		    }else {
		    	$errors = true;
		    }
		}
		$form = new \Core\html\BootstrapForm($_POST);
		$this->render('users.login', compact('form', 'errors'));
	}
}
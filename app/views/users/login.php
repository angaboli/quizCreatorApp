<?php if ($errors): ?>

    <div class="alert alert-danger">
        Identifiants incorrets
    </div>

<?php endif; ?>



<form class="form-signin" method="post">
	
	<?= $form->input('username', 'Pseudo:');  ?>
	<?= $form->input('password', 'Mot de passe: ', ['type' => 'password']);  ?>
	<?= $form->submit() ?>	

</form>
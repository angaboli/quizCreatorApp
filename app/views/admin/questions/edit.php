<div class="card shadow mb-4 " >
    <div class="card-body">
    <form method="post">
        <div class="row">
            <div class="col-sm-8">

                <?= $form->input('id', 'Code');  ?>
                <?= $form->input('label', 'Question', ['type'=>'textarea']);  ?>
                <?= $form->select('questionnaire_id', 'Questionnaire', $surveys);  ?>

                <button type="submit" class="btn btn-primary">Sauvegarder</button>

            </div>

        </div>


    </form>
    </div>
</div>
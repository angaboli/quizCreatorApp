<div class="row">

    <div class="col-sm-12">

        <legend  class="list-group"> Choisis un test a faire</legend>
        <br>
            <div  class="list-group">
                <?php foreach ($questionnaires as $questionnaire): ?>

                    <li class="list-group-item list-group-item-action"><a  href="<?= $questionnaire->url; ?>"> <?=  $questionnaire->name; ?></a></li>
                <?php endforeach; ?>
            </div>

    </div>


</div>



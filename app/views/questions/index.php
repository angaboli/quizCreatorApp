<div class="row">

    <div class="col-sm-12">

        <form method="post" action="action.php">

        <h2><?= $questionnaire->name ; ?> </h2>



        <?php foreach ($questions as $question): ?>


            <fieldset  id="<?=$question->id; ?>">
                <legend><?= $no++;?>) <?= $question->label; ?></legend>
                <?php
                if($questionnaire->id === '1'){
                    echo $form->input($question->id ,' Pas de du tout d\'accord ', ['type' => 'radio', 'checked'], ['value' =>'1']);
                    echo $form->input($question->id,' Pas d\'accord ', ['type' => 'radio'], ['value' =>'2']);
                    echo $form->input($question->id,' Assez d\'accord ', ['type' => 'radio'], ['value' =>'3']);
                    echo $form->input($question->id,'  Tout à fait d\'accord ', ['type' => 'radio'], ['value' =>'4']);

                }elseif($questionnaire->id === '2'){

                    if($question->id === '1' || $question->id === '3'){
                        echo $form->input($question->id ,' presque la totalité ', ['type' => 'radio', 'checked'], '1');
                        echo $form->input($question->id,' la plus grande partie ', ['type' => 'radio'], '2');
                        echo $form->input($question->id,' une quantite suffisante ', ['type' => 'radio'], '3');
                        echo $form->input($question->id,' une quantite moderee ', ['type' => 'radio'], '4');
                        echo $form->input($question->id,' une petite quantite ', ['type' => 'radio'], '5');
                    }else{
                        echo $form->input($question->id ,' presque toujours ', ['type' => 'radio', 'checked', 'value' =>'4'], '1');
                        echo $form->input($question->id,' souvent ', ['type' => 'radio', 'value' =>'4'], '2');
                        echo $form->input($question->id,' d\'ordinaire oui ', ['type' => 'radio', 'value' =>'3'], '3');
                        echo $form->input($question->id,' parfois ', ['type' => 'radio', 'value' =>'2'], '4');
                        echo $form->input($question->id,' rarement ', ['type' => 'radio', 'value' =>'1'], '5');
                    }
                }

                ?>
            </fieldset>

        <?php endforeach; ?>
            <?= $form->submit(); ?>
        </form>

    </div>


</div>



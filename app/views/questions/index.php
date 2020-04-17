<div class="row">

    <div class="col-sm-8">
        
        <form method="post" action="action"></form>

        <?php foreach ($questions as $question): ?>
        
       
                <p><strong><?= $no++; ?>) <?= $question['label']; ?></strong></p>
                <?= $form->input('optradio',' mauvais ', ['type' => 'radio']);  ?>
                <?= $form->input('optradio',' moyen ', ['type' => 'radio']);  ?>
                <?= $form->input('optradio',' bien ', ['type' => 'radio']);  ?>
         

        <?php endforeach; ?>
        
        </form>
    
    </div>


</div>



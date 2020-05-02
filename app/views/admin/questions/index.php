
<div class="card shadow mb-4 " >
    <div class="card-header py-3">
        <h1 class=" text-monospace">Questions admin</h1>
    </div>

    <div class="card-body">
        <p>
                <a href="?p=admin.questions.add" class="btn btn-success">Ajouter</a>
        </p>


        <div class="form-group">

            <?= $form->select('questionnaire_id', 'Trier par questionnaire', $questionnaires, ['id' => 'survey']);  ?>
        </div>

        <table class="table table-striped">
                <thead>
                <tr>


                <td>ID</td>
                <td>Questions</td>

                <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                        <?php foreach($questions as $question) : ?>

                            <tr>
                                <td><?= $question->id;  ?></td>
                                <td><?= $question->label; ?></td>

                                <td>
                                        <a href="?p=admin.questions.edit&id=<?= $question->id; ?>" class="btn btn-primary">Editer</a>

                                        <form  onclick='return confirmDelete()' method="post" action="?p=admin.questions.delete" style="display: inline;" >
                                                <input type="hidden" name="id" value="<?= $question->id ?>">
                                                <button  type="submit" class="btn btn-danger">Supprimer</button>

                                        </form>

                                </td>
                            </tr>

                        <?php endforeach; ?>
                </tbody>

        </table>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#survey').change(function(){
            var survey = $(this).val();

            $.ajax({
                url: "by_questionnaire.php",
                method : "POST",
                data: {survey:questionnaire_id},
                success:function (data) {
                    $('#show_questionnaire').html(data);
                }
            })
        })
    })
</script>
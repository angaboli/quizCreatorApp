


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
            <td><?= $question->id; ?></td>
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



<div class="card shadow mb-4 " >
    <div class="card-header py-3">
        <h1 class=" text-monospace">Surveys</h1>
    </div>

    <div class="card-body">

    <p>
        <a href="?p=admin.surveys.add" class="btn btn-success">Ajouter</a>
    </p>

        <table class="table table-striped">
            <thead>
            <tr>

                <td>Questionnaires</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach($surveys as $survey) : ?>

                <tr>

                    <td><?= $survey->name; ?></td>
                    <td>
                        <a href="?p=admin.surveys.edit&id=<?= $survey->id; ?>" class="btn btn-primary">Editer</a>

                        <form  onclick='return confirmDelete()' method="post" action="?p=admin.surveys.delete" style="display: inline;" >
                            <input type="hidden" name="id" value="<?= $survey->id ?>">
                            <button  type="submit" class="btn btn-danger">Supprimer</button>

                        </form>

                    </td>
                </tr>

            <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>



<div class="container" id="page-content-wrapper">
    
    <h1 class=" text-monospace">Survey Creator Admin</h1>

    <p>
            <a href="?p=admin.questions.add" class="btn btn-success">Ajouter</a>
    </p>

    <table class="table table-striped">
            <thead>
            <tr>

            <td>Question</td>
            <td>Actions</td>	
            </tr>
            </thead>
            <tbody>
                    <?php foreach($questions as $ask) : ?>

                        <tr>

                            <td><?= $ask['label']; ?></td>
                            <td>
                                    <a href="?p=admin.questions.edit&id=<?= $ask['id']; ?>" class="btn btn-primary">Editer</a>

                                    <form  onclick='return confirmDelete()' method="post" action="?p=admin.questions.delete" style="display: inline;" >
                                            <input type="hidden" name="id" value="<?= $ask['id'] ?>">
                                            <button  type="submit" class="btn btn-danger">Supprimer</button>

                                    </form>

                            </td>
                        </tr>

                    <?php endforeach; ?>
            </tbody>

    </table>
</div>
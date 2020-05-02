
<!doctype html>
<html lang="en">
  <head>
    <title><?= App::getInstance()->title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	

  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow">
        <a class="navbar-brand glyphicon glyphicon-check" href="index.php?p=admin.dashboard.index"><?= App::getInstance()->title ?> Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    

    <div class="row">
      <div class="col-3 bg-light shadow" style="margin-top: 100px;">

              <!-- Sidebar -->
          <div class=" border-right " id="sidebar-wrapper">

            <div class="list-group list-group-flush">
              <a href="index.php?p=admin.dashboard.index" class="list-group-item list-group-item-action bg-light">Dashboard</a>
              <a href="index.php?p=admin.surveys.index" class="list-group-item list-group-item-action bg-light">Surveys</a>
              <a href="index.php?p=admin.results.index" class="list-group-item list-group-item-action bg-light">Results</a>
              <a href="index.php?p=admin.stats.index" class="list-group-item list-group-item-action bg-light">Stats</a>
            </div>
          </div>
          <!-- /#sidebar-wrapper -->

       </div>

      <div class="col-8 ">

          <main role="main"  class="container">

            <div class="starter-template shadow "  style="margin-top: 100px; padding: 50px">

              <?= $content; ?>

            </div>

          </main><!-- /.container -->


      </div>

    </div>
    
    <script type="text/javascript">

    function confirmDelete()
    {
       return confirm("Voulez-vous vraiment supprimer cet enregistrement?");
    }
    </script>
    
</html>

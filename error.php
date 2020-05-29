<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon"
          href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🗄</text></svg>">
    <link rel="stylesheet" href="assets/bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <title>Error Page</title>
    <style>
    html {
      height: 100%;
    }

    body {
      height: 100%;
      max-height: 100%;
    }

    .jumbotron {
      height: 100vh;
      margin-bottom: 0;
    }

    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-sm navbar-bg fixed-top bg-secondary">

      <!-- Brand -->
      <a class="navbar-brand text-white" href="index.php">Biodata Records</a>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
        </li>
      </ul>

    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container d-flex flex-column align-items-center">
        <h1>Oops!!</h1>
        <p>Could not complete request as requested. <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Try Again</a></p>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>

    <script src="js/popper.min.js"></script>
    <script src="assets/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>

  </body>

</html>

<?php
session_start();

if (isset($_SESSION["company_logged_In"]) || $_SESSION["company_logged_in"] !== true) {
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <?php include '../head.php'; ?>
    <title>Company | Dashboard</title>
  </head>

  <body>

    <?php include 'navbar.php'; ?>


    <div class="container py-3" style="width: 1024px">
      <div class="row">
        <div class="col-sm-6">
          <div class="card shadow-lg rounded-lg mb-2">
            <i class="fa fa-5x fa fa-search text-center text-primary py-4"></i>
            <div class="card-body text-center">
              <h4 class="card-title">User Directory</h4>
              <h6 class="card-subtitle mb-2 text-muted font-weight-bold">Visit page to:</h6>
              <p class="card-text">Search user using their registration number</p>
              <p class="card-text">View user details</p>
              <p class="card-text">Add work experience information</p>
              <a href="<?php echo 'search_user.php?company=' . $_SESSION['comp_id'] ?>"
                 class="btn btn-primary stretched-link btn-block">User Directory</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card shadow-lg rounded-lg mb-2">
            <i class="fa fa-5x fa-briefcase text-center text-primary py-4"></i>
            <div class="card-body text-center">
              <h4 class="card-title">Company Directory</h4>
              <h6 class="card-subtitle mb-2 text-muted font-weight-bold">Visit page to:</h6>
              <p class="card-text">View registered users who have worked in this company before.</p>
              <p class="card-text">View user details</p>
              <a href="<?php echo 'view_users.php?company=' . $_SESSION['comp_id'] ?>"
                 class="btn btn-primary stretched-link btn-block">View Users</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>

  </body>

</html>

<!DOCTYPE html>
<html>
<?php include 'views/admin/includes/header.php' ?>
<body>
<body class="animsition">
    <div class="page-wrapper">

  <!-- Navbar -->

  <?php include 'views/admin/includes/navbar.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'views/admin/includes/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="page-container">
  <?php include 'views/admin/includes/aboveMainContent.php' ?>
  <div class="main-content">
  <div class="section__content section__content--p30">
  <div class="container-fluid">
  <?php include 'views/admin/includes/midMainContent.php' ?>
  <?php require_once  'views/admin/'.$page.'.php' ?>
  <?php include 'views/admin/includes/underMainContent.php' ?>
       </div>
                </div>
            </div>
  </div>
  <!-- /.content-wrapper -->

  
  <!-- Control Sidebar -->
  <?php include 'views/admin/includes/main_footer.php' ?>
  
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<?php include 'views/admin/includes/footer.php' ?>

</body>
</html>

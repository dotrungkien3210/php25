<!DOCTYPE html>
<html>
<?php include 'views/includes/header.php' ?>
<body>
<div class="wrapper">

  <!-- Navbar -->
  <?php include 'views/includes/navbar.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'views/includes/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <?php require_once  'views/'.$page.'.php' ?>
  <!-- /.content-wrapper -->
  
  <?php include 'views/includes/main_footer.php' ?>
  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include 'views/includes/footer.php' ?>
</body>
</html>

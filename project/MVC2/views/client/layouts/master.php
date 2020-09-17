<!DOCTYPE html>
<html>
<?php include 'views/admin/includes/header.php' ?>
<body>
<div class="wrapper">

  <!-- Navbar -->
  <?php include 'views/admin/includes/navbar.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <!-- <?php include 'views/admin/includes/sidebar.php' ?> -->

  <!-- Content Wrapper. Contains page content -->
  <?php require_once  'views/admin/post/'.$page.'.php' ?>
  <!-- /.content-wrapper -->
  
  
  <!-- Control Sidebar -->
  <?php include 'views/admin/includes/main_footer.php' ?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include 'views/admin/includes/footer.php' ?>
</body>
</html>

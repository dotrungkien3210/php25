<!DOCTYPE html>
<html lang="en">
 <?php include 'views/admin/server/includes/header.php'?>
  <body>
    <!-- .app -->
    <div class="app">
      <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
      <!-- .app-header -->
      <?php include 'views/admin/server/includes/sidebar.php'?>
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <?php require_once 'views/admin/server/'.$page.'.php' ?>
        <?php include 'views/admin/server/includes/main_footer.php'?>
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
   <?php include 'views/admin/server/includes/footer.php'?>
  </body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>thông tin chi tiết</title>
	<?php include_once 'views/client/include/header.php'  ?>
	<style>
  .header-area{
  	background-color: #333333;
  }
</style>
</head>
<body>
<?php include_once 'views/client/include/navbar.php'?>
<div style="padding-top: 100px;" >
 <h5><?php echo $posts[0]['posts_name'];  ?></h5>
 <?php echo $posts[0]['posts_content'];  ?>
  <img src="<?php echo $posts[0]['posts_thumbnail'];  ?>">
<?php

?>
</div>
<?php include_once 'views/client/include/footer.php'  ?>
<?php include_once 'views/client/include/main_footer.php'  ?>

</body>
</html>






<?php
include_once 'list.php';//hàm produc.php có tác dụng hiển thị ra các sản phẩm trong cửa hàng
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<p style="display:inline-block;padding-left: 50px ;">Mời bạn xem danh sách sản phẩm</p>
<a style="display:inline-block;padding-left: 450px;"  href="cart.php">xem giỏ hàng</a>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Đơn giá</th>
    <th>Hành động</th>
  </tr>
  <tr>
  	<?php foreach($list['info'] as $key=>$value){ ?>
    <tr>
        <td><?php echo $value['ID']; ?></td>
        <td><?php echo $value['NAME']; ?></td>
        <td><?php echo $value['COST']; ?></td>
        <td><a class="btn btn-success" href="addProduct.php?id=<?php echo $value['ID'] ?>">Thêm sản phẩm</a></td>
    </tr>
    <?php } 
    ?>
    
  </tr>
</table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
</head>
<body>
  <a href="#">tiếp tục mua hàng</a>
<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Tên sản phẩm</th>
    <th>Số Lượng</th>
    <th>Đơn giá</th>
    <th>Thành tiền</th>
    <th>Thời gian cập nhật</th>
    <th>Hành động</th>
  </tr>
  <?php session_start(); ?> 
  

  <tr>
  	<?php foreach($_SESSION['info'] as $key=>$value){ ?>
    <tr>
        <!-- <td><?php echo $value['ID']; ?></td>
        <td><?php echo $value['NAME']; ?></td>
        <td><?php echo $value['COUNT']; ?></td>
        <td><?php echo $value['COST']; ?></td>
        <td><?php echo $value['MONEY']; ?></td> -->
        <td><?php date_default_timezone_set('Asia/Ho_Chi_Minh');
                  echo date('d/m/Y - H:i:s');?></td>
        <td><a class="btn btn-danger" href="delete.php?id=<?php echo $value['ID'] ?>">Delete</a></td>

    </tr>
<?php } 
    ?>
    </tr>
</table>
</body>
</html>
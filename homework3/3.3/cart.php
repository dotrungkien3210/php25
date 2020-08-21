<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style type="text/css">
  td{
    text-align: center;
  }
</style>
<body>
  <a class="btn btn-primary" href="product.php">tiếp tục mua hàng</a>
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
  	<?php foreach($_SESSION['cart'] as $key=>$value){ ?>
    <tr>
        <td><?php echo $value['ID']; ?></td>
        <td><?php echo $value['NAME']; ?></td>
        <td><?php echo $value['COUNT']; ?></td>
        <td><?php echo $value['COST']; ?></td>
        <td><?php echo $value['COUNT']*$value['COST']; ?></td> 
        <td><?php date_default_timezone_set('Asia/Ho_Chi_Minh');
                  echo date('d/m/Y - H:i:s');?></td>
        <td><a class="btn btn-danger" href="deleteProduct.php?id=<?php echo $value['ID'] ?>">Delete</a></td>

    </tr>
<?php } 
    ?>
    </tr>
    <?php 
    $sum=0;
      foreach($_SESSION['cart'] as $key=>$value){
        $sum+=$_SESSION['cart'][$key]['COUNT']*$_SESSION['cart'][$key]['COST'];
      }
      echo "tổng giá trị đơn hàng : ".$sum;
      ?>
</table>
</body>
</html>
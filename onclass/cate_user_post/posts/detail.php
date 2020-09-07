<?php

$id = $_GET['id'];

// Có thể dùng isset để kiểm tra tồn tại $_GET





$severname = "localhost";
$username = 'root';
$password= '';
$dbname = "php25buoi5";
$conn = new mysqli($severname,$username,$password,$dbname);
if ($conn->connect_error) {
	echo "failed to connect".$conn->connect_error;
	exit();
}




// Viết câu lệnh để thêm dữ liệu
    $query = "SELECT * from users WHERE users_id = ". $id;
  
// Thực thi câu lệnh
    $result = $conn->query($query);

    // Trả về 1 bản ghi
    $users = $result->fetch_assoc();
   
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- USERS ---</h3>
        <a href="user_index.php" class="btn btn-primary">Back</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                
            </thead>

          

            	<tr>
	                <td><?php echo $users['users_id'];  ?></td>
	                <td><?php echo $users['users_name'];  ?></td>
	                <td>
	                    <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
	                </td>
	                <td><?php echo $users['users_description'];  ?></td>
	                
	            </tr>
 			
            
      
        </table>
    </div>
</body>
</html>
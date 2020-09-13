<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USER</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- POST ---</h3>
        <a href="add.php" class="btn btn-primary">Add New POST</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>

            <?php foreach ($posts as $key => $post) {?>

                <tr>
                    <td><?php echo $post['posts_id'];  ?></td>
                    <td><?php echo $post['posts_name'];  ?></td>
                    <td>
                        <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                    </td>
                    <td><?php echo $post['posts_description'];  ?></td>
                    <td>
                        <a href="detail.php?id=<?php echo $post['posts_id'] ?>">Detail</a>
                        <a href="edit.php?id=<?php echo $post['posts_id'] ?>">Edit</a>
                        <a href="delete_process.php?id=<?php echo $post['posts_id'] ?>">Delete</a>
                        
                    </td>
                </tr>
            <?php }  ?>
            
      
        </table>
    </div>
</body>
</html>
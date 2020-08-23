
<?php


  ?>


<!DOCTYPE html>
<html>
<head>
  <title>abc</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style type="text/css">
	td{
    text-align: center;
  }
  tr{
    text-align: center;
  }
</style>
<body>
<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input class="btn btn-success" type="file" name="file">
    <input class="btn btn-success" type="submit" value="Upload">
 </form>
    <table style="width:100%">
    <tr>
    <th>No</th>
    <th>Name</th>
    <th>Download</th>
    <th>#</th>
    </tr>
    <tr>
    <?php
 
// This will return all files in that folder
$files = scandir("uploads");
 
for ($a = 2; $a < count($files); $a++){ ?>
    <tr>
    <td><?php echo $a-1; ?></td>
    <td><?php echo $files[$a]; ?></td>
    <td><a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">Download</a></td>
    <td><a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">Delete</a></td>
    </tr></tr>
  <?php } ?>
</table>
   
</form>
</body>
</html>

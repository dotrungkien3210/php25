<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="background-color: #216a68; width: 950px; border-radius: 10px;">
    <h3 align="center">Add Category</h3>
    <hr>
        <form action="index.php?mod=admin&c=category&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder=""  name="categories_name">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder=""  name= "categories_description" >
            </div>
           <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder=""  name= "categories_description" >
            </div>
            Select file to upload:
    <input class="btn btn-success" type="file" name="ANH_SP" id="ANH_SP">
    <input class="btn btn-success"  type="submit" value="Upload" name="submit">
    
            
        </form>
 
 </div>
</body>
</html>
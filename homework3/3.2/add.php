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
  <!-- Thẻ label yêu cầu thuộc tính for phải được điền giá trị, và giá trị trong thuộc tính id của input phải giống với giá trị trong thuộc tính for của label. Làm như thế để label biết được nó được dùng cho input nào. -->
<form action="add_process.php" method="GET" role="form">
  <div class="form-group">
    <label for="StudentId">Mã sinh viên</label>
    <input type="number" class="form-control" placeholder="Nhập mã sinh viên" name="studentId" id="StudentId">
  </div>


  <div class="form-group">
    <label for="StudentName">Họ và tên</label>
    <input type="text" class="form-control" placeholder="Nhập họ và tên" name="studentName" id="StudentName"> 
  </div>


  <div class="form-group">
    <label for="StudentTel">Số điện thoại</label>
    <input type="tel" class="form-control"  placeholder="Nhập số điện thoại" name="studentTel" id="StudentTel">
  </div>

  <div class="form-group">
    <label for="StudentEmail">Email</label>
    <input type="email" class="form-control"  placeholder="Nhập vào Email" name="studentMail" id="StudentEmail">
  </div>

  
 
 
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender"  id="inlineRadio1" value="studentMale" >
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender"  id="inlineRadio2" value="studentFemale" >
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender"  id="inlineRadio3" value="studentOther" >
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>


  <div class="form-group">
    <label for="StudentAdd">Địa Chỉ</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Nhập địa chỉ" name="studentAdd" name="StudentAdd">
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Lưu Thông Tin</button>
    </div>
  </div>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
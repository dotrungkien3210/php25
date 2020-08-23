<?php
 
// xóa file
unlink($_GET["name"]);
 
// chuyển hướng trở về index
header("Location: " . $_SERVER["HTTP_REFERER"]);


?>
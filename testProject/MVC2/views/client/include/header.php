  <head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Đỗ Trung Kiên Blog</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo(URL)?>client/dist/img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo(URL)?>client/dist/style.css">
    <script type="text/javascript" src="<?php echo URL_TEMPLATE_ADMIN?>ckeditor/ckeditor.js"></script>
    <style type="text/css">
        /** stable **/
#stable {
    background-image: url(<?php echo URL_TENPLATE_CLIENT?>dist/img/blog-img/bg.jpg);
    
    padding-top: 83px;
    padding-bottom: 103px;
    display: flex;
    justify-content: space-between;
    height: 625px;
}

#stable > div {

    width: 470px;
}
#stable > ul {
    width: 570px;
}
#stable > div > h2 {
    margin-top: 48px;
    text-align: right;
}
#stable > div > p {
    font-size: 14px;
    line-height: 27px;
    color: #6a6d89;
    text-align: right;
    margin-top: 31px;
    margin-bottom: 53px;
    font-family: "Myriad Pro", sans-serif;
}
#stable > div > div {
    text-align: right;
}
#stable > div > div > a {
    display: inline-block;
    height: 50px;
    line-height: 50px;
    color: white;
    background-color: #33d2fd;
    padding: 0px 44px;
    border-radius: 5px;
    font-size: 15px;
    font-family: "WorkSans Bold", sans-serif;
}

#stable ul li p {
    display: none;
    padding-left: 80px;
    padding-right: 10px;
    font-size: 14px;
    line-height: 27px;
    color: white;
    font-family: "WorkSans Bold", sans-serif;
}

#stable li {
    margin-bottom: 20px;
    box-shadow: 0px 6px 9px rgba(35, 39, 47, 0.1);
    border-radius: 4px;
}
#stable li a {
    line-height: 75px;
    padding-left: 80px;
    font-size: 15px;
    color: #233148;
    font-family: "WorkSans Bold", sans-serif;
    background-repeat: no-repeat;
    display: inline-block;
    height: 75px;
    width: 100%;
    background-position: 26px center;
}
#stable li:nth-child(1) a {
    background-image: url(<?php echo URL_TENPLATE_CLIENT?>dist/images/heart.png);
}
#stable li:nth-child(2) a {
    background-position: 34px center;
    background-image: url(<?php echo URL_TENPLATE_CLIENT?>dist/images/tag.png);
}
#stable li:nth-child(3) a {
    background-image: url(<?php echo URL_TENPLATE_CLIENT?>dist/images/brifcase.png);
}
#stable li:nth-child(4) a {
    background-image: url(<?php echo URL_TENPLATE_CLIENT?>dist/images/pencil.png);
}

#stable li:hover {
    background-color: #33d2fd;
    padding-bottom: 26px;
}
#stable li:hover p {
    display: block;
}
a{
    text-decoration: none;
}
#footer{
    
    background-color: #1F1F1F;
    display: flex;
    flex-wrap: wrap;
}
#footer div{
    margin: 5px;
}
#footer div:first-child{
    width: 33%;
}
#footer div:first-child a{
    display: inline-block;
    background-color: #8598CC;
    width: 186px;
    height: 50px;
    line-height: 50px;
    border-radius: 5px;
    text-align: center;
    font-size: 20px;
    color: white;
    margin: 60px 5px 60px 50px;
}
#footer div:first-child p{
    color: #7E7E7E;
    margin: 5px 5px 5px 50px;
}
.linkContact{
    width: 30%;
}
#footer div h3{
    margin-top: 60px;
    color: white;
}
.linkContact a{
    display: block;
    color: #6B6B6B;
    border-bottom: 1px dotted #2B2B2B;
    margin: 25px 5px;
}
.clear-both{
                clear: both;
            }
            .buy-button{
                text-align: right;
                margin-top: 10px;
            }
            .buy-button a{
                background: #444;
                padding: 5px;
                color: #fff;
            }
            #pagination{
                text-align: right;
                margin-top: 15px;
            }
            .page-item{
                border: 1px solid #ccc;
                padding: 5px 9px;
                color: #000;
            }
            .current-page{
                background: #000;
                color: #FFF;
            }
    </style>
</head>
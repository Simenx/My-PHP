<?php
$con = mysqli_connect('127.0.0.1','root','root','study');    //连接数据库
if (!$con){
    die("数据库连接失败".mysql_error());
}



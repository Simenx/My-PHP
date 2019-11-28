<?php
header('Content-type:text/html;charset=utf8');

if (!isset($_POST['submit'])) {
    exit('错误执行');
}

require 'connect.php';  //连接数据库
$name = $_POST['name']; //post表单里的name
$password = $_POST['password']; //post表单里的password

$sql = "select * from user where username= '$name' and password = '$password'";
$result = $con->query($sql);   //执行sql语句
$row = mysqli_num_rows($result);

if ($row) {
    echo '<script type="text/javascript">window.alert("登陆成功，三秒后进入主页")</script>';
    header("refresh:3;url=welcome.html");
    exit();
} else {
    echo '
                <script type="application/javascript">
                    setTimeout(function() {
                        window.alert("登录失败，用户名或密码错误")
                      window.location.href="login.html"
                    },500);
                </script>
                ';
}



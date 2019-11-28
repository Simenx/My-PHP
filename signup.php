<?php
header('Content-type:text/html;charset=utf8');
$name = $_POST['name']; //post表单里的name
$password = $_POST['password']; //post表单里的password

require 'connect.php';  //连接数据库
$sql = "insert into user values('$name','$password')";    //向数据库插入表单传来的用户注册信息
$resule = $con->query($sql);
if(!$resule){
    echo '
                <script type="application/javascript">
                    setTimeout(function() {
                        window.alert("注册失败，即将自动返回")
                      window.location.href="signup.html"
                    },500);
                </script>
                ';
}else{
    echo '
                <script type="application/javascript">
                    setTimeout(function() {
                        window.alert("注册成功，即将进入登陆页")
                      window.location.href="login.html"
                    },500);
                </script>
                ';
}
    $con ->close(); //关闭数据库连接
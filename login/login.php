<?php
session_start();
header("content-type:text/html;charset=utf-8");
//连接数据库
include_once 'public.php';
//接收$_POST用户名和密码
$username = $_POST['username'];
$password = md5(trim($_POST['password'])); //使用md5加密
session_start(); #使用session方法实现传值，记录在服务器端。
$_SESSION["username"] = $username;
//查看表user用户名与密码和传输值是否相等
$sql = "SELECT * FROM t_user WHERE username = '$username' AND password = '$password'";
//result必需规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。
#$result = mysql_query($link, $sql);
$result = my_error($sql);
$num = mysqli_num_rows($result); //函数返回结果集中行的数量
//判断是否登录后显示或跳转
if ($num) {
    $pan = "SELECT statu FROM t_user WHERE username = '$username' AND password = '$password' ";
    $pan1 = my_error($pan);
    $duan = array();
    $duan = mysqli_fetch_array($pan1); #mysql_fetch_array()
    $chenlin = $duan['statu'];
    //$duan = mysql_result($pan1);
    if ($duan['statu'] == 1) {
        if ($username == 'admin') {
            echo '管理员登录成功！！！';
            header('refresh:2;url=../admin/manegadmin.php');
        } else {
            echo '会员登录成功！！！';
            header('refresh:2;url=../maneg.php');
        }
    } else {
        echo '您没有激活，请前往激活！';
        echo '<a href="../index.php" type="button"><h1>返回</h1></a>';
    }
} else {
    echo '您的账户或者密码错误，请您检查是否输入错误，或者是否注册成功！';
    echo '<a href="../index.php" type="button"><h1>返回</h1></a>';
}

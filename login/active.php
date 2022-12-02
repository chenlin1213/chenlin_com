<?php
header("Content-type:text/html;charset=utf-8");
include_once("public.php");
$token = stripslashes(trim($_GET['verify']));
$token = $_POST['token'];
$nowtime = time();
$query = my_error("select id,token_exptime from t_user where statu='0' AND token='{$token}';");

// print_r($query);
$row = array();
$row = mysqli_fetch_array($query);
// echo $row;
if ($row) {
    if ($nowtime > $row['token_exptime']) {
        $msg = '您的激活有效期已过，请登录您的账号重新发送激活邮件,3秒后自动返回首页。';
        header('refresh:3;url=../index.php');
    } else {
        $sssm = my_error("update t_user set statu=1 where id=" . $row['id']);
        if (mysqli_affected_rows($con) != 1) die(0);
        $msg = '激活成功！3秒后自动返回首页！';
        header('refresh:3;url=../index.php');
    }
} else {
    $msg = '激活码错误或者您重复激活';
    header('refresh:2;url=active.html');
}
echo $msg;

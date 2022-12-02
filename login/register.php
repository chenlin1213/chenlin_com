<?php
header("content-type:text/html;charset=utf-8");

use emailSmtp as GlobalEmailSmtp;
use PHPMailer\PHPMailer\PHPMailer;
//连接数据库
include_once 'public.php';

//接收$_POST用户名和密码
$username = $_POST['username'];
$password = $_POST['password'];
//  $email = $_POST['email'];
//查看表user用户名是否存在或为空
$sql_select = "SELECT * FROM t_user WHERE username = '$username'";
// $sql_select1 = "select * from t_user where email = '$e_mail'";
//result必需规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。
$select = mysqli_query($con, $sql_select); //执行sql
// $select1 = mysql_query($sql_select1);
$num = mysqli_num_rows($select); //函数返回结果集中行的数量
// $num1 = mysql_num_rows($select1);
if ($username == "" || $password == "") { //|| $e_mail == ""
    echo "请确认信息完整性";
} else if ($num) {
    header('refresh:3;url=register.html');
    echo "已存在用户名,3秒之后会返回，请重新注册"; //已存在账户名输出错误
    // } else if ($num1) {
    //     header('refresh:3;url=register.html');
    //     echo "邮箱已存在了，请绑定其他邮箱！";
} else {
    // $sql = "insert into t_user(username,password,email) values('$username','$password','$email')";
    // $result = mysql_query($sql);

    // 将用户密码加密，构造激活识别码
    $password = md5(trim($_POST['password'])); //使用md5加密
    $email = trim($_POST['email']); //邮箱
    $regtime = time(); //注册时间等于当前时间
    $token = md5($username . $password . $regtime); //创建用于激活识别码
    $token_exptime = time() + 60 * 60 * 24; //过期时间设定为24小时
    $sql = "insert into t_user(username,password,email,token,token_exptime,regtime) 
        values('{$username}','{$password}','{$email}','{$token}','{$token_exptime}','{$regtime}');";
    $result = my_error($sql);
    $sql2 = "insert into recom(username) values('{$username}')";
    $result1 = my_error($sql2);


    // $to = $email;
    // $title = "用户账号激活";
    // $content = "亲爱的" . $username . ":<br/>感谢您在我站注册了新账号。
    //     <br/>请点击链接激活您的账号。<br/><a href='//www.jb51.net/demo/active/php?verify=" . $token . "'target=
    //     '_blank'>//www.jb51.net/demo/active.php?verify=" . $token . "</a><br/>如果以上链接无法点击，
    //     请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。
    //     <br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>
    //     ----------陈氏商城//www.chenshi.net敬上</p>";
    // // $rs = $smtp->sendEmail($smtpemailfrom, $emailsubject, $emailbody);
    // $emailSmtp = new emailSmtp();
    // $rs = $emailSmtp->sendEmail($to, $Subject, $content);


    //获取前端提交的内容
    $to = $email;
    $title = '用户账号激活';
    $content = "亲爱的" . $username . ":<br/>感谢您在我站注册了新账号。
    <br/>请点击链接激活您的帐号。<br/><a href='//chenlin.com/login/active.php?verify="
        . $token . "' target='_blank'>chenlin.com/login/active.php?verify=" . $token .
        "</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。
    <br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>
    ----------陈氏商城//www.chenshi.net敬上</p>";

    // <br/>请点击链接激活您的帐号。<br/><a href='//www.jb51.net/demo/active.php?verify=" 
    // . $token . "' target='_blank'>//www.jb51.net/demo/active.php?verify=" . $token . 
    // "</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进入访问，该链接24小时内有效。
    // <br/>如果此次激活请求非你本人所发，请忽略本邮件。<br/><p style='text-align:right'>


    include_once 'smtp_class.php';
    $flag = sendmail($to, $title, $content);

    if ($flag) {
        header('refresh:2;url=../index.php');
        echo "<script language=\"JavaScript\">alert(\"发送成功！\");</script>";
    } else {
        echo "发送失败！";
    }

    if ($flag) {
        $msg = '恭喜您，注册成功！<br/>请登录到您的邮箱及时激活您的账号！';
    } else {
        $msg = '注册失败！';
    }
    echo $msg;
}



    // //判断是否注册后显示内容
    // if (!$result) {
    //     echo "注册不成功！" . "<br>"; //输出错误
    //     echo "<a href='index.php'>返回</a>"; //超链接到首页
    // } else {
    //     header('refresh:3;url=index.php');
    //     echo "注册成功!现在返回登陆" . "<br/>"; //输出成功
    //     // echo "<a href='index.php'>立刻登录</a>"; //超链接到首页
    // }

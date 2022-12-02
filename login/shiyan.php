<?php
header("Content-type:text/html;charset=utf-8");

use PHPMailer\PHPMailer\PHPMailer;

function sendmail($to, $title, $content)
{
    //引入PHPmailer的核心文件，使用require_once包含避免出现PHPmailer类重复定义的警告
    include './Email/PHPMailer.php';
    include './Email/SMTP.php';
    include './Email/POP3.php';
    include './Email/OAuth.php';
    include './Email/Exception.php';
    //实例化PHPMailer核心类
    $mail = new PHPMailer();
    //启用smtp的debug进行调试
    $mail->SMTPDebug = 1;
    //使用smtp鉴权方式发送邮件
    $mail->isSMTP();
    //SMTP需要鉴权，这个必须是true
    $mail->SMTPAuth = true;
    //链接QQ域名邮箱的服务器地址
    $mail->Host = 'smtp.qq.com';
    //设置使用ssl加密方式登录鉴权
    $mail->SMTPSecure = 'ssl';
    //设置ssl连接smtp服务器的远程服务器端口号
    $mail->Port = 465;
    //设置发件人的主机域，可有可无 默认为localhost
    $mail->Hostname = '';
    //设置发送的邮件的编码
    $mail->CharSet = 'UTF-8';
    //设置发件人的姓名 显示为发件人
    $mail->FromName = $title;
    //smtp登陆的账号
    // $mail->Username = '498443836@qq.com';
    $mail->Username = '1781582206@qq.com';
    //密码  使用生成的授权码
    // $mail->Password = 'ixrwqxknssidbgcd';
    $mail->Password = 'saucestgftgebjac';
    //设置发件人的邮箱地址
    $mail->From = '1781582206@qq.com';
    //邮件正文是否为HTML编码 此处是一个方法 不再是属性
    $mail->isHTML(true);
    $mail->addAddress($to, $title);
    $mail->Subject = $title;
    $mail->Body = $content;
    $status = $mail->send();

    //判断与提示信息
    if ($status) {
        return true;
    } else {
        return false;
    }
}
//获取前端提交的内容
$title = '曾伟涛';
$content = ;
$to = '1781582206@qq.com';

$flag = sendmail($to, $title, $content);

if ($flag) {
    echo "<script language=\"JavaScript\">alert(\"发送成功！\");</script>";
} else {
    echo "发送失败！";
}

<?php

header('Content-type:text/html;charset=utf-8');

//连接数据库
$con = mysqli_connect('localhost:3306', 'chenlin', 'chenlin', 'chenlin_com');
function my_error($sql)
{
    $con = mysqli_connect('localhost:3306', 'chenlin', 'chenlin', 'chenlin_com');
    $res = mysqli_query($con, $sql);
    //错误判定
    if (!$res) {
        echo 'SQL指令执行出错,错误编号为:' . mysqli_error($con) . '<br/>';
        echo 'SQL指令执行错误,错误信息是:' . mysqli_error($con) . '<br/>';
        //执行完之后终止代码执行
        exit();
    }
    return $res;
}
my_error('set names utf8;');
my_error('use chenlin_com;');

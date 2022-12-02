<?php
header("Content-type:text/html;charset=utf-8");
include_once("../login/public.php");


function cha($username)
{
    $sql = "select * from recom where username = '{$username}'";
    $news = array();
    $res = my_error($sql);
    while ($row = mysql_fetch_assoc($res)) { #mysql_fetch_assoc 从结果集中取出一组数据
        $news[] = $row;
    }
    // $name = empty($_POST['name']) ? 'admin' : trim($_POST['name']);
    foreach ($news as $new) :
        $recomuser1 = trim($new["recomuser1"]);
    endforeach;
    return $recomuser1;
}

$username = '12345';
$work = cha($username);
echo $work;

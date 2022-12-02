<?php
session_start();
echo $_SESSION["username"];
$username = $_SESSION["username"];
include_once('../login/public.php');
$sql = "select * from recom  where username = '{$username}'";
$news = array();
$res = my_error($sql);
while ($row = mysqli_fetch_assoc($res)) { #mysql_fetch_assoc 从结果集中取出一组数据
    $news[] = $row;
}
// $name = empty($_POST['name']) ? 'admin' : trim($_POST['name']);
foreach ($news as  $new) :
    $recomuser1 = empty($new["recomuser1"]) ? 'null' : trim($new["recomuser1"]);
// $recomuser2 = empty($new["recomuser2"]) ? 'null' : trim($new["recomuser2"]);
endforeach;
$recomuserd1 = $_POST['recomuser1'];
// $recomuserd2 = $_POST['recomuser2'];

if ($recomuser1 !== 'null') {
    echo '您不能重复添加！';
}
if ($recomuser1 == 'null') {
    $sql1 = "select * from recom  where username = '{$recomuserd1}'";
    $news1 = array();
    $res1 = my_error($sql1);
    while ($row1 = mysqli_fetch_assoc($res1)) { #mysql_fetch_assoc 从结果集中取出一组数据
        $news1[] = $row1;
    }
    foreach ($news1 as $new1) :
        $recomuser2 = empty($new1["recomuser1"]) ? '您没有推荐人的推荐人' : trim($new1["recomuser1"]);
    endforeach;
    if ($recomuser2 = $username) {
        echo '这个推荐人的推荐人就是您，不可以绑定！';
    } else {
        $sql3 = "update recom set recomuser1 = '{$recomuserd1}' where username = '{$username}'";
        my_error($sql3);
        echo  '推荐人添加成功！';
    }
} else {
}

echo <<<EOF
    <div style="text-align:right">
     <a href="recomadd.php"><button style="width: 20%;height: 40px;;">返回</button></a>
    </div>
EOF;

// if ($recomuser2 == 'null') {
//     $sql2 = "update recom set recomuser2 = '{$recomuserd2}' where username = '{$username}'";
//     my_error($sql2);
//     echo  '推荐人的推荐人添加成功！';
// } else {
//     // echo '您添加到推荐人已经存在，无法重复添加。';
// }
// header("refresh:2;url=../maneg.php");

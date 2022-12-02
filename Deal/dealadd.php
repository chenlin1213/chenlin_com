<?php
header("Content-type:text/html;charset=utf-8");
// $name = empty($_POST['name']) ? 'admin' : trim($_POST['name']);
$username = trim($_POST['username']);
$deal_type = $_POST['deal_type'];
$deal_price  = $_POST['deal_price'];
$deal_bd = $_POST['deal_bd'];
$deal_time = time();
if (empty($deal_type)) {
    echo '类型不能为空';
}

include_once('../login/public.php');

#添加交易记录
$sql = "insert into deal values(null,'$username','$deal_type','$deal_price','$deal_bd','$deal_time')";
$insert_id = my_error($sql);
#循环进行分红
#查询函数，通过给的用户，查他的推荐人
function cha($username)
{
    $sql = "select * from recom where username = '{$username}'";
    $news = array();
    $res = my_error($sql);
    while ($row = mysqli_fetch_assoc($res)) { #mysql_fetch_assoc 从结果集中取出一组数据
        $news[] = $row;
    }
    // $name = empty($_POST['name']) ? 'admin' : trim($_POST['name']);
    foreach ($news as $new) :
        $recomuser1 = trim($new["recomuser1"]);
    endforeach;
    return $recomuser1;
}

if (!empty($username)) {
    $work1 = cha($username); #work1表示第一个被查出来的推荐人
    if (!empty($work1)) {
        $deal_price1 = $deal_price * 0.1;
        $sql1 = "insert into deal values(null,'$work1','收入','$deal_price1','第一道分红','$deal_time')";
        $insert_id2 = my_error($sql1);
        $work2 = cha($work1); #第二个被查出来的推荐人
        if (!empty($work2)) {
            $deal_price2 = $deal_price * 0.05;
            $sql1 = "insert into deal values(null,'$work2','收入','$deal_price2','第二道分红','$deal_time')";
            $insert_id2 = my_error($sql1);
            $workzong = $work2;
            $work3 = cha($workzong);
            while (!empty($work3)) { #二级以上的推荐人都只有百分之二
                $deal_price3 = $deal_price * 0.02;
                $sql = "insert into deal values(null,'$work3','收入','$deal_price3','第N道分红','$deal_time')";
                $insert_id3 = my_error($sql);
                $workzong = $work3;
                $work3 = cha($workzong);
            }
        }
    }
}



#循环分红











// #提取推荐人
// $sqlt = "select * from recom  where username = '{$username}'";
// $newst = array();
// $rest = my_error($sqlt);
// while ($rowt = mysql_fetch_assoc($rest)) { #mysql_fetch_assoc 从结果集中取出一组数据
//     $newst[] = $rowt;
// }
// // $name = empty($_POST['name']) ? 'admin' : trim($_POST['name']);
// foreach ($newst as  $newt) :
//     $recomuser1 = $newt["recomuser1"];
//     $recomuser2 = $newt["recomuser2"];
// endforeach;
// #提取推荐人

// #判断交易类型，进行分红
// if ($deal_type == '支出' and $deal_bd = '商品买卖') {
//     if (!empty($recomuser1)) {
//         $deal_price1 = $deal_price * 0.1;
//         $sql1 = "insert into deal values(null,'$recomuser1','收入','$deal_price1','第一道分红','$deal_time')";
//         $insert_id2 = my_error($sql1);
//     }
//     if (!empty($recomuser2)) {
//         $deal_price2 = $deal_price * 0.05;
//         $sql2 = "insert into deal values(null,'$recomuser2','收入','$deal_price2','第二道分红','$deal_time')";
//         $insert_id3 = my_error($sql2);
//     }
// }



echo '添加成功';


header("refresh:3;url=../maneg.php");

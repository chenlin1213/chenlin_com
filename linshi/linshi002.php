<?php
$q = isset($_POST['q']) ? $_POST['q'] : '';
if (is_array($q)) {
    $sites = array(
        'runoob' => '菜鸟教程:http://www.runoob.com',
        'google' => 'google搜索:http://www.google.com',
        'taobao' => '淘宝:http://www.taobao.com',
    );
    foreach ($q as $val) {
        echo $sites[$val] . PHP_EOL;
    }
}


include("../login/public.php");
$username = 'chenlin';

#查询函数，通过给的用户，查他的推荐人
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

// $work = array();

if (!empty($username)) {
    $work1 = cha($username); #work1表示第一个被查出来的推荐人
    if (!empty($work1)) {
        $deal_price1 = $deal_price * 0.1;
        $sql1 = "insert into deal values(null,'$work1','收入','$deal_price1','第一道分红','$deal_time')";
        $insert_id2 = my_error($sql1);
        $work2 = cha($work1); #第二个被查出来的推荐人
        if (!empty($work2)) {
            $deal_price2 = $deal_price * 0.05;
            $sql1 = "insert into deal values(null,'$work1','收入','$deal_price1','第一道分红','$deal_time')";
            $insert_id2 = my_error($sql1);
            $workzong = $work2;
            while (!empty($work3 = cha($workzong))) { #二级以上的推荐人都只有百分之二
                $deal_price3 = $deal_price * 0.02;
                $sql = "insert into deal values(null,'$work3','收入','$deal_price3','第N道分红','$deal_time')";
                $insert_id3 = my_error($sql);
                $workzong = $work3;
            }
        }
    }
}




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

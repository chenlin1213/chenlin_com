<?php
header("Content-type:text/html;charset=utf-8");
session_start();
$username = $_SESSION["username"];
include_once('../login/public.php');
$sql = "select * from deal order by deal_time desc";
$news = array();
$res = my_error($sql);
while ($row = mysqli_fetch_assoc($res)) { #mysql_fetch_assoc 从结果集中取出一组数据
    $news[] = $row;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .header {
            height: 50px;
            padding-top: 15px;
            padding-left: 20px;
        }

        .main {
            width: 100%;
        }

        table {
            width: 100%;

        }
    </style>
    <title>用户流水</title>
</head>

<body>
    <div style="text-align:right">
        <a href="manegadmin.php"><button style="width: 20%;height: 40px;;">返回</button></a>
    </div>
    <table>
        <tr style="width: 100%;">
            <td style="width:30%;">

                <a href="adminusersel.php"><button style=" width: 100%;height: 60px;">全部账单</button></a>

            </td>
            <td style="width:25%;">

                <a href="adminsj.php"><button style="background-color: red;width: 100%;height: 60px;">时间查询</button></a>

            </td>
            <td style="width:25%;">

                <a href="adminsz.php"><button style="width: 100%;height: 60px;">收支查询</button></a>

            </td>
            <td style="width:25%;">

                <a href="adminbdlx.php"><button style="width: 100%;height: 60px;">变动类型查询</button></a>

            </td>
        </tr>
    </table>
    <div class="main">
        <table border="1" cellspacing="0">
            <tr>
                <th>交易编号</th>
                <th>交易人</th>
                <th>交易时间(降序)</th>

            </tr>
            <!-- 遍历数组 -->
            <?php foreach ($news as  $new) : ?>
                <tr>
                    <td>
                        <?php echo $new['deal_id'] ?>
                    </td>
                    <td>
                        <?php echo $new['username'] ?>
                    </td>
                    <td>
                        <?php echo date("Y年m月d日 H时i分s秒", $new['deal_time']) ?>
                    </td>


                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
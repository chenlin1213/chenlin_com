<?php
header("Content-type:text/html;charset=utf-8");
session_start();
$username = $_SESSION["username"];
include_once('../login/public.php');
$sql = "select * from t_user";
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
    <div class="main">
        <table border="1" cellspacing="0">
            <tr>
                <th>用户编号</th>
                <th>用户姓名</th>
                <th>注册时间</th>
                <th>用户邮箱</th>
                <th>用户状态</th>

            </tr>
            <!-- 遍历数组 -->
            <?php foreach ($news as  $new) : ?>
                <tr>
                    <td>
                        <?php echo $new['id'] ?>
                    </td>
                    <td>
                        <?php echo $new['username'] ?>
                    </td>
                    <td>
                        <?php echo date("Y年m月d日 H时i分s秒", $new['regtime']) ?>
                    </td>
                    <td>
                        <?php echo $new['email'] ?>
                    </td>
                    <td>
                        <?php echo $new['statu'] ?>
                    </td>


                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>
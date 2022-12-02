<?php
header("Content-type:text/html;charset=utf-8");
session_start();
// echo $_SESSION["username"];
echo <<<EOF
    <div style="text-align:right">
        <a href="../index.php"><button style="width: 20%;height: 40px;;">退出登录</button></a>
    </div>
EOF;
echo <<<EOF
<h1 style="text-align: center;">管理员</h1>
EOF;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>开心商城管理员主页</title>
    <style>
        .my_link_button {
            display: block;
            width: 100px;
            height: 30px;
            background: #FFFAFA;
            margin-top: 20px;
            font-size: 8px;
            text-decoration: none;
            text-align: center;
            line-height: 28px;
            color: #999999;
        }

        .my_link_button_select {
            display: block;
            width: 100px;
            height: 30px;
            background: #0081c2;
            margin-top: 20px;
            font-size: 8px;
            text-decoration: none;
            text-align: center;
            line-height: 28px;
            color: white;
        }

        .my_link_button:hover {
            text-decoration: none;
            color: white;
            background: #0081c2
        }

        .big_box {
            background: url('../backg.jpeg');
            background-size: 100% 100%;
        }
    </style>
</head>

<body class="big_box">

    <!-- <div style="background-image:url('background.jpeg');background-size:cover;;height:540px;"></div> -->

    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend style="text-align: center;"><?php echo "欢迎管理员" . $_SESSION["username"] . "来到开心商城！" ?></legend>
        <div>
            <div style="text-align:center;">
                <a style="width:30%;margin-top: 10px; text-align:center;" href="adminyh.php" name="mylink" class="my_link_button">用户管理</a>
                <a style="width:30%;margin-top: 10px; text-align:center;" href="adminusersel.php" name="mylink" class="my_link_button">总账单查询</a>
                <!-- <a style="width:30%;margin-top: 5px;" href="#" name="mylink" class="my_link_button">用户管理</a> -->
            </div>

        </div>
    </fieldset>

    <script>
        $("a[name='mylink']").removeClass("my_link_button_select");
        $(this).addClass("my_link_button_select");
    </script>
</body>

</html>
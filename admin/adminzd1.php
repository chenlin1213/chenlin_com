<?php
header("Content-type:text/html;charset=utf-8");
echo <<<EOF
    <h1>账单查询</h1>
EOF;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>账单查询</title>
</head>

<body>
    <table>
        <tr style="width: 100%;">
            <td style="width:30%;">

                <a href="adminusersel.php"><button style="background-color: red; width: 100%;height: 60px;">全部账单</button></a>

            </td>
            <td style="width:25%;">

                <a href="../index.php"><button style="width: 100%;height: 60px;">时间查询</button></a>

            </td>
            <td style="width:25%;">

                <a href="../index.php"><button style="width: 100%;height: 60px;">收支查询</button></a>

            </td>
            <td style="width:25%;">

                <a href="../index.php"><button style="width: 100%;height: 60px;">变动类型查询</button></a>

            </td>
        </tr>
    </table>
</body>

</html>
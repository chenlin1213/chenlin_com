<?php
session_start();
echo $_SESSION["username"];
echo <<<EOF
    <div style="text-align:right">
        <a href="../maneg.php"><button style="width: 20%;height: 40px;;">返回</button></a>
    </div>
EOF;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>欢迎使用开心商城</title>
    <link rel="stylesheet" type="text/css" href="https://www.layuicdn.com/layui/css/layui.css" />
    <script src="https://www.layuicdn.com/layui/layui.js" charset="utf-8"></script>
</head>

<body>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <!-- <legend>交易管理</legend> -->
        <legend><?php echo "欢迎" . $_SESSION["username"] . "使用交易管理：" ?></legend>

    </fieldset>
    <div style="padding: 20px; background-color: #F2F2F2;">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md6">
                <div class="layui-card">
                    <div class="layui-card-header">交易</div>
                    <div class="layui-card-body">
                        <form class="layui-form" action="dealadd.php" method="post" onsubmit="return checkForm(this)" lay-filter="example">
                            <div class="layui-form-item">
                                <label class="layui-form-label">用户名：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="username" placeholder="请输入账号" class="layui-input" value="<?php echo $_SESSION["username"]; ?>">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">交易类型：</label>
                                <div class="layui-input-block">
                                    <select name="deal_type">
                                        <option>--请选择交易类型--</option>
                                        <option value="收入">收入</option>
                                        <option value="支出">支出</option>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">交易金额:</label>
                                <div class="layui-input-block">
                                    <input type="text" name="deal_price" placeholder="请输入金额" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">变动类型:</label>
                                <div class="layui-input-block">

                                    <select name="deal_bd">
                                        <option>--请选择变动类型--</option>
                                        <option value="商品买卖">商品买卖</option>
                                        <option value="第一道分红">投资</option>
                                        <option value="第二道分红">获利</option>

                                    </select>
                                </div>
                            </div>

                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <input type="submit" class="layui-btn layui-btn-normal" value="确定记录" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        // 验证输入不为空的脚本代码
        function checkForm(form) {
            if (form.username.value == "") {
                alert("用户名不能为空!");
                form.username.focus();
                return false;
            }
            if (form.password.value == "") {
                alert("密码不能为空!");
                form.password.focus();
                return false;
            }
            return true;
        }
    </script>


</body>

</html
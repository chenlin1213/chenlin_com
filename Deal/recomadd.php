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
    $recomuser1 = empty($new["recomuser1"]) ? '您没有添加推荐人' : trim($new["recomuser1"]);
// $recomuser2 = empty($new["recomuser2"]) ? '您没有添加推荐人的推荐人' : trim($new["recomuser2"]);
endforeach;
if (!empty($recomuser1)) {
    $sql1 = "select * from recom  where username = '{$recomuser1}'";
    $news1 = array();
    $res1 = my_error($sql1);
    while ($row1 = mysqli_fetch_assoc($res1)) { #mysql_fetch_assoc 从结果集中取出一组数据
        $news1[] = $row1;
    }
    foreach ($news1 as $new1) :
        $recomuser2 = empty($new1["recomuser1"]) ? '您没有推荐人的推荐人' : trim($new1["recomuser1"]);
    endforeach;
} else {
    $recomuser2 = '您没有推荐人的推荐人';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>推荐人页面</title>
    <link rel="stylesheet" type="text/css" href="https://www.layuicdn.com/layui/css/layui.css" />
    <script src="https://www.layuicdn.com/layui/layui.js" charset="utf-8"></script>
</head>

<body>
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <!-- <legend>交易管理</legend> -->
        <legend><?php echo "关于" . $_SESSION["username"] . "的推荐人联系：" ?></legend>

    </fieldset>
    <div style="padding: 20px; background-color: #F2F2F2;">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md6">
                <div class="layui-card">
                    <div class="layui-card-header">交易</div>
                    <div class="layui-card-body">
                        <form class="layui-form" action="recomaddr.php" method="post" onsubmit="return checkForm(this)" lay-filter="example">
                            <div class="layui-form-item">
                                <label class="layui-form-label">用户名：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="username" placeholder="<?php echo $_SESSION["username"]; ?>" class="layui-input" value="">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">你的推荐人是：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="recomuser1" placeholder="<?php echo $recomuser1 . '(不可以重复添加)'; ?>" class="layui-input" value="">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">你推荐人的推荐人是：</label>
                                <div class="layui-input-block">
                                    <!-- <p type="text" placeholder="<?php echo $recomuser2 . '(不可以重复添加)'; ?>" class="layui-input" value=""> -->
                                    <button><?php echo $recomuser2 . '(不可以重复添加)'; ?></button>
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
        // function checkForm(form) {
        //     if (form.username.value == "") {
        //         alert("用户名不能为空!");
        //         form.username.focus();
        //         return false;
        //     }
        //     if (form.password.value == "") {
        //         alert("密码不能为空!");
        //         form.password.focus();
        //         return false;
        //     }
        //     return true;
        // }
    </script>


</body>

</html
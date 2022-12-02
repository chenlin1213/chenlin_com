<?php
header("Content-type:text/html;charset=utf-8");
$name = 'chenlin';
echo <<<EOF
    ABC$name 是一个学生
    <h1>$name 是一个学生</h1>
EOF;

echo '<br/>';
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
echo "<hr>";
rsort($a);
var_dump($a);
?>
<form action="linshi002.php" method="post">
    <select name="q[]">
        <option value="">请选择一个站点</option>
        <option value="runoob">runoob</option>
        <option value="google">google</option>
        <option value="taobao">taobao</option>
    </select>
    <input type="submit" value="提交">
</form>
<form action="linshi002.php" method="post">
    <input type="checkbox" name="q[]" value="runoob"> Runoob<br>
    <input type="checkbox" name="q[]" value="google"> Google<br>
    <input type="checkbox" name="q[]" value="taobao"> Taobao<br>
    <input type="submit" value="提交">
</form>

<?php
echo '这是第' . __LINE__ . '行';


$to = "chenlin7225@163.com";
$subject = "chenin";
$message = "hello!这是验证码";
$from = "1781582206@qq.com";
$headers = "From:" . $from;
$dodo = mail($to, $subject, $message, $headers);
var_dump($dodo);
echo "邮件已发送";

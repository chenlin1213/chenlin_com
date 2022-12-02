<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>淘宝页面</title>
    <style type="text/css">
        /*全局选择器，控制字体大小统一，方便排版*/
        * {
            font-size: 14px;
        }

        /*控制main和top的颜色及尺寸，方便调节，后面可以再将背景色去掉*/
        #top {
            width: 1000px;
            height: 220px;
            /* background-color: #87CEEB; */
            margin: 0 auto;
            /*上下外边距为0，左右自动对齐（居中）*/
        }

        #main {
            width: 1000px;
            height: 500px;
            /* background-color: #DEB887; */
            margin: 0 auto;
        }

        /*a标签标示了超链接，这里采用鼠标Hover显示下划线的效果*/
        #top1 a {
            color: black;
            /*字体颜色黑色，由于文字都用a标签包裹，这里只能通过a标签精准调节，注意优先级*/
            text-decoration: none;
            /*下划线去掉*/
        }

        #top1 a:hover {
            text-decoration: underline;
            /*鼠标放上去显示下划线*/
        }

        /*top1的a与top3的a不同这里分别处理*/
        #top3 a {
            color: black;
            /*字体颜色黑色，由于文字都用a标签包裹，这里只能通过a标签精准调节，注意优先级*/
            text-decoration: none;
            /*下划线去掉*/
        }

        #top3 a:hover {
            text-decoration: underline;
            /*鼠标放上去显示下划线*/
        }

        /*分配top1、top2和top3全局*/
        #top1 {
            height: 30px;
            border-radius: 5px;
            background-color: #888;
            text-indent: 2em;
            /*文字缩进2字符*/
            line-height: 30px;
            /*背景框高度是30px，所以这里也是写30，保证居中*/
        }

        #top2 {
            height: 100px;
            margin-top: 10px;
        }

        #top3 {
            height: 30px;
            border-radius: 5px;
            background-color: #888;
            text-indent: 2em;
            line-height: 30px;
        }

        #top4 {
            height: 40px;
            border-radius: 5px;
            border: 1px solid gainsboro;
            /*实心框线*/
            line-height: 40px;
            text-indent: 2em;
        }

        /*主体部分全局控制*/
        #main table p {
            font-size: 12px;
            line-height: 5px;
            /*控制行间距，也可以直接控制p标签的margin*/
            margin-bottom: 0;
            /*p标签自带的有外边距，这里需要将底部的margin去除，将外框和该标签底部的间距消除*/
        }

        #main table td {
            border: 1px solid gainsboro;
            padding: 10px;
            /*内边距，图片文字距离父容器的距离*/
            border-radius: 5px;
        }
    </style>
    <link href="shopcart.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!--顶部第一部分，高度、圆角、背景色，此外，内部分两个div，一个左浮动，一个右浮动-->
    <div id="top1">
        <div style="float: left;">
            <!--三个部分都要设置超链接，可以使用a标签，添加href-->
            <a href="../index.php" style="color: rgb(0, 200, 255);">亲，欢迎购物</a>
        </div>
        <div style="float: right;">
            <a href="#" style="color: red;">商城首页</a> <a href="###">购物车</a>
            <a href="#">订单详情</a> <a href="#">地址管理</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>
    <div class="car">

        <div class="good">
            <table>
                <tr>
                    <td width=30%>商品名称</td>
                    <td width=20%>单价</td>
                    <td width=20%>数量</td>
                    <td width=30%>操作</td>
                </tr>
            </table>
        </div>
        <div class="goods">
            <table>
                <tr>
                    <td width=30%>旁氏洗发露</td>
                    <td width=20%>99</td>
                    <td width=20%>1</td>
                    <td width=30%><a><button class="btn1">删除</button></a></td>
                </tr>
            </table>
        </div>
        <div class="goods">
            <table>
                <tr>
                    <td width=30%>旁氏洗发露</td>
                    <td width=20%>99</td>
                    <td width=20%>1</td>
                    <td width=30%><a><button class="btn1">删除</button></a></td>
                </tr>
            </table>
        </div>
        <div class="goods2">
            <table>
                <tr>
                    <td width=560></td>
                    <td width=20%>小计：</td>
                    <td>总数：</td>
                </tr>
            </table>
        </div>
        <div class="goods1">
            <table>
                <tr>
                    <td width=50%><button class="btn2">确认购买</button></td>
                    <td><button class="btn3">全部清空</button></td>
                </tr>
            </table>
        </div>

    </div>
</body>

</html>
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
</head>

<body>
    <!--将淘宝页面分为头部和主体（商品展示）两部分，其中，顶部又拆分为四个子顶部部分-->
    <!--顶部-->
    <div id="top">

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

        <!--顶部第二部分-->
        <div id="top2">
            <!--分两个div，都向左浮动，搜索框部分注意调整左外边距与顶外边距的距离-->
            <div style="float: left; margin-left: 10px;">
                <img src="header.PNG" />
            </div>
            <!--搜索框div-->
            <div style="float: left; margin-left: 100px;">
                <!--搜索框和搜索框下面的文字拆分为两个标签部分，由于统一居中，所以这里搜索框需要进行重新定位-->
                <div style="margin-top: 20px;">
                    <input type="text" name="search" placeholder="请搜索您感兴趣的商品" style="width: 200px; height: 25px; border: 1px solid gray; outline: none; border-radius: 2px;" />
                    <input type="submit" value="搜索" />
                </div>
                <!--底部文字部分-->
                <div>
                    伤寒论 杂病论 增广贤文 资治通鉴
                </div>
            </div>
        </div>

        <!--顶部第三部分，左边相对图片的位置距离20px隔开-->
        <div id="top3">
            您是不是想找：<a href="#">伤寒论</a> | <a href="#">杂病论</a> | <a href="#">增广贤文</a> | <a href="#">资治通鉴</a> | <a href="#">墨菲定理</a> | <a href="#">山海经</a>
        </div>

        <!--顶部第四部分-->
        <div id="top4" style="margin-top: 3px;">
            <!--同样分为了两个部分-->

            <div style="float: right">

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>
    </div>

    <!--主体部分（商品展示，这里使用表格）-->
    <div id="main">
        <!--表格，宽度与浏览器宽度一致，列控制每列的宽度，复制后自适应数量-->
        <form action="main1.php" method="$_POST">
            <table width="100%">
                <!--两行五列-->
                <tr align="center">
                    <td>
                        <img src="img/0002.jpg" width="120px" /><br />
                        <!--&yen表示人民币-->
                        <p style="color: orange;">&yen 40 包邮</p>
                        <p>高等数学</p>
                        <p style="color: gray;">开心商城专营店</p>
                        <p style="color: gray;" align="right">如实描述4.8</p>
                        <p><input type="submit"><button type="submit" name="shop" value="0001">加入购物车</button></p>
                    </td>
                    <td>
                        <img src="img/0003.jpg" width="150px" /><br />
                        <!--&yen表示人民币-->
                        <p style="color: orange;">&yen 40 包邮</p>
                        <p>三国志</p>
                        <p style="color: gray;">开心商城专营店</p>
                        <p style="color: gray;" align="right">如实描述4.8</p>
                        <p><input type="button" value="加入购物车"></p>
                    </td>
                    <td>
                        <img src="img/0004.jpg" width="150px" /><br />
                        <!--&yen表示人民币-->
                        <p style="color: orange;">&yen 40 包邮</p>
                        <p>灵魂追凶</p>
                        <p style="color: gray;">开心商城专营店</p>
                        <p style="color: gray;" align="right">如实描述4.8</p>
                        <p><input type="button" value="加入购物车"></p>
                    </td>
                    <td>
                        <img src="img/0005.jpg" width="150px" /><br />
                        <!--&yen表示人民币-->
                        <p style="color: orange;">&yen 40 包邮</p>
                        <p>九型人格</p>
                        <p style="color: gray;">开心商城专营店</p>
                        <p style="color: gray;" align="right">如实描述4.8</p>
                        <p><input type="button" value="加入购物车"></p>
                    </td>
                    <td>
                        <img src="img/0006.jpg" width="150px" /><br />
                        <!--&yen表示人民币-->
                        <p style="color: orange;">&yen 40 包邮</p>
                        <p>普京传</p>
                        <p style="color: gray;">开心商城专营店</p>
                        <p style="color: gray;" align="right">如实描述4.8</p>
                        <p><input type="button" value="加入购物车"></p>
                    </td>
                </tr>
                <tr align="center">
                    <td>
                        <img src="img/0007.jpg" width="150px" /><br />
                        <!--&yen表示人民币-->
                        <p style="color: orange;">&yen 40 包邮</p>
                        <p>会计学</p>
                        <p style="color: gray;">开心商城专营店</p>
                        <p style="color: gray;" align="right">如实描述4.8</p>
                        <p><input type="button" value="加入购物车"></p>
                    </td>
                    <td>
                        <img src="img/0008.jpg" width="150px" /><br />
                        <!--&yen表示人民币-->
                        <p style="color: orange;">&yen 40 包邮</p>
                        <p>资治通鉴</p>
                        <p style="color: gray;">开心商城专营店</p>
                        <p style="color: gray;" align="right">如实描述4.8</p>
                        <p><input type="button" value="加入购物车"></p>
                    </td>
                    <td>
                        <img src="img/0009.jpg" width="150px" /><br />
                        <!--&yen表示人民币-->
                        <p style="color: orange;">&yen 40 包邮</p>
                        <p>体育概论</p>
                        <p style="color: gray;">开心商城专营店</p>
                        <p style="color: gray;" align="right">如实描述4.8</p>
                        <p><input type="button" value="加入购物车"></p>
                    </td>
                    <td>
                        <img src="img/0010.jpg" width="150px" /><br />
                        <!--&yen表示人民币-->
                        <p style="color: orange;">&yen 40 包邮</p>
                        <p>盗墓笔记</p>
                        <p style="color: gray;">开心商城专营店</p>
                        <p style="color: gray;" align="right">如实描述4.8</p>
                        <p><input type="button" value="加入购物车"></p>
                    </td>
                    <td>
                        <img src="img/0001.jpg" width="150px" /><br />
                        <!--&yen表示人民币-->
                        <p style="color: orange;">&yen 40 包邮</p>
                        <p>卑鄙的圣人</p>
                        <p style="color: gray;">开心商城专营店</p>
                        <p style="color: gray;" align="right">如实描述4.8</p>
                        <p><input type="button" value="加入购物车"></p>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
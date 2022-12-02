<?php
header("content-type:text/html;charset=utf-8");
class Site
{
    var $url;
    var $title;
    function setUrl($par)
    {
        $this->url = $par;
    }
    function getUrl()
    {
        echo $this->url . PHP_EOL;
        echo '<br/>';
    }
    function setTitle($par)
    {
        $this->title = $par;
    }
    function getTitle()
    {
        echo $this->title . PHP_EOL;
        echo '<br/>';
    }
}


$runoob = new Site;
$taobao = new Site;
$google = new Site;

$runoob->setTitle("菜鸟教程");
$taobao->setTitle("淘宝");
$google->setTitle("Google 搜索");

$runoob->setUrl('www.runoob.com');
$taobao->setUrl('www.taobao.com');
$google->setUrl('www.google.com');


$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();


echo '<hr/>';

class Sate
{
    var $url;
    var $title;
    function __construct($par1, $par2)
    {
        $this->url = $par1;

        $this->title = $par2;
    }
    function getTitle()
    {
        echo $this->title . PHP_EOL;
        echo '<br/>';
    }
    function getUrl()
    {
        echo $this->url . PHP_EOL;
        echo '<br/>';
    }
}


$runoob1 = new Sate('www.runoob.com', '菜鸟教程');
$taobao1 = new Sate('www.taobao.com', '淘宝');
$google1 = new Sate('www.google.com', 'Google 搜索');

// $runoob->setTitle("菜鸟教程");
// $taobao->setTitle("淘宝");
// $google->setTitle("Google 搜索");

// $runoob->setUrl('www.runoob.com');
// $taobao->setUrl('www.taobao.com');
// $google->setUrl('www.google.com');


$runoob1->getTitle();
$taobao1->getTitle();
$google1->getTitle();

// $runoob->getUrl();
// $taobao->getUrl();
// $google->getUrl();
$runoob1->getUrl();
$taobao1->getUrl();
$google1->getUrl();

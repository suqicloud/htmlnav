<?php
/*
Template Name: WP导航
*/
?>
<!DOCTYPE html>
<html lang="zh-CN" element::-webkit-scrollbar {display:none}>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>静下来导航 - 高效实用的Ai工具网站大全</title>
    <meta name="keywords" content="静下来导航,自媒体导航,设计师导航,程序员导航,ai工具网站导航">
    <meta name="description" content="静下来导航集设计、编程和Ai工具于一体，精选各类高效工具网站，无论是自媒体创作者、设计师还是程序员，都能助您提升工作效率。">
    <link rel="icon" href="img/20240730055647193.png" type="image/x-icon">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes">
    <meta name="browsermode" content="application">
    <meta name="x5-fullscreen" content="true">
    <meta name="x5-page-mode" content="app">
    <script src="jquery.min.js" type="application/javascript"></script>
    <link href="bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css">
<script>
document.addEventListener('DOMContentLoaded', function() {
    const bodyElements = document.querySelectorAll('body');
    const mylistElements = document.querySelectorAll('.mylist');
    const toggleOptionElements = document.querySelectorAll('.toggle-option');
    const mylistColElements = document.querySelectorAll('.mylist li.col-3');
    const mylistColElementsspan = document.querySelectorAll('.mylist li.col-3 span');
    const hotcardColElements = document.querySelectorAll('.hot-card');
    const hotlistColElements = document.querySelectorAll('.hot-list a');
    const nightModeIcon = document.getElementById('night-mode-icon');

    // 设置夜间模式样式
    function enableNightMode() {
        bodyElements.forEach(function(body) {
            body.style.backgroundColor = '#1b1d1f';
        });
        mylistElements.forEach(function(mylist) {
            mylist.style.backgroundColor = '#1b1d1f';
            mylist.style.color = '#c6c9cf'; // 切换文字颜色
        });
        toggleOptionElements.forEach(function(toggleOption) {
            toggleOption.style.backgroundColor = '#1b1d1f';
            toggleOption.style.color = '#c6c9cf'; // 切换文字颜色
        });
        mylistColElements.forEach(function(col) {
            col.style.backgroundColor = '#212529';
            col.style.color = '#c6c9cf'; // 切换文字颜色
        });
        mylistColElementsspan.forEach(function(spancol) {
            spancol.style.color = '#c6c9cf'; // 切换文字颜色
        });
        hotcardColElements.forEach(function(hotcard) {
            hotcard.style.backgroundColor = '#212529';
            hotcard.style.color = '#c6c9cf'; // 切换文字颜色
        });
        hotlistColElements.forEach(function(hotlistcol) {
            hotlistcol.style.color = '#c6c9cf'; // 切换文字颜色
        });
        nightModeIcon.innerHTML = '&#127774;'; // 太阳图标
    }

    // 恢复白天模式样式
    function disableNightMode() {
        bodyElements.forEach(function(body) {
            body.style.backgroundColor = '';
        });
        mylistElements.forEach(function(mylist) {
            mylist.style.backgroundColor = '';
            mylist.style.color = ''; // 恢复默认文字颜色
        });
        toggleOptionElements.forEach(function(toggleOption) {
            toggleOption.style.backgroundColor = '';
            toggleOption.style.color = ''; // 恢复默认文字颜色
        });
        mylistColElements.forEach(function(col) {
            col.style.backgroundColor = '';
            col.style.color = ''; // 恢复默认文字颜色
        });
        mylistColElementsspan.forEach(function(spancol) {
            spancol.style.color = ''; // 恢复默认文字颜色
        });
        hotcardColElements.forEach(function(hotcard) {
            hotcard.style.backgroundColor = '';
            hotcard.style.color = ''; // 恢复默认文字颜色
        });
        hotlistColElements.forEach(function(hotlistcol) {
            hotlistcol.style.color = ''; // 恢复默认文字颜色
        });
        nightModeIcon.innerHTML = '&#127772;'; // 月亮图标
    }

    // 检查是否已经启用夜间模式
    if (localStorage.getItem('nightMode') === 'enabled') {
        enableNightMode();
    }

    // 切换夜间模式
    document.getElementById('night-mode-toggle').addEventListener('click', function(event) {
        event.preventDefault(); // 防止默认链接行为

        if (localStorage.getItem('nightMode') === 'enabled') {
            disableNightMode();
            localStorage.setItem('nightMode', 'disabled');
        } else {
            enableNightMode();
            localStorage.setItem('nightMode', 'enabled');
        }
    });
});
</script>

<script type="text/javascript">
function showDescription(element) {
    var description = element.querySelector('.description');
    if (description) {
        description.style.display = 'block';
    }
}

function hideDescription(element) {
    var description = element.querySelector('.description');
    if (description) {
        description.style.display = 'none';
    }
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const toggleOptions = document.querySelectorAll(".toggle-option");
    const softwareLists = {
        "all": document.querySelectorAll(".mac, .windows"),
        "mac": document.querySelectorAll(".mac"),
        "windows": document.querySelectorAll(".windows")
    };

    // 显示所有软件列表
    function showAllSoftware() {
        for (let key in softwareLists) {
            softwareLists[key].forEach(item => {
                item.style.display = "block";
            });
        }
    }

    // 手机显示所有软件列表
    if (window.innerWidth <= 768) {
        showAllSoftware();
        // 手机关闭切换
        toggleOptions.forEach(option => {
            option.style.display = "none";
        });
    }

    // 二级切换
    toggleOptions.forEach(option => {
        option.addEventListener("click", function() {
            const target = option.getAttribute("data-target");

            // 隐藏所有列表
            for (let key in softwareLists) {
                softwareLists[key].forEach(item => {
                    item.style.display = "none";
                });
            }

            // 显示所选列表
            softwareLists[target].forEach(item => {
                item.style.display = "block";
            });

            // 切换分类
            toggleOptions.forEach(opt => opt.classList.remove("active"));
            option.classList.add("active");
        });
    });

});
</script>

</head>
<body>

<!--内置随机背景图片-->
    <div class="banner-video">
        <img id="banner-image" src="">
        <div class="bottom-cover" style="background-image: linear-gradient(rgba(255, 255, 255, 0) 0%, rgb(244 248 251 / 0.6) 50%, rgb(244 248 251) 100%);">
        </div>
    </div>
<!--内置随机背景图片-->

<!--侧边导航开始-->
<div class="box">
    <div class="change-type">
        <div class="type-left" id="type-left">
            <ul>
                <li data-lylme="search" class="list-item-with-divider"><a>搜索</a><span></span></li>
                <li data-lylme="group_1" class="list-item-with-divider"><a>热门推荐</a><span></span></li>
                <li data-lylme="group_2" class="list-item-with-divider"><a>Ai工具</a><span></span><img src="img/20240730151337826.png" style="width: 30px; height: 30px; position: absolute; right: 0; top: 50%; transform: translateY(-50%);"></li>
                <li data-lylme="group_3" class="list-item-with-divider"><a>设计师工具</a><span></span></li>
                <li data-lylme="group_4" class="list-item-with-divider"><a>程序员工具</a><span></span></li>
                <li data-lylme="group_5" class="list-item-with-divider"><a>自媒体工具</a><span></span></li>
                <li data-lylme="group_6" class="list-item-with-divider"><a>无版权素材</a><span></span></li>
                <li data-lylme="group_7" class="list-item-with-divider"><a>电商卖家工具</a><span></span></li>
                <li data-lylme="group_8" class="list-item-with-divider"><a>网站站长工具</a><span></span></li>
                <li data-lylme="group_9" class="list-item-with-divider"><a>其他实用工具</a><span></span></li>
                <li data-lylme="group_10" class="list-item-with-divider"><a>软件系统下载</a><span></span></li>
                <li data-lylme="group_11" class="list-item-with-divider"><a>空闲摸鱼</a><span></span></li>
                <li data-lylme="group_12"><a>浏览器插件</a><span></span></li>
            </ul>
        </div>
    </div>
</div>
<!--侧边导航结束-->

    <!--topbar开始-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="position: absolute; z-index: 10000;">
        <button class="navbar-toggler collapsed" style="border: none; outline: none;" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="icon" width="200" height="200">
                <use xlink:href="#icon-menus"></use>
            </svg>
        </button>

        <div class="type-right">
            <img src="img/20240730121414228.png" style="width: 30px; height: 30px;">
        </div>

        <div class="nigh-right">
            <a href="#" id="night-mode-toggle">
                <span id="night-mode-icon" style="font-size: 25px; color: #ffffff;">&#127772;</span> <!-- 月亮图标 -->
            </a>
        </div>


        <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="https://www.jingxialai.com/connect.html" target="_blank">收录联系</a></li>
            </ul>
            <div id="main">
                <div id="show_date"></div>
                <div id="show_time"></div>
            </div>
        </div>
    </nav>
    <!--topbar结束-->

<!--中间头部开始-->
    <div class="container" style="margin-top:10vh; position: relative; z-index: 100;">
        <h2 class="title">静下来导航</h2><div id="show_time"></div><p class="content">一个精选各种实用工具的网站大全，导航简洁明了，只收录精品。</p>
        <!--搜索开始-->
        <div id="search" class="s-search">
            <div id="search-list" class="hide-type-list">
                <div class="search-group group-a s-current" style=" margin-top: 50px;">
                    <ul class="search-type">
<li>
    <input hidden="" checked="" type="radio" name="type" id="type-baidu" value="https://www.baidu.com/s?word=" data-placeholder="百度一下，你就知道">
    <label for="type-baidu" style="font-weight: 600;">
        <img src="img/20240730062651748.png" alt="百度一下" style="vertical-align: middle; width: 15px; height: 15px;">
        <span style="color: #0c498c;">百度一下</span>
    </label>
</li>
<li>
    <input hidden="" checked="" type="radio" name="type" id="type-google" value="https://www.google.com/search?q=" data-placeholder="值得信任的搜索引擎">
    <label for="type-google" style="font-weight: 600;">
        <img src="img/20240730065841165.png" alt="谷歌搜索图标" style="width: 15px; height: 15px;">
        <span style="color: #3B83FA;">
            谷歌搜索
        </span>
    </label>
</li>
<li>
    <input hidden="" checked="" type="radio" name="type" id="type-bing" value="https://cn.bing.com/search?q=" data-placeholder="微软必应搜索">
    <label for="type-bing" style="font-weight: 600;">
        <img src="img/20240730065842433.png" alt="Bing必应图标" style="width: 15px; height: 15px;">
        <span style="color: #696a6d;">
            Bing必应
        </span>
    </label>
</li>
<li>
    <input hidden="" checked="" type="radio" name="type" id="type-sogou" value="https://www.sogou.com/web?query=" data-placeholder="上网从搜狗开始">
    <label for="type-sogou" style="font-weight: 600">
        <img src="img/20240730065310593.png" alt="搜狗搜索图标" style="vertical-align: middle; width: 15px; height: 15px;">
        <span style="color: #696a6d;">
            搜狗搜索
        </span>
    </label>
</li>
<li>
    <input hidden="" checked="" type="radio" name="type" id="type-zhihu" value="https://www.zhihu.com/search?q=" data-placeholder="有问题，上知乎">
    <label for="type-zhihu" style="font-weight: 600;">
        <img src="img/20240730065841340.png" alt="知乎搜索图标" style="width: 15px; height: 15px;">
        <span style="color: #0084fe;">
            知乎搜索
        </span>
    </label>
</li>
<li>
    <input hidden="" checked="" type="radio" name="type" id="type-bilibili" value="https://search.bilibili.com/all?keyword=" data-placeholder="(゜-゜)つロ 干杯~">
    <label for="type-bilibili" style="font-weight: 600;">
        <img src="img/20240730065841162.png" alt="哔哩哔哩搜索图标" style="width: 15px; height: 15px; margin-right: 5px;">
        <span style="color: #00aeec;">
            哔哩哔哩
        </span>
    </label>
</li>
<li>
    <input hidden="" checked="" type="radio" name="type" id="type-github" value="https://github.com/search?q=" data-placeholder="Github搜索">
    <label for="type-github" style="font-weight: 600;">
        <img src="img/20240730065842370.png" alt="GitHub搜索图标" style="width: 15px; height: 15px;">
        <span style="color: #333333;">
            GitHub
        </span>
    </label>
</li>
</ul>

</div>
</div>

<form action="https://www.bing.com/search" method="get" target="_blank" id="super-search-fm">
    <input type="text" id="search-text" name="q" placeholder="搜索一下" style="outline:0" autocomplete="off">
    <button class="submit" type="submit">
        <img src="img/20240730070612227.png" style="width: 20px; height: 20px;">
    </button>
    <ul id="word" style="display: none;"></ul>
</form>

<div class="set-check hidden-xs">
    <input type="checkbox" id="set-search-blank" class="bubble-3" autocomplete="off">
</div>

</div>
<!--中间头部结束-->

<!--热门推荐开始-->
<ul class="mylist row">
<li id="group_1" class="title">
    <img src="img/20240730061658700.png" alt="热门推荐" style="width: 20px; height: 20px;">
    <span>热门推荐</span>
</li>


<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.xiaobansc.com/tool" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240821124341396.png" alt="小半工具箱图标">
        <span>小半工具箱</span><div class="dm-button dms-blue">图片压缩转换等工具</div>
    </a>
</li>
</ul>
<!--热门推荐结束-->

<!--广告开始-->
<ul class="mylist row">
<li class="tuicol">
        <img src="img/20240807075651248.jpg" alt="省钱猴">
</li>
</ul>
<!--广告结束-->

<!--ai开始-->
<ul class="mylist row">
    <li id="group_2" class="title">
        <img class="icon" src="img/20240730073938421.png" alt="Ai工具" style="width: 15px; height: 15px;">
        <span>Ai工具</span>
    </li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://v.qq.com" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730075134596.png" alt="chatgpt图标">
        <span>Chatgpt</span><div class="dm-button dms-blue">综合最强的Ai(网络支持)</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://lumalabs.ai/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806071757176.jpg" alt="LumaAi图标">
        <span>Luma</span><div class="dm-button dms-blue">文字生成视频(网络支持)</div>
    </a>
</li>


<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.doubao.com/chat/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730150021613.png" alt="豆包图标">
        <span>字节豆包</span><div class="dm-button dms-blue">抖音公司的Ai平台</div>
    </a>
</li>
<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://tongyi.aliyun.com/qianwen/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730150022906.png" alt="通义千问图标">
        <span>通义千问</span><div class="dm-button dms-blue">阿里巴巴旗下的Ai平台</div>
    </a>
</li>
<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://yiyan.baidu.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730150021620.png" alt="文心一言图标">
        <span>文心一言</span><div class="dm-button dms-blue">百度旗下的Ai平台</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://kling.kuaishou.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806071049768.png" alt="可灵图标">
        <span>可灵</span><div class="dm-button dms-blue">快手旗下的Ai平台</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://ai.360.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806084319993.png" alt="360智脑图标">
        <span>360智脑</span><div class="dm-button dms-blue">360旗下的Ai平台</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://chuangyi.taobao.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806111345467.ico" alt="淘宝创意中心">
        <span>淘宝创意中心</span><div class="dm-button dms-green">Ai文案制图视频</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://xiezuocat.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806105552925.png" alt="秘塔写作猫">
        <span>秘塔写作猫</span><div class="dm-button dms-green">帮助用户提高写作效率</div>
    </a>
</li>
</ul>
<!--ai结束-->

<!--设计师开始-->
<ul class="mylist row">
    <li id="group_3" class="title">
        <img class="icon" src="img/20240730073937234.png" alt="设计办公" style="width: 20px; height: 20px;">
        <span>设计师工具</span>
    </li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://yiyan.baidu.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806060530987.jpg" alt="阿里巴巴图标库">
        <span>iconfont</span><div class="dm-button dms-blue">阿里巴巴的图标库</div>
    </a>
</li>


<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://iconpark.oceanengine.com/home" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806061235538.jpg" alt="字节跳动图标库">
        <span>IconPark</span><div class="dm-button dms-blue">字节跳动提供的图标库</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.alibabafonts.com/#/home" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806064647449.png" alt="阿里巴巴字体库图标">
        <span>阿里巴巴字体</span><div class="dm-button dms-blue">阿里巴巴普惠体免费字体</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://dribbble.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806064209652.png" alt="dribbble图标">
        <span>Dribbble</span><div class="dm-button dms-blue">设计师大咖都在这里</div>
    </a>
</li>


<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://huaban.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806060859671.png" alt="花瓣网图标">
        <span>花瓣网</span><div class="dm-button dms-blue">设计师找灵感</div>
    </a>
</li>


<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.color-collective.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806065511497.png" alt="color-collective图标">
        <span>Color Collective</span><div class="dm-button dms-green">寻找色彩灵感的网站</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.colorhunt.co/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806065739635.jpg" alt="Color Hunt图标">
        <span>Color Hunt</span><div class="dm-button dms-green">在线配色方案生成器</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://colordrop.io/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806065913397.png" alt="Color Drop图标">
        <span>Color Drop</span><div class="dm-button dms-green">四宫格配色工具</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://colors.lol/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806070437651.png" alt="colors图标">
        <span>Colors</span><div class="dm-button dms-green">颜值较高的配色工具</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://uigradients.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806070751744.png" alt="New Gradients图标">
        <span>New Gradients</span><div class="dm-button dms-green">提供多种渐变配色方案</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://aicolors.co/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20241108142755961.png" alt="aicolors图标">
        <span>aicolors</span><div class="dm-button dms-green">提供ai方案的配色网站</div>
    </a>
</li>
</ul>
<!--设计师开始-->

<!--程序员开始-->
<ul class="mylist row">
    <li id="group_4" class="title">
        <img class="icon" src="img/20240730073937246.png" alt="程序员工具" style="width: 20px; height: 20px;">
        <span>程序员工具</span>
    </li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://github.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730065842370.png" alt="github图标">
        <span>Github</span><div class="dm-button dms-blue">代码托管</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://leetcode.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806075357460.png" alt="LeetCode图标">
        <span>LeetCode</span><div class="dm-button dms-blue">在线编程练习</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="regex101.com" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806075654110.png" alt="github图标">
        <span>Regex101</span><div class="dm-button dms-blue">正则表达式工具</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://visualgo.net/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806075919657.png" alt="Visual Go图标">
        <span>Visual Go</span><div class="dm-button dms-blue">算法可视化工具</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.runoob.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806080222153.png" alt="菜鸟教程图标">
        <span>菜鸟教程</span><div class="dm-button dms-blue">编程基础文档</div>
    </a>
</li>
</ul>
<!--程序员结束-->

<!--自媒体开始-->
<ul class="mylist row">
    <li id="group_5" class="title">
        <img class="icon" src="img/20240730082928465.png" alt="设计办公" style="width: 20px; height: 20px;">
        <span>自媒体工具</span>
    </li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a rel="external nofollow noopener noreferrer" href="https://index.baidu.com/v2/index.html#/" target="_blank">
        <img class="icon" src="img/20240730062651748.png" alt="百度指数图标">
        <span>百度指数</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a rel="external nofollow noopener noreferrer" href="https://trendinsight.oceanengine.com/" target="_blank">
        <img class="icon" src="img/20240806042200698.png" alt="巨量算数">
        <span>抖音指数</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://index.e.kuaishou.com/zhishu" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806084601304.png" alt="快手指数">
        <span>快手指数</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://data.weibo.com/index" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806084725142.png" alt="微博指数">
        <span>微博指数</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a rel="external nofollow noopener noreferrer" href="https://creator.douyin.com/creator-micro/home" target="_blank">
        <img class="icon" src="img/20240806042523318.png" alt="抖音创作者中心">
        <span>抖音创作者中心</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://creator.xiaohongshu.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806042726608.png" alt="小红书创作服务平台">
        <span>小红书创作服务平台</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://passport.kuaishou.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806042841115.png" alt="快手创作者服务平台">
        <span>快手创作者服务平台</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://channels.weixin.qq.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806043038120.png" alt="视频号助手">
        <span>视频号助手</span>
    </a>
</li>

</ul>
<!--自媒体结束-->

<!--素材开始-->
<ul class="mylist row">
    <li id="group_6" class="title">
        <img class="icon" src="img/20240806040614141.png" alt="无版权素材" style="width: 20px; height: 20px;">
        <span>无版权素材</span>(均可以免费商业使用)
    </li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://unsplash.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806040829226.png" alt="unsplash">
        <span>Unsplash</span><div class="dm-button dms-blue">专注高质量摄影作品素材</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://pixabay.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806062030812.png" alt="Pixabay">
        <span>Pixabay</span><div class="dm-button dms-blue">专注图片、插画、视频</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.pexels.com" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806062030567.png" alt="Pexels">
        <span>Pexels</span><div class="dm-button dms-blue">专注图片、视频素材</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://purepng.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806063301171.jpg" alt="Pngimg">
        <span>Pngimg</span><div class="dm-button dms-blue">超过10万张PNG图片</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://pngimg.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806063427759.jpg" alt="purepng">
        <span>Purepng</span><div class="dm-button dms-blue">超过3万张PNG图片</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://freepd.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806063838607.png" alt="freepd">
        <span>Freepd</span><div class="dm-button dms-green">免费的视频背景音乐</div>
    </a>
</li>
</ul>
<!--素材结束开始-->

<!--电商开始-->
<ul class="mylist row">
    <li id="group_7" class="title">
        <img class="icon" src="img/20240730082927757.png" alt="电商工具" style="width: 20px; height: 20px;">
        <span>电商工具</span>
    </li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.jingxialai.com/chaxun.html" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730145428958.png" alt="广告法违禁词查询图标">
        <span>广告法词汇</span><div class="dm-button dms-blue">免费查询广告法禁用词汇</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://chuangyi.taobao.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806111345467.ico" alt="淘宝创意中心">
        <span>淘宝创意中心</span><div class="dm-button dms-blue">Ai文案制图视频</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://sycm.taobao.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806081508350.png" alt="生意参谋图标">
        <span>生意参谋</span><div class="dm-button dms-blue">淘宝官方的数据分析工具</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.chanmama.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806081749821.jpg" alt="蝉妈妈图标">
        <span>蝉妈妈</span><div class="dm-button dms-blue">提供主播带货数据等信息</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="http://www.aliresearch.com/cn/index" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806083040257.png" alt="阿里研究院图标">
        <span>阿里研究院</span><div class="dm-button dms-purple">提供行业研究报告</div>
    </a>
</li>


<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://research.jd.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806082125808.png" alt="京东大数据研究院图标">
        <span>京东大数据研究院</span><div class="dm-button dms-purple">消费报告和产品趋势分析</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://cc.oceanengine.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806082533610.png" alt="巨量创意图标">
        <span>巨量创意</span><div class="dm-button dms-purple">抖音数据分析和人群画像</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://pdd.dianba6.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806083552821.jpg" alt="电霸图标">
        <span>电霸</span><div class="dm-button dms-purple">拼多多商品数据分析</div>
    </a>
</li>
</ul>

<!--电商结束-->

<!--站长开始-->
<ul class="mylist row">
    <li id="group_8" class="title">
        <img class="icon" src="img/20240730082020399.png" alt="设计办公" style="width: 20px; height: 20px;">
        <span>站长工具</span>
    </li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://tool.chinaz.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730145617246.png" alt="站长之家图标">
        <span>站长之家</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://ziyuan.baidu.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730062651748.png" alt="百度站长平台图标">
        <span>百度站长平台</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.bing.com/webmasters" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806073822526.png" alt="Bing站长图标">
        <span>Bing站长平台</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://search.google.com/search-console" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806074028872.png" alt="谷歌站长平台图标">
        <span>谷歌站长平台</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://zhanzhang.so.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806074456711.png" alt="360站长平台图标">
        <span>360站长平台</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://zhanzhang.sogou.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806074559932.png" alt="搜狗站长平台图标">
        <span>搜狗站长平台</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://zhanzhang.sm.cn/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806074735590.png" alt="神马搜索站长平台图标">
        <span>神马站长平台</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://zhanzhang.toutiao.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806074901308.png" alt="头条站长平台图标">
        <span>头条站长平台</span>
    </a>
</li>
</ul>
<!--站长结束-->

<!--小工具开始-->
<ul class="mylist row">
    <li id="group_9" class="title">
        <img class="icon" src="img/20240806091830615.png" alt="在线小工具" style="width: 20px; height: 20px;">
        <span>在线小工具</span>
    </li>


<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.xiaobansc.com/cv" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240826120753164.png" alt="小半简历">
        <span>小半简历</span><div class="dm-button dms-blue">在线生成简历</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.xiaobansc.com/tool" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240821124341396.png" alt="小半工具箱图标">
        <span>小半工具箱</span><div class="dm-button dms-blue">图片压缩转换等工具</div>
    </a>
</li>

</ul>
<!--小工具结束-->

<!--软件开始-->
<ul class="mylist row">
    <li id="group_10" class="title">
        <img class="icon" src="img/20240730082019332.png" alt="设计办公" style="width: 20px; height: 20px;">
        <span>软件下载</span>

        <!-- 二级分类 -->
        <ul class="toggle-options">
            <li class="toggle-option active" data-target="all">全部</li>
            <li class="toggle-option" data-target="mac">Mac软件</li>
            <li class="toggle-option" data-target="windows">Windows软件</li>
        </ul>
    </li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1 windows">
    <a href="https://www.wujiit.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730160120522.png" alt="无忌技术图标">
        <span>无忌技术</span><div class="dm-button dms-blue">开源免费软件与原版系统</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1 mac">
    <a href="https://appstorrent.ru/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20250109024823595.png" alt="appstorrent图标">
        <span>appstorrent</span><div class="dm-button dms-blue">开心版mac软件</div>
    </a>
</li>
</ul>

<!--软件结束开始-->


<!--摸鱼开始-->
<ul class="mylist row">
    <li id="group_11" class="title">
        <img class="icon" src="img/20240730073938197.png" alt="设计办公" style="width: 20px; height: 20px;">
        <span>空闲摸鱼</span>
    </li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://v.qq.com" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730071301627.png" alt="腾讯视频图标">
        <span>腾讯视频</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://music.163.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806072349205.png" alt="网易云音乐图标">
        <span>网易云音乐</span>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://www.4399.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806084152864.png" alt="4399小游戏图标">
        <span>4399小游戏</span>
    </a>
</li>
</ul>

<!--摸鱼结束-->

<!--精英开始-->
<ul class="mylist row">
    <li id="group_12" class="title">
        <img class="icon" src="img/20240730151337678.png" alt="浏览器插件" style="width: 20px; height: 20px;">
        <span>浏览器插件</span>
    </li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://immersivetranslate.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240730152121417.png" alt="沉浸式翻译图标">
        <span>沉浸式翻译</span><div class="dm-button dms-blue">支持网页翻译</div>
    </a>
</li>

<li class="col-3 col-sm-3 col-md-3 col-lg-1">
    <a href="https://ublockorigin.com/" target="_blank" rel="external nofollow noopener noreferrer">
        <img class="icon" src="img/20240806072657976.png" alt="uBlock Origin图标">
        <span>uBlock Origin</span><div class="dm-button dms-blue">屏蔽浏览器广告</div>
    </a>
</li>
</ul>
<!--精英结束-->

<!--底部-->
<div id="lytoday"></div><script src="https://lytoday.lylme.com/"></script>

<script src="bootstrap.min.js" type="application/javascript"></script>
<script src="script.js"></script>


<div style="display:none;" class="back-to" id="toolBackTop">
    <a title="返回顶部" onclick="window.scrollTo(0,0);return false;" href="#top" class="back-top"></a>
</div>

<!-- Wordpress -->
<div class="blog-section">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="blog-post">
                <!-- 显示文章标题 -->
                <a href="<?php the_permalink(); ?>" target="_blank">
                    <?php echo wp_trim_words(get_the_title(), 18, '...'); ?>
                </a>
                <!-- 显示文章内容的前20个字符 -->
                <p>
                    <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                </p>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>No posts found</p>
    <?php endif; ?>
</div>

<!-- 这段删掉可以走必应获取背景图片-->
<script>
// 定义图片数组，包含所有可能的图片地址
var images = [
    "img/20240824143653858.jpg",
    "img/20240824143652256.jpg",
    "img/20240824143652942.jpg",
    "img/20240824143652352.jpg",
    "img/20240824143651311.jpg",
    "img/20240809082420724.jpg",
    "img/20240809082423710.jpg",
];
// 在页面加载时或刷新时随机选择图片
window.onload = function() {
var randomIndex = Math.floor(Math.random() * images.length); // 生成随机索引
var bannerImage = document.getElementById('banner-image');
bannerImage.src = images[randomIndex]; // 更新图片的src属性
};
</script>
<!-- 这段删掉可以走必应获取背景图片-->

<div class="mt-5 mb-3 footer text-muted text-center">
© 版权所有<br>
联系方式<br>
<a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=888888" target="_blank" rel="external nofollow noopener noreferrer"><img src="img/20240413112748930.png" />公安备案号</a>
<br>
<a href="https://beian.miit.gov.cn" target="_blank" rel="external nofollow noopener noreferrer">备案号</a>
<p>
<a href="https://www.jingxialai.com/" target="_blank" rel="external nofollow noopener noreferrer" class="footer-link">By Summer</a>
</div>

</body>
</html>

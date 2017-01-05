<?php
/**
 * Created by PhpStorm.
 * User: 蒋天蓓
 * Date: 2017/1/5 0005
 * Time: 16:01
 */
include('../config/config.php');
?>
<head>
    <meta charset="UTF-8">
    <title><?php echo $global_name; ?> - <?php echo $global_desc; ?></title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <script src="//cdn.bootcss.com/avalon.js/2.2.3/avalon.min.js"></script>
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/echarts/3.3.2/echarts.min.js"></script>
    <script type="text/javascript" src="/js/base.js"></script>
    <script type="text/javascript" src="/js/fliter.js"></script>
    <style type="text/css">
        .ms-controller {
            visibility: hidden
        }
    </style>
</head>
<header class="navbar navbar-default navbar-static-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $global_website; ?>"><?php echo $global_name; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!-- [可以随意增加导航栏] -->
            <ul class="nav navbar-nav">
                <li><a href="/index.php">主页</a></li>
                <li><a href="/example.php">演示页面</a></li>
            </ul>
            <!-- [可以随意增加导航栏] -->
            <div class="nav navbar-nav navbar-right">
                <a href="https://github.com/Mayomi/" class="navbar-text" target="_blank">Powered by Mayomi</a>
            </div>
        </div>
    </div>
</header>
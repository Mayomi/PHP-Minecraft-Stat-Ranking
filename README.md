# PHP 基于MySQL的排行榜功能

获取MySQL数据库信息并进行排名, 大多适用于小游戏, 基于PHP + MySQL + Bootsrap, 通过MySQL获取服务器玩家的数据.
差不多想到的就这么多了, 详细的配置在 example.php 内有介绍. 根据自己 MySQL 的数据来填入对应的值即可.
使用这个还是需要有一些基础的人来使用的. 以下是简单的配置介绍

### 你需要先安装PHP + MySQL

Credits - 感谢
==============
捐助我完成项目的用户不一一列出了xD


目录结构
=======
```
- css
  bootstrap.css
- img
  ...
- inc
  config.php - 页面自定义配置
  db-settings.php - 数据库连接配置
  footer.php - 页脚信息 - 无需配置
  info.php - 服务器信息配置
- js
  bootstrap.min.js
  jquery-2.2.4.min.js
example.php - 演示页面
index.php - 欢迎页面
```

config.php - 页面自定义配置
==========================
支持配置以下内容：
排名数字自定义内容 / 玩家名称自定义内容 / 头像获取API地址

db-settings.php - 数据库连接配置
==============================
```
$set = array(
	'table_limit' => '25' /* 显示前多少名 */,
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'database' => 'test',
	)
);
```

info.php - 服务器信息配置
========================
```
$mc_name = '服务器名称';
$mc_desc = '我的第一个服务器';
$mc_beian = '火星ICP备XXXXXXXX号-1';
$mc_website = 'http://www.xxx.cn';
$mc_main_1 = '欢迎来到';
$mc_main_2 = '服务器排行榜.';
$mc_main_desc = '这里你可以看到各个小游戏名列前茅的玩家名单.';
```

Bootsrap - 关于框架
===================
基于 Bootsrap 的页面, 你可以在 http://getbootstrap.com/ 获取更多帮助.

<?php  
###########################################
#		       各种信息设置               #
###########################################

$global_name = "服务器名称";
$global_desc = "我的第一个服务器";
$global_beian = "火星ICP备XXXXXXXX号-1";
$global_website = "http://www.xxx.cn";
$global_main_1 = "欢迎来到";
$global_main_2 = "服务器排行榜.";
$global_main_desc = "这里你可以看到各个小游戏名列前茅的玩家名单.";

###########################################
#		       排名列自定义               #
###########################################

/* 显示排名数量 25为显示前25名玩家*/

$player_number = "25";

/* 排名高亮显示 */
if (!function_exists('ranking')) {
	function ranking($ranking){
		switch ($ranking) {
			/* 当排名为 1 时 高亮显示 */
			case 1:
				return '<font color=#FF000><b>1</b></font>';
				break;
			/* 当排名为 2 时 高亮显示 */
			case 2:
				return '<font color=#3333FF><b>2</b></font>';
				break;
			/* 当排名为 3 时 高亮显示 */
			case 3:
				return '<font color=#996600><b>3</b></font>';
				break;
			default:
			return $ranking;
			}
	}
};


###########################################
#		       玩家列自定义               #
###########################################

/* 玩家认证显示 */
if (!function_exists('verify')) {
	function verify($username){
		switch ($username) {
			/* 检测名字为 Mayomi 名称颜色改为红色并增加个官方认证图标 */
			case 'Mayomi':
				return '<font color=#FF0000><b>'.$username.'</b></font> <img src="img/gm.png" height="20" width="20" title="官方成员" />';
				break;
            /* 检测名字为 Xiao_Lins 名称颜色改为绿色并增加个主播认证图标 */
			case 'Xiao_Lins':
				return '<font color=#458B74><b>'.$username.'</b></font> <img src="img/zb.png" height="20" width="20" title="认证主播" />';
				break;
			default:
			return $username;
			}
	}
};


###########################################
#		       玩家头像相关               #
###########################################

/* 玩家头像显示 1为显示 0为隐藏 */

$player_avatar = "1";

/*  如果API服务器宕机 这是备用的API地址 https://minotar.net/avatar/  */

$player_avatar_api = "https://mcapi.ca/avatar/";

?>

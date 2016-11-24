<?php  
###########################################
#		       排名列自定义               #
###########################################

function ranking($ranking){
		switch ($ranking) {
			/* 当排名为 1 时 高亮显示 */
			case 1:
				return '<font color=#FF000><b>1</b></font>';
				break;

			case 2:
				return '<font color=#3333FF><b>2</b></font>';
				break;
			case 3:
				return '<font color=#996600><b>3</b></font>';
				break;
			default:
			return $ranking;
			}
};

###########################################
#		       玩家列自定义               #
###########################################

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
};

###########################################
#		       玩家头像 API               #
###########################################
$avatar_api = "https://mcapi.ca/avatar/";
/*  如果API服务器宕机 这是备用的API地址 https://minotar.net/avatar/  */
?>

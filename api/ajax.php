<?php
header("Content-Type:application/json; charset=utf-8");
/**
 * Ajax数据返回 以封装 勿动！
 * 配置数据请查看 /config/apiMap.php
 * 配置数据库请查看 /config/database.php
 * Created by PhpStorm.
 * User: 蒋天蓓
 * Date: 2017/1/5 0005
 * Time: 15:17
 */
require("Data.php");
$input = $_GET;
$method = empty($input['m']) ? 'index' : $input['m'];
rd(Data::$method());
function rd($data, $msg = '', $code = 200) {
    die(json_encode(['data' => $data, 'msg' => $msg, 'code' => $code]));
}
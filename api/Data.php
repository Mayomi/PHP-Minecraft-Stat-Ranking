<?php

/**
 * 数据处理接口类 已经封装 勿动！！！
 * 配置数据请查看 /config/apiMap.php
 * 配置数据库请查看 /config/database.php
 * Created by PhpStorm.
 * User: 蒋天蓓
 * Date: 2017/1/5 0005
 * Time: 15:21
 */
class Data {
    public static function __callStatic($name, $args) {
        $apiMap = include("../config/apiMap.php");
        $config = include('../config/database.php');
        try {
            $db = new PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'], $config['username'], $config['password']);
        } catch (PDOException $e) {
            die("数据库连接异常！原因： " . $e->getMessage());
        }
        //$db->query("SET CHARACTER SET utf8");
        if (empty($apiMap[$name])) {
            return null;
        }
        $api = $apiMap[$name];
        $data = [];
        foreach ($db->query($api['sql'], PDO::FETCH_ASSOC) as $key => $value) {
            $data[$key] = $value;
        }
        return $data;
    }
}
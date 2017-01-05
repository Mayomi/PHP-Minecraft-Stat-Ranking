<?php
/**
 * Created by PhpStorm.
 * User: 蒋天蓓
 * Date: 2017/1/5 0005
 * Time: 16:06
 */
return [
    'index' => [
        'sql' => 'SELECT "默认方法调用！"'
    ],
    'stat' => array(
        'sql' => 'SELECT * FROM bt_pvp_overall_s1 ORDER BY Elo DESC LIMIT 25'
    ),
    'section' => [
        'sql' => '
        select elt(
            interval(d.Elo,
              0, 1000, 1250, 1500, 1750, 2000, 2500, 3000), 
              "1青铜", "2白银", "3黄金", "4白金", "5钻石", "6大师", "7宗师"
            ) as level, 
            count(d.id) as num
        from bt_pvp_overall_s1 d
        group by level;
        '
    ]
];
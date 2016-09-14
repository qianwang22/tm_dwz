<?php
return array(
    /* 数据库配置信息 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'demo', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => 'root', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PREFIX' => 'think_', // 数据库表前缀

    'URL_MODEL' => '0', //URL模式
    'PAGE_SIZE' => 10,
    'VAR_PAGE'  =>'pageNum',
    /* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__ . '/Public/Admin',
    ),
);
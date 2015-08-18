<?php
/**
 *  config.php
 * 许可声明：这是一个开源程序，未经许可不得将本软件的整体或任何部分用于商业用途及再发布。
 * ============================================================================
 * $Author: 王德康 (wangdk369@gmail.com) $
 * $Date: 2015-8-3 下午9:53:59 $
 * $Id$
 */

// 数据库连接编码
KConfig::set('db_charset', 'utf8');

// 数据库驱动,支持 mysql,mysqli,PDO
KConfig::set('db_dirver', 'PDO');

// 数据库表前缀
KConfig::set('db_table_prefix', 'app_');


KConfig::set('db', array(
    array('db_host'=>'127.0.0.1', 'db_name'=>'wangdk', 'db_user'=>'haha', 'db_password'=>'123456', 'db_port'=>3307),
    array('db_host'=>'127.0.0.1', 'db_name'=>'wangdk', 'db_user'=>'root', 'db_password'=>'123456', 'db_port'=>3307)
));



// 项目命名空间
KConfig::set('project_name', 'dev_test1');

// cache 驱动，支持 memcache, memcached
KConfig::set('mc_dirver', 'memcached');

// memcache缓存
KConfig::set('mc', array(
    array('mc_host' => '127.0.0.1', 'mc_port' => 11211),
    array('mc_host' => '127.0.0.1', 'mc_port' => 11212)
));



?>
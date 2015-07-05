<?php
/**
 * Created by PhpStorm.
 * User: dengzhirong001
 * Date: 2015/7/4
 * Time: 23:45
 * 功能： 建立数据库连接
 */
//require("config.php");
header("Content-type: text/html; charset = utf-8");
define("HOST", 'localhost');
define("USERNAME", "root");
define("PASSWORD", "123");

// 连接数据库
if( $con = mysql_connect(HOST, USERNAME, PASSWORD) ) {
//    echo "连接成功";
} else {
    echo mysql_error();
}
// 选择数据库
if( mysql_select_db("info") ) {
//    echo "数据表选择成功";
} else {
    echo mysql_error();
}
// 定义字符集
if( mysql_query("set names utf8") ) {
//    echo "字符集定义成功";
} else {
    echo mysql_error();
}

?>
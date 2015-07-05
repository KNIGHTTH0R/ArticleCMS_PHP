<?php
/**
 * Created by PhpStorm.
 * User: dengzhirong001
 * Date: 2015/7/4
 * Time: 23:44
 */

require_once("../connect.php");
$id = $_GET["id"];
$deletesql = "delete from article where id=$id";

if (mysql_query($deletesql)) {
    echo '<script>alert("文章删除成功！");window.location.href = "article.manage.php";</script>';
} else {
    echo '<script>alert("文章删除失败！");window.location.href = "article.manage.php";</script>';
}

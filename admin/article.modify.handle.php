<?php
/**
 * Created by PhpStorm.
 * User: dengzhirong001
 * Date: 2015/7/4
 * Time: 23:44
 */
require("../connect.php");

$id = $_POST["articleID"];
$title = $_POST["articleTitle"];
$author = $_POST["articleAuthor"];
$description = $_POST["articleDescription"];
$content = $_POST["articleContent"];
$dateline = time();

$updatesql = "update article set id=$id, title='$title', author='$author', description='$description', content='$content', dateline=$dateline where id=$id";

//print_r($updatesql);

if (mysql_query($updatesql)) {
    echo '<script>alert("文章修改成功！"); window.location.href = "article.manage.php";</script>';
//    echo "文章修改成功！";
} else {
    echo '<script>alert("文章修改失败！"); window.location.href = "article.manage.php";</script>';
}
?>
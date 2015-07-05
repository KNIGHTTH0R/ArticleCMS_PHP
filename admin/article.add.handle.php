<?php
/**
 * Created by PhpStorm.
 * User: dengzhirong001
 * Date: 2015/7/4
 * Time: 23:43
 */
include("../connect.php");


// 把传递过来的信息入库
if (isset($_PSOT["articleTitle"]) && (!empty($_POST["articleTitle"]))) {
    echo '<script>alert("标题不能为空！");window.location.href = "article.add.php";</script>';
}
$title = $_POST["articleTitle"];
$author = $_POST["articleAuthor"];
$description = $_POST["articleDescription"];
$content = $_POST["articleContent"];
$dateline = time();

$insertsql = "insert into article(title, author, description, content, dateline) values('$title', '$author', '$description', '$content', $dateline)";
if (mysql_query($insertsql)) {
    echo '<script>alert("发布文章成功！");window.location.href = "article.add.php";</script>';
} else {
    echo "文章发布失败！";
}


?>
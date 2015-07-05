<?php
/**
 * Created by PhpStorm.
 * User: dengzhirong001
 * Date: 2015/7/4
 * Time: 23:45
 */
require_once("connect.php");
$id = intval($_GET["id"]); // 用intval()可防止SQL字符被注入；
$sql = "select * from article where id=$id";
$query = mysql_query($sql);
if($query && mysql_num_rows($query)) {
    $row = mysql_fetch_assoc($query);
} else {
    echo "这篇文章不存在！";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文章发布页</title>
    <style>
    </style>
</head>
<body>
<h1><?php echo $row["title"] ?></h1>
<div>作者：<?php echo $row["author"] ?></div>
<div><?php echo $row["content"] ?></div>
</body>
</html>
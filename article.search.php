<?php
/**
 * Created by PhpStorm.
 * User: dengzhirong001
 * Date: 2015/7/4
 * Time: 23:45
 */
require_once("connect.php");
$key = $_GET["key"];
$sql = "select * from article where title like '$key%' order by dateline desc";
$query = mysql_query($sql);
if ($query && mysql_num_rows($query)) {
    while ($row = mysql_fetch_assoc($query)) {
        $data[] = $row;
    }
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
<?php
if (empty($data)) {
    echo "当前没有文章！";
} else {
    foreach ($data as $value) {
        ?>
        <h1><?php echo $value["title"] ?></h1>
        <div>作者： <?php echo $value["author"] ?></div>
        <div><?php echo $value["content"] ?></div>
        <a>点击查看详细信息</a>
    <?php
    }
}
?>
</body>
</html>
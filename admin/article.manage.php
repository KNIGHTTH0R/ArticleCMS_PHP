<?php
require_once("../connect.php");

$sql = "select * from article order by dateline desc";

$query = mysql_query($sql);

while ($row = mysql_fetch_assoc($query)) {
    $data[] = $row;
}
/*if ($query && mysql_num_rows($query)) {

} else {
    $data = array();
}*/
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文章管理列表页</title>
    <style>
        .articleListWrap {
            width: 600px;
            margin: 0 auto;
        }
        .articleListWrap table {
            border-collapse: collapse;
            width: 100%;
        }
        .articleListWrap table td {
            border: 1px #ccc solid;
            padding: 5px 10px;
        }
        .articleListWrap table th {
            background-color: #eee;
            font-size: bold;
            text-align: left;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
<div class="articleListWrap">
    <table>
        <tr>
            <th>编号</th>
            <th>标题</th>
            <th>操作</th>
        </tr>
        <?php
            if (!empty($data)) {
                foreach ($data as $value) {
                    ?>
                    <tr>
                        <td><?php echo $value["id"] ?></td>
                        <td><?php echo $value["title"] ?></td>
                        <td>
                            <a href="article.del.handle.php?id=<?php echo $value["id"] ?>">删除</a>
                            <a href="article.modify.php?id=<?php echo $value["id"] ?>">修改</a>
                        </td>
                    </tr>
                <?php
                }
            }
        ?>
    </table>
</div>
</body>
</html>
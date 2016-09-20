<html>
<head>
    <meta http-equiv="refresh" content="20">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16-9-20
 * Time: 下午12:56
 */
require "db.php";

$result = $db->getAll("select * from copy_copy order by id desc limit 10");

foreach ($result as $res)
{
    echo '<pre>';
    echo $res['content'];
    echo '</pre>';
}
?>
</body>
</html>

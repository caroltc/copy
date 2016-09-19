<?php
require_once 'checkauth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Copy</title>
    <style>
        .if1{ width: 100%; height: 200px; border: 0;}
        .if2{ width: 100%; height: 200px; border: 0;}
    </style>
</head>
<body>
<iframe class="if1" src="post.php?auth=<?php echo $_GET['auth'];?>"></iframe>
<iframe class="if2" src="getContent.php?auth=<?php echo $_GET['auth'];?>"></iframe>
</body>
</html>
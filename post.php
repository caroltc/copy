<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST</title>
</head>
<body>
<form method="post" action="postContent.php">
    <input value="<?php echo $_GET['auth'];?>" name="auth" type="hidden">
    <textarea name="content" style="width: 100%; height: 100px;"></textarea>
    <input type="submit" value="add" style="width: 100%; background: transparent; border: 1px solid #555;">
</form>
</body>
</html>
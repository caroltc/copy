<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16-9-20
 * Time: 下午12:56
 */
require "db.php";
$content = $_POST['content'];

if (empty($content)) {
    echo 'no content';
    sleep(2);
    header("Location: post.php");
}

$data['content'] = $content;
$db->insert('copy_copy', $data);
header("Location: post.php");
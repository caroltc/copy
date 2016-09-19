<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16-9-20
 * Time: 上午6:28
 */

if (!isset($_REQUEST['auth']))
{
    exit('denied');
}
if (substr(md5($_REQUEST['auth']), 0, 4) != '67ac')
{
    exit('denied');
}
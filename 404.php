<?php
require('include/bittorrent.php');
dbconn();
header('HTTP/1.1 404 Not found');
header('Refresh: 5; url=/index.php');
stderr('咦，肿么回事', '吉祥物真没用，居然让你看到这个页面（抱紧）<br /><br /><a href="/index.php">5秒后自动回到首页</a>', false);

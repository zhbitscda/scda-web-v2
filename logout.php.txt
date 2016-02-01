<?php
	session_start();
        session_destroy();
        $url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/index.php"; 
	echo "<script language='javascript' type='text/javascript'>"; 
	echo "window.location.href='$url_page'"; 
	echo "</script>";
?>
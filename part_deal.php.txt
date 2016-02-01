<?php
session_start();
if(!empty($_POST["name"]) and !empty($_POST["content"]) and isset($_SESSION['scdaadmin'])){
	
        $name=trim($_POST["name"]);
        $name=htmlspecialchars($name);
        
        $content=trim($_POST["content"]);
        $content=htmlspecialchars($content);
        
        include_once("header.php");
        $query="insert into part values(NULL,'$name','$content')";
        $result=@mysql_query($query);
        $url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/manager_part.php?right=1"; 
	echo "<script language='javascript' type='text/javascript'>"; 
	echo "window.location.href='$url_page'"; 
	echo "</script>";
}else{
	$url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/manager_part.php?right=2"; 
	echo "<script language='javascript' type='text/javascript'>"; 
	echo "window.location.href='$url_page'"; 
	echo "</script>";
}
?>
<?php
if(!empty($_POST["name"]) and !empty($_POST["contact"]) and !empty($_POST["text"])){
	
  	/* 对输入进行检查 */
        
	$name=trim($_POST["name"]);
        $name=htmlspecialchars($name);
 	if(strlen($name) < 2 || strlen($name) > 40){
        	$url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/linkus.php?error=1"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url_page'"; 
		echo "</script>"; 
        }

        $contact=trim($_POST["contact"]);
        $contact=htmlspecialchars($contact);
  	if(strlen($contact) < 2 || strlen($contact) > 40){ 
        	$url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/linkus.php?error=2"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url_page'"; 
		echo "</script>"; 
        }
        
        $text=trim($_POST["text"]);
        $text=htmlspecialchars($text);
        
  	/* 获取当前时间 */
        
        date_default_timezone_set('PRC');
  	$time=date("Y-m-d G:i:s");
        
  	/* 获取用户IP */
        
        $ip=$_SERVER["REMOTE_ADDR"];
        
        include_once("header.php");
        $query="insert into scdatext values(NULL,'$name','$contact','$text','$time','$ip')";
        $result=@mysql_query($query);
        
  	if($result){
        	$url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/linkus.php?right=1"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url_page'"; 
		echo "</script>"; 
        }else{
        	$url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/linkus.php?error=3"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url_page'"; 
		echo "</script>"; 
        }

}else{
	
        $url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/linkus.php?error=4"; 
	echo "<script language='javascript' type='text/javascript'>"; 
	echo "window.location.href='$url_page'"; 
	echo "</script>";
}
?>
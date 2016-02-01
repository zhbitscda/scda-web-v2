<?php
session_start();
if(!empty($_POST["name"]) and !empty($_POST["content"]) and isset($_SESSION['scdaadmin'])){
	
        $name=trim($_POST["name"]);
        $name=htmlspecialchars($name);
        
        $content=trim($_POST["content"]);
        $content=htmlspecialchars($content);
        
        date_default_timezone_set('PRC');
  	$time=date("Y-m-d G:i:s");
        
  	/* 对图片上传进行判断 */
        
  	if((($_FILES["file"]["type"] == "image/jpeg")
          ||($_FILES["file"]["type"] == "image/pjpeg")
          ||($_FILES["file"]["type"] == "image/png")
          ||($_FILES["file"]["type"] == "image/gif"))
          &&($_FILES["file"]["size"] <= 2048000)){
          
    		if($_FILES["file"]["error"] > 0){
        	
          		/* 当图片上传出错 */
                
                	$url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/manager_news.php?value=2"; 
			echo "<script language='javascript' type='text/javascript'>"; 
			echo "window.location.href='$url_page'"; 
			echo "</script>";
                
        	}else{
                
                	$s = new SaeStorage();
                        
                        $num=range(0,9);
                        $small=range('a','z');
                        $str=implode("",$num).implode("",$small);
                        $count=strlen($str);
                        $count-=1;
                        
                 	for($i=0;$i<10;$i++){
                        	$point=mt_rand(0,$count);
                                $nums.=$str[$point];
                        }
                        
                        if(($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg")){
                                $_FILES["file"]["name"]=$nums.".jpg";
                        }
                        if($_FILES["file"]["type"] == "image/gif"){
                                $_FILES["file"]["name"]=$nums.".gif";
                        }
                        if($_FILES["file"]["type"] == "image/png"){
                                $_FILES["file"]["name"]=$nums.".png";
                        }
                                                
                        $s->upload("dream",$_FILES["file"]["name"],$_FILES["file"]["tmp_name"],$attr = array(), $compress = false);
                        $url="http://hehuaqi-dream.stor.sinaapp.com/".$_FILES["file"]["name"];
	
		}
                
	}else{
        	
                $url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/manager_news.php?value=5"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url_page'"; 
		echo "</script>";
        }	
        
        include_once("header.php");
        $query="insert into scdanews values(NULL,'$name','$content','$time','$url')";
        $result=@mysql_query($query);
        
  	if($result){
		
                $url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/manager_news.php?value=1"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url_page'"; 
		echo "</script>";
                        
        }else{
        
        	$url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/manager_news.php?value=3"; 
		echo "<script language='javascript' type='text/javascript'>"; 
		echo "window.location.href='$url_page'"; 
		echo "</script>";
        
        }
        
}else{
	
	$url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/manager_news.php?value=4"; 
	echo "<script language='javascript' type='text/javascript'>"; 
	echo "window.location.href='$url_page'"; 
	echo "</script>";      
        
}
?>
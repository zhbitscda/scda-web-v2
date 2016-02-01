<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>大学生职业发展协会 --- 后台管理系统</title>
  <link href="style.css" type="text/css" rel="stylesheet" media="screen">
</head>
<body>
<div id="header">
	<div id="menu">
        	<div id="menu_logo"></div>
        	<div id="menu_word">大学生职业发展协会</div>
                <div id="menu_bar">
                	<div class="menu_atom">
                        	<ul>
                                  	<li><a href="index.php"><img src="image/menu_1.png" title="首页"></a></li>
                                        <li><a href="about.php"><img src="image/menu_2.png" title="关于我们"></a></li>
                                        <li><a href="linkus.php"><img src="image/menu_3.png" title="联系我们"></a></li>
                                        <li><a href="manager.php"><img src="image/menu_4.png" title="管理员入口"></a></li>
                          	</ul>
                	</div>
                </div>
        </div> 
</div>
<div id="content_manager">
	<div id="content_manager_inside">
        	<div id="content_manager_inside_box">
                	<div class="content_manager_inside_box_title">职协后台管理系统</div>
                </div> 
        	<div id="content_manager_inside_main">
                
                <?php
		if(isset($_SESSION['scdaadmin'])){
                	
                        /* 登录成功 */
                                
                        $_SESSION['scdaadmin']="zhbitscda";
                        
                        echo "<div class='manager_deal_style'>欢迎您回来！</div><br /><br />";
                        echo "<div class='manager_deal_style'><a href='manager_data.php'>网站数据查询</a></div>";
                        echo "<div class='manager_deal_style'><a href='manager_part.php'>添加部门介绍</a></div>";
                        echo "<div class='manager_deal_style'><a href='manager_news.php'>添加新闻内容</a></div>";
                        echo "<div class='manager_deal_style'><a href='manager_msg.php'>意见建议管理</a></div>";
                        
                        
                        /* 登出 */
                                
                        echo '<div class="logout" title="登出管理员系统"><a href="logout.php">登出</a></div>'; 
                }else{
                        
                        
			if(!empty($_POST["name"]) and !empty($_POST["password"]) and !empty($_GET["ip"])){                        
                        	$ip=$_SERVER["REMOTE_ADDR"];
                  		if(strcmp($ip,$_GET["ip"]) != 0){
                        		die ("请正确登录管理系统");
                        	}
                        	$name=trim($_POST["name"]);
                        	$name=htmlspecialchars($name);
                        	$password=trim($_POST["password"]);
                        	$password=htmlspecialchars($password);
                        
                  		if($name == "zhbitscda" && $password == "zhbitscda"){
                        
                          		/* 登录成功 */
                                
                                	$_SESSION['scdaadmin']="zhbitscda";
                        
                          		echo "<div class='manager_deal_style'>管理员登录成功！</div><br /><br />";
                          		echo "<div class='manager_deal_style'><a href='manager_data.php'>网站数据查询</a></div>";
                        		echo "<div class='manager_deal_style'><a href='manager_part.php'>添加部门介绍</a></div>";
                        		echo "<div class='manager_deal_style'><a href='manager_news.php'>添加新闻内容</a></div>";
                        		echo "<div class='manager_deal_style'><a href='manager_msg.php'>意见建议管理</a></div>";
                        
                        
                        
                          		/* 登出 */
                                
                          		echo '<div class="logout" title="登出管理员系统"><a href="logout.php">登出</a></div>';                                
                                
                        	
                        	}else{
                                	
                                        if(!isset($_SESSION['wrong'])){
                                  		$_SESSION['wrong']=1;
                                        }else{
                                        	$_SESSION['wrong']+=1;
                                        }
                                        
                                  	/* 超过3次登录不成功触发 */
                                	
                                  	if($_SESSION['wrong'] <= 3){
                        			die ("您的登录不成功！");
                                        }else{
                                        	$url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/index.php"; 
						echo "<script language='javascript' type='text/javascript'>"; 
						echo "window.location.href='$url_page'"; 
						echo "</script>";    
                                        } 
                                  	
                        	}
                	}else{
                		die ("请输入管理员姓名和密码再登录");
                	}
                        
                }	
   
                ?>        
                        
                </div> 
                <div id="content_manager_inside_bottom"></div> 
       </div> 
</div>
<div id="footer">
	<div id="footer_inside">
          	<div id="footer_left">Copyright 2011- 大学生职业发展协会</div>
          	<div id="footer_right"><a href="linkus.php">联系我们</a> &nbsp; &nbsp; |&nbsp; &nbsp; <a href="about.php">关于职协</a>&nbsp;&nbsp;&nbsp;&nbsp;技术支持：北纬21工作室</div>
  	</div>
</div>
</body>
</html>
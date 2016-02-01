<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>大学生职业发展协会 --- 后台管理系统 --- 新闻内容</title>
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
                                
                  	echo "<div class='manager_deal_style'>";
  				
                  	/* 如果有参数提交 */        
                                
                  	if($_GET["value"] == 2){
                        	
                                echo "图片上传出错了... 重新添加";
                        
                        }elseif($_GET["value"] == 3){
                        		
                                echo "图片添加出错了...重新添加";
                        
                        }elseif($_GET["value"] == 4){
                        	
                                echo "您无权登录此页...";
                                
                        }elseif($_GET["value"] == 1){
                        	
                                echo "新闻添加成功！继续添加";
                              
                        }elseif($_GET["value"] == 5){
                        
                        	echo "图片格式不符合要求...重新添加";
                        
                        }else{
                        
                        	echo "添加";
                        
                        }      
                        
                        echo "新闻内容 <a href='manager_deal.php'>返回</a></div><br /><br />";
                        
                        echo ('
			<form action="news_deal.php" method="POST" enctype="multipart/form-data">
                        <div class="manager_deal_style">新闻标题：<input type="text" name="name"></div>
                        <div class="manager_deal_style">相关图片：<input type="file" name="file"></div>
                        <div class="manager_deal_style">新闻内容：</div>
			<textarea name="content" rows="5" cols="40"></textarea><br />
                        <input type="submit" name="submit" value="提交" class="part_button">
			</form>
                        ');
                        
                        
                        /* 登出 */
                                
                        echo '<div class="logout" title="登出管理员系统"><a href="logout.php">登出</a></div>';
                        
                }else{ 
                        
			die ("请登录后再访问本页");
                        
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
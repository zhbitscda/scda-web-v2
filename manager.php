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
                        	$ip=$_SERVER["REMOTE_ADDR"];
				if(isset($_SESSION['scdaadmin'])){
                                	$url_page = "http://1.hehuaqi.sinaapp.com/zhbitscda/manager_deal.php"; 
					echo "<script language='javascript' type='text/javascript'>"; 
					echo "window.location.href='$url_page'"; 
					echo "</script>"; 
                                }
                        ?>
                  	<form action="manager_deal.php?ip=<?php echo $ip; ?>" method="POST">
                        <p></p>
                        <center><div class="admin_style">管理员姓名：<input type="text" name="name" class="admin_bar" title="请输入管理员姓名"></div></center>
                	<center><div class="admin_style">管理员密码：<input type="password" name="password" class="admin_bar" title="请输入管理员密码"></div></center>
                        <p></p><p></p>
                        <center><input type="submit" name="submit" value="登录" class="content_link_button">&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" name="reset" value="重置" class="content_link_button"></center>
                  	</form>
                	<div id="content_manager_inside_main_bottom">
                        	<div class="content_manager_inside_main_bottom_style">
                                  	大学生职业发展协会后台管理系统只对本部门内部相关管理人员开放，限技术有限，其安全性能并非十分牢固，如有漏洞，请黑客或技术宅朋友们 <a href="linkus.php">告知我们</a> ，当尽快处理，谢谢！
                                </div>
                        </div>
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
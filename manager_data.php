<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>大学生职业发展协会 --- 后台管理系统 --- 数据查询</title>
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
                                
                  	echo "<div class='manager_deal_style'>数据查询界面 <a href='manager_deal.php'>返回</a></div><br /><br />";
                        
                        include_once("header.php");
                        $query="select*from scdadata order by id desc";
                        $result=@mysql_query($query);
                  	while($row=@mysql_fetch_array($result,MYSQL_ASSOC)){
                        	$num+=1;
                                $sum+=(int)$row[num];
                          	if($num == 1){
                                	$ip=$row[ip];
                                        $time=$row[time];
                                }
                        }
                        echo "<div class='manager_deal_style'>独立IP访问量：".$num."</div><br />";
                        echo "<div class='manager_deal_style'>总IP访问次数：".$sum."</div><br />";
                        echo "<div class='manager_deal_style'>最近的访问IP：".$ip."</div><br />";
                        echo "<div class='manager_deal_style'>最近访问时间：".$time."</div><br />";
                        
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
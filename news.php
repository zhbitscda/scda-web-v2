<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>大学生职业发展协会 --- 新闻</title>
  <LINK rel=stylesheet type=text/css href="css/lrtk.css">
  <link href="style.css" type="text/css" rel="stylesheet" media="screen">
  <SCRIPT type=text/javascript src="js/jquery.js"></SCRIPT>
  <SCRIPT type=text/javascript charset=utf-8 src="js/lrscroll.js"></SCRIPT>
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

<div id="content">
	<div id="content_inside">
		<!-- 动态效果 -->
                <DIV id=featureContainer>
		<DIV id=feature>
		<DIV id=block>
		<DIV id=botton-scroll>
		<UL class=featureUL>
  		<LI class=featureBox>
  		<DIV class=box><A href="#" target="_blank"><IMG alt=Paracletos  src="images/01.jpg" width=240 height=150> </A></DIV>
  		<!-- /box --></LI>
  		<LI class=featureBox>
  		<DIV class=box><A href="#" target="_blank"><IMG alt="Natural Touch Soap" src="images/02.jpg" width=240 height=150> </A></DIV>
  		<!-- /box --></LI>
  		<LI class=featureBox>
  		<DIV class=box><A href="#" target="_blank"><IMG alt="LRTK" src="images/03.jpg" width=240 height=150> </A></DIV>
  		<!-- /box --></LI>
  		<LI class=featureBox>
  		<DIV class=box><A href="#" target="_blank"><IMG alt="Natalie Reid" src="images/04.jpg" width=240 height=150> </A></DIV>
  		<!-- /box --></LI>
  		<LI class=featureBox>
  		<DIV class=box><A href="#" target="_blank"><IMG alt="xixi" src="images/05.jpg" width=240 height=150> </A></DIV>
  		<!-- /box --></LI>
  		<LI class=featureBox>
  		<DIV class=box><A href="#" target="_blank"><IMG alt="Catherine Sherwood" src="images/06.jpg" width=240 height=150> </A></DIV>
  		<!-- /box -->
  		</LI></UL></DIV><!-- /botton-scroll --></DIV><!-- /block --><A class=prev href="javascript:void();">Previous</A><A class=next 
		href="javascript:void();">Next</A> </DIV>
		<!-- /feature --></DIV><!-- /featureContainer -->
		<DIV id=wrap><SPAN id=load>LOADING...</SPAN></DIV><!-- /wrap --></DIV><!-- /featured --></DIV><!-- /body --></DIV><!-- /wrapper -->
	</div>
</div>

<?php

/* 判断是否有参数接受 */

include_once("header.php");

if(!empty($_GET["name"])){
	$name=trim($_GET["name"]);
        $name=htmlspecialchars($name);
        
        $query="select*from scdanews where name='$name' order by id desc limit 1";
        $result=@mysql_query($query);
  	while($row=@mysql_fetch_array($result,MYSQL_ASSOC)){
        	echo ('
                <div id="news_box">
                <div id="news_box_inside">
                ');
		echo '<div id="news_box_inside_pic"><img src="'.$row[url].'" width=250 height=180></div>';
                echo '<div id="news_box_inside_title">'.$row[name].'</div>';
                echo '<div id="news_box_inside_time">时间：'.$row[time].'</div>';
                echo '<div id="news_box_inside_content"><div class="news_box_inside_content_style">'.$row[content].'</div></div>';
                echo ('
		</div></div>
		');
        }
}else{
	$query="select*from scdanews order by id desc";
        $result=@mysql_query($query);
  	while($row=@mysql_fetch_array($result,MYSQL_ASSOC)){
        	echo ('
                <div id="news_box">
                <div id="news_box_inside">
                ');
		echo '<div id="news_box_inside_pic"><img src="'.$row[url].'" width=250 height=180></div>';
                echo '<div id="news_box_inside_title">'.$row[name].'</div>';
                echo '<div id="news_box_inside_time">时间：'.$row[time].'</div>';
                echo '<div id="news_box_inside_content"><div class="news_box_inside_content_style">'.$row[content].'</div></div>';
                echo ('
		</div></div>
		');
        }
}

?>

<div id="footer">
	<div id="footer_inside">
          	<div id="footer_left">Copyright 2011- 大学生职业发展协会</div>
          	<div id="footer_right"><a href="linkus.php">联系我们</a> &nbsp; &nbsp; |&nbsp; &nbsp; <a href="about.php">关于职协</a>&nbsp;&nbsp;&nbsp;&nbsp;技术支持：北纬21工作室</div>
  	</div>
</div>
</body>
</html>
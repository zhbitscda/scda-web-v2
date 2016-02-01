<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>大学生职业发展协会 --- 联系我们</title>
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
<div id="content_link">
	<div id="content_link_box"></div>
	<div id="content_link_inside">
        <?php
	if(empty($_GET["right"]) and empty($_GET["error"])){
        	echo ('
        	<div class="content_link_title">联系我们</div>
          	<p></p>
                <form action="deal.php" method="POST">
        	<div class="content_link_word_style">您的称呼：<input type="text" name="name" class="content_link_bar"></div>
        	<div class="content_link_word_style">联系方式：<input type="text" name="contact" class="content_link_bar"></div>
        	<div class="content_link_word_style">请在此写下您对我们的意见和建议：</div>
                <center><textarea name="text" class="content_link_text"></textarea></center>
                <p></p>
                <center><input type="submit" name="submit" value="提交" title="请确保以上空缺都已经填写" class="content_link_button">&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" name="reset" value="重置" title="点击清空所填内容" class="content_link_button"></center>
          	</form>
                ');
        }
        if(!empty($_GET["error"])){
          	if($_GET["error"] == 1){
                	echo ('<p></p><div class="content_link_word_style">您的称呼长度不符合要求~</div>');
                }elseif($_GET["error"] == 2){
                	echo ('<p></p><div class="content_link_word_style">您的联系方式的长度不符合要求~</div>');
                }elseif($_GET["error"] == 3){
                	echo ('<p></p><div class="content_link_word_style">您的本次提交由于系统故障所以未能成功，请稍后再试试~</div>');
                }else{
                	echo ('<p></p><div class="content_link_word_style">请不要留空~</div>');
                }
        }
        if(!empty($_GET["right"]) and $_GET["right"] == 1){
        	echo ('<p></p><div class="content_link_word_style">您已经成功提交，感谢您对职协的支持~</div>');
        }
        ?>
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
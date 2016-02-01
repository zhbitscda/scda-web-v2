<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>大学生职业发展协会 --- <?php echo htmlspecialchars($_GET["name"]); ?></title>
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
<div id="middle_part">
	<div id="middle_part_inside">
        <?php
        	$name=trim($_GET["name"]);
                $name=htmlspecialchars($name);
        ?>
        
        	<!-- 主体左侧 -->
        
        	<div id="middle_part_inside_logo"><?php echo $name; ?></div>
        	<div id="middle_part_inside_introduce">
                	<div class="middle_part_inside_introduce_style">
                		<?php
                                include_once("header.php");
                                $query="select*from part where partname='$name' order by id desc limit 1";
                                $result=@mysql_query($query);
				while($row=@mysql_fetch_array($result,MYSQL_ASSOC)){
                                	$introduce=$row[introduce];
                                }
                                echo $introduce;
                                ?>
                  	</div>
                </div>
                
          	<!-- 主体右侧 -->
        	
                <div id="middle_part_inside_bar"></div>
        
        	<div id="middle_part_right_content">
                	<div class="middle_right_content_styles">
                        快速导航：<br />
                        <a href="part.php?name=办公室">办公室</a><a href="part.php?name=调查研究部">调查研究部</a><a href="part.php?name=宣传部">宣传部</a><a href="part.php?name=职业规划部">职业规划部</a><a href="part.php?name=外联部">外联部</a>
                        <a href="part.php?name=讲座交流部">讲座交流部</a><a href="part.php?name=新闻组">新闻组</a><a href="part.php?name=网络组">网络组</a><a href="part.php?name=主持组">主持组</a><a href="part.php?name=培训组">培训组</a>
                
                
                	</div>
                </div>
        
        
        
        
        
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
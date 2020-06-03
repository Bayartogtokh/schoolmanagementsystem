<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
		</head>
    <body>
			  <div class="header"><h1>Сургуулийн систем</h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
				<ul>
				    <li class="manulist">
						    <a class ="menulista" href="index.php">Нүүр хуудас</a>
								<a class ="menulista" href="updateTeacher.php">Мэдээлэл шинэчлэх</a>
								<a class ="menulista" href="viewProfile.php">Миний мэдээлэл</a>
								<a class ="menulista" href="course.php">Оюутны дүн</a>
								<a class ="menulista" href="courses.php">Хичээл</a>
								<a class ="menulista" href="attendance.php">Ирц бүртгэл</a>
								<a class ="menulista" href="exam.php">Шалгалтын хуваарь</a>
								
								<div align="center">
								<h4>Тавтай морил <?php echo $check." ";?></h4>
								    <a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
		</body>
</html>

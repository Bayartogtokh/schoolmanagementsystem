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
                <a class ="menulista" href="createExamSchedule.php">Шалгалтын хуваарь үүсгэх</a>
								<a class ="menulista" href="viewExamSchedule.php">Шалгалтын хуваарь харах</a>
								<a class ="menulista" href="updateExamSchedule.php">Шалгалтын хуваарь шинэчлэх</a>
								<div align="center">
								<h4>Тавтай морил <?php echo $check." ";?></h4>
								    <a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
		</body>
</html>

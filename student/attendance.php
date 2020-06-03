<?php
include_once('main.php');

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentAttendance.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				
	            
		</head>
    <body  onload="ajaxRequestToGetAttendancePresentThisMonth();">
             		 
			 <div class="header"><h1>Сургуулийн систем</h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
				<ul>
				    <li class="manulist" >
						   <a class ="menulista" href="index.php">Нүүр хуудас</a>
						        <a class ="menulista" href="modify.php">Нууц үг</a>
								<a class ="menulista" href="course.php">Хичээл</a>
								<a class ="menulista" href="exam.php">Шалгалтын хуваарь</a>
								<a class ="menulista" href="attendance.php">Ирц бүртгэл</a>
								
								<div align="center">
								<h4>Тавтай морил <?php echo $check." ";?> </h4>
								<a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						 
				    
			
						</li>
				</ul>
			  <hr/>
			  <div align="center" style="background-color:blue;">
	

	
  Тухайн сар:<input type="radio"  onclick="ajaxRequestToGetAttendanceAbsentThisMonth();"   value="thismonth" id="absent" name="Тасалсан" checked="checked"/> Бүгд : <input type="radio" onclick="ajaxRequestToGetAttendanceAbsentAll();" value="all" id="absent" name="Тасалсан"/>
</div>	
<hr/>
<div align="center" >
<table id="myabsent" border="1">

</table>
</div>

							
							
		</body>
</html>


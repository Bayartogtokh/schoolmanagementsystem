<?php
include('main.php');


?>
        <html>
		
			<head>
              
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
			
				</head>
		  <div class="header"><h1>Сургуулийн систем</h1></div>
			  <div class="divtopcorner">
				    <img src="../../source/logo.jpg" height="150" width="150" alt="School Management System"/>
				</div>
			<br/><br/>
				<ul>
				    <li class="manulista" align="center">
						    <a class ="menulista" href="index.php">Нүүр хуудас</a>
								<a class ="menulista" href="updateAttendence.php">Ирц өөрчлөх</a>
								<a class ="menulista" href="deleteatt.php">Ирц устгах</a>
								
								<div align="center">
								<h4>Hi! <?php echo $check." ";?></h4>
								    <a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
		</html>
		<html>
    <head>
				
	            
		</head>
    <body  onload="ajaxRequestToGetMyCourse();">
             		 
			
			 <form action="updateatt.php" method="POST">
			  <div align="center" >
			 Анги сонгох:<select id="myclass" name="myclass" onchange="ajaxRequestToGetMyCourse();">
			 <?php  


$classget = "SELECT  * FROM class where id in(select DISTINCT classid from course where teacherid='$check')";
$res= mysql_query($classget);

while($cln=mysql_fetch_array($res))
{
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}


?>

</select><br /><br />
Хичээл сонгох<select id="mycourse" onchange="" name="mycourse">

</select> <br />
<br/>

Оюутан сонгох<select id="mystudent" onchange="" name="mystudent">

</select><br /><br /><br /><br />
<p>Огноо: <input  type="date" id="datepicker" name="date"/></p>
<input class="menulista" type ="submit" value="Батлах" name="update"/>


</form>
<hr/>



			</div>					
							
		</body>
</html>

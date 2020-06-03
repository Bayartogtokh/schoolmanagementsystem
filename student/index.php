<?php
include_once('main.php');

$st=mysql_query("SELECT *  FROM students WHERE id='$check' ");
$stinfo=mysql_fetch_array($st);

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
			  
			  <div align="center">
			  	<h1>Мэдээлэл</h1>
			  <table border="1">
			  <tr>
			  
			  <th>Оюутан ID</th>
			  <th>Оюутаны нэр</th>
			  <th>Утас</th>
			  <th>E-mail</th>
			  <th>Хүйс</th>
			  <th>Төрсөн он сар</th>
			  <th>Элссэн он</th>
			  <th>Хаяг</th>
			  <th>Ангийн ID</th>
			  <th>Зураг</th>
			  
			  </tr>
			  <tr>
			  
			  <td><?php echo $stinfo['id'];?></td>
			  <td><?php echo $stinfo['name'];?></td>
			  <td><?php echo $stinfo['phone'];?></td>
			  <td><?php echo $stinfo['email'];?></td>
			  <td><?php echo $stinfo['sex'];?></td>
			  <td><?php echo $stinfo['dob'];?></td>
			  <td><?php echo $stinfo['addmissiondate'];?></td>
			  <td><?php echo $stinfo['address'];?></td>
			  
			  <td><?php echo $stinfo['classid'];?></td>
			  <td><img src="../images/<?php echo $check.".jpg";?>" height="95" width="95" alt="<?php echo $check." photo";?> "/></td>
			  </tr>
			  
			  
			  <table
								
								</div>
		</body>
</html>


<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');

$sql = "SELECT * FROM examschedule WHERE  MONTH(examdate) = MONTH(CURRENT_DATE) AND YEAR(examdate)=YEAR(CURRENT_DATE)";
$res= mysql_query($sql);
$string = "<tr>
               <th>Шалгалтын дугаар</th>
               <th>Шалгалтын огноо</th>
               <th>Шалгалтын цаг</th>
               <th>Курс ID</th>
           </tr>";
while($row = mysql_fetch_array($res)){
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['examdate'].
    '</td><td>'.$row['time'].'</td><td>'.$row['courseid'].'</td></tr>';
}
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
								<a class ="menulista" href="manageStudent.php">Оюутан</a>
								<a class ="menulista" href="manageTeacher.php">Багш</a>
								<a class ="menulista" href="course.php">Хичээл</a>
								<a class ="menulista" href="examSchedule.php">Шалгалтын хуваарь</a>
					
								
								<div align="center">
								<h4>Тавтай морил <?php echo $check." ";?></h4>
								    <a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						    </div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h2>Шалгалтын хуваарын жагсаалт</h2>
            <table border="1">
                <?php echo $string; ?>
            </table>
        </center>
		</body>
</html>

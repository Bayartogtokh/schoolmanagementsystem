<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM course;";
$res= mysql_query($sql);
$string = "";
while($row = mysql_fetch_array($res)){
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['teacherid'].'</td><td>'.$row['studentid'].
    '</td><td>'.$row['classid'].'</td></tr>';
}
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchCourse.js"></script>
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
            <table>
                <tr>
                    <td><b>Нэрээр хайх: </b></td>
                    <td><input type="text" name="searchId" placeholder="Хайх нэрээ бичнэ үү:" onkeyup="getCourse(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center><h2>Хичээлийн жагсаалт</h2></center>
        <center>
            <table border="1" id='courseList'>
                <tr>
                    <th>ID</th>
                    <th>Нэр</th>
                    <th>Багшийн ID</th>
                    <th>Оюутны ID Name</th>
                    <th>Ангийн ID</th>
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>

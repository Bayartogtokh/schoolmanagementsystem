<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM students;";
$res= mysql_query($sql);
$string = "";
$images_dir = "../images/";
while($row = mysql_fetch_array($res)){
    $picname = $row['id'];
    $string .= '<tr><td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].
    '</td><td>'.$row['sex'].'</td><td>'.$row['dob'].
    '</td><td>'.$row['addmissiondate'].'</td><td>'.$row['address'].
    '</td><td>'.$row['classid'].
    "</td><td><img src='".$images_dir.$picname.".jpg' alt='$picname' width='150' height='150'>".'</td></tr>';
}
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchStudent.js"></script>
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
								<a class ="menulista" href="manage.php">Багш </a>
					
							
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
                    <td><b>Хайх: </b></td>
                    <td><input type="text" name="searchId" placeholder="Хайх нэрээ оруулна уу:" onkeyup="getStudent(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center><h2>Оюутны жагсаалт</h2></center>
        <center>
            <table border="1" id='studentList'>
                <tr>
                    <th>ID</th>
                    <th>Нэр</th>
                    <th>утас</th>
                    <th>Email</th>
                    <th>Хүйс</th>
                    <th>Төрсөн огноо</th>
                    <th>Элссэн огноо</th>
                    <th>Хаяг</th>
                    <th>Ангийн ID</th>
                    <th>Зураг</th>
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>

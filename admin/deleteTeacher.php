<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$sql = "SELECT * FROM teachers;";
$res= mysql_query($sql);
$string = "";
$images_dir = "../images/";
while($row = mysql_fetch_array($res)){
    $picname = $row['id'];
    $string .= "<form action='deleteTeacherTableData.php' method='post'>".
    "<tr><td><input type='submit' name='submit' value='устгах'></td>".
    '<input type="hidden" value="'.$row['id'].'" name="id" />'.
    '<td>'.$row['id'].'</td><td>'.$row['name'].
    '</td><td>'.$row['phone'].'</td><td>'.$row['email'].'</td><td>'.$row['address'].
    '</td><td>'.$row['sex'].'</td><td>'.$row['dob'].'</td><td>'.$row['hiredate'].

    "</td><td><img src='".$images_dir.$picname.".jpg' alt='$picname' width='150' height='150'>".'</td></tr></form>';
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
            <h2>Багш устгах</h2><hr/>
              <table border="1">
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Нэр</th>
                    <th>Утас</th>
                    <th>Email</th>
                    <th>Хаяг</th>
                    <th>Хүйс</th>
                    <th>Төрсөн огноо</th>
                    <th>Ажилд орсон огноо</th>
                    <th>Зураг</th>
                </tr>
                <?php echo $string;?>
              </table>
        </center>
		</body>
</html>

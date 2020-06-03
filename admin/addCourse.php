<?php
include_once('../../service/mysqlcon.php');
$check=$_SESSION['login_id'];
$session=mysql_query("SELECT name  FROM admin WHERE id='$check' ");
$row=mysql_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
if(!isset($login_session)){
    header("Location:../../");
}
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/currentDate.js"></script>
        <script src = "JS/getClassName.js"></script>
        <script src = "JS/getCourseIdAndNAme.js"></script>
		</head>
    <body onload="getClassNameAndId();">
			  <div class="header"><h1>Сургуулийн систем</h1></div>
			  <div class="divtopcorner">
				    
				</div>
			<br/><br/>
				<ul>
				    <li class="manulist">
						   <a class ="menulista" href="index.php">Нүүр хуудас</a>
                                <a class ="menulista" href="manageStudent.php">Оюутан</a>
                                <a class ="menulista" href="manageTeacher.php">Багш</a>
                                <a class ="menulista" href="course.php">Хичээл</a>
                                <a class ="menulista" href="examSchedule.php">Шалгалтын хуваарь</a>
                               
                                
								<h4>Тавтай морил <?php echo $check." ";?></h4>
								<a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h2>Оюутны хичээл бүртгэл</h2><hr/>
            <form action="#" method="post">
                <table cellpadding="6">
                    <tr>
                        <td>Ангийн ID:</td>
                        <td><select id="className" onchange="getCourseNameAndId();"></select></td>
                    </tr>
                    <tr>
                        <td>Хичээлийн нэр:</td>
                        <td><select id="courseName" onchange="setCourseId()"></select></td>
                    </tr>
                    <tr>
                        <td><input id="courseId"type="hidden" name="name" placeholder="Enter Name"></td>
                    </tr>
                    <tr>
                        <td>Багшийн ID:</td>
                        <td><select id="teacherId" onchange=""></select></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" name="submit"value="Батлах" onclick="getAllCourseStudentAndSubmit();"></td>
                    </tr>
                </table>
            </form>
        </center>
		</body>
</html>

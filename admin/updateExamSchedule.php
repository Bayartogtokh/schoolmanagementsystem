<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchForUpdateExamSchedule.js"></script>
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
                    <td><b>Хайх: </b></td>
                    <td><input type="text" name="searchId" placeholder="Хайх нэрээ оруулна уу:" onkeyup="getExamScheduleForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
         
            <form action="#" method="post">
                <table border="1" cellpadding="6" id='updateExamSchedule'>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $examdate = $_POST['examdate'];
    $examtime = $_POST['examtime'];
    $courseid = $_POST['courseid'];
    $sql = "UPDATE examschedule SET id='$id', examdate='$examdate', time='$examtime', courseid='$courseid' WHERE id='$id'";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Could not Update data: '.mysql_error());
    }
    echo "Амжилттай \n";
}
?>

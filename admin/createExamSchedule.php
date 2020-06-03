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
            <h2>Жагсаалт</h2>
            <form action="#" method="post">
              <table cellpadding="6">
                  <tr>
                      <td>Шалгалтын хуваарийн Id:</td>
                      <td><input type="text" name="id" placeholder=" ID"></td>
                  </tr>
                  <tr>
                      <td>Шалгалтын огноо:</td>
                      <td><input type="text" name="examDate" placeholder="Шалгалтын огноо(y-m-d)"></td>
                  </tr>
                  <tr>
                      <td>Шалгалтын цаг:</td>
                      <td><input type="text" name="examTime" placeholder="Шалгалтын цаг(H:M - H:M)"></td>
                  </tr>
                  <tr>
                      <td>Курс ID:</td>
                      <td><input type="text" name="courseId" placeholder="Курс ID"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><input type="submit" name="submit"value="Дарах"></td>
                  </tr>
              </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $id = $_POST['id'];
    $examDate = $_POST['examDate'];
    $examTime = $_POST['examTime'];
    $courseId = $_POST['courseId'];
    $sql = "INSERT INTO examschedule VALUES('$id','$examDate','$examTime','$courseId')";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Амжилтгүй: '.mysql_error());
    }
    echo "Амжилттай\n";
}
?>

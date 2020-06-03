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
        <script src = "JS/newStudentValidation.js"></script>
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
                                
                                
								<h4>Тавтай морил <?php echo $check." ";?></h4>
								<a class ="menulista" href="logout.php" onmouseover="changemouseover(this);" onmouseout="changemouseout(this,'<?php echo ucfirst($loged_user_name);?>');"><?php echo "Logout";?></a>
						</div>
						</li>
				</ul>
			  <hr/>
        <center>
            <h2>Оюутны бүртгэл</h2><hr/>
            <form action="#" method="post"onsubmit="return newStudentValidation();" enctype="multipart/form-data">
                <table cellpadding="6">
                    <tr>
                      <td>Оюутны Id:</td>
                      <td><input id="stuId"type="text" name="studentId" placeholder="Id"></td>
                    </tr>
                    <tr>
                        <td>Нэр:</td>
                        <td><input id="stuName" type="text" name="studentName" placeholder="Нэр"></td>
                    </tr>
                    <tr>
                        <td>Нууц үг:</td>
                        <td><input id="stuPassword"type="text" name="studentPassword" placeholder="Нууц үг"></td>
                    </tr>
                    <tr>
                        <td>Утас:</td>
                        <td><input id="stuPhone"type="text" name="studentPhone" placeholder="Утас"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input id="stuEmail"type="text" name="studentEmail" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td>Хүйс:</td>
                        <td><input type="radio" name="gender" value="Male" onclick="stuGender = this.value;"> эр <input type="radio" name="gender" value="Female" onclick="this.value"> эм</td>
                    </tr>
                    <tr>
                        <td>Төрсөн огноо:</td>
                        <td><input id="stuDOB"type="text" name="studentDOB" placeholder="Төрсөн огноо(yyyy-mm-dd)"></td>
                    </tr>
                    <tr>
                        <td>Элссэн огноо:</td>
                        <td><input id="stuAddmissionDate"name="studentAddmissionDate"value = "<?php echo date('Y-m-d');?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Хаяг:</td>
                        <td><input id="stuAddress" type="text" name="studentAddress" placeholder="Хаяг"></td>
                    </tr>
                    <tr>
                        
                    </tr>
                    <tr>
                        <td>Ангийн Id:</td>
                        <td><input id="stuClassId" type="text" name="studentClassId" placeholder="Ангийн Id"></td>
                    </tr>
                    <tr>
                      <td>Зураг:</td>
                      <td><input id="file"type="file" name="file"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit"value="Submit"></td>
                    </tr>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $stuId = $_POST['studentId'];
    $stuName = $_POST['studentName'];
    $stuPassword = $_POST['studentPassword'];
    $stuPhone = $_POST['studentPhone'];
    $stuEmail = $_POST['studentEmail'];
    $stugender = $_POST['gender'];
    $stuDOB = $_POST['studentDOB'];
    $stuAddmissionDate = $_POST['studentAddmissionDate'];
    $stuAddress = $_POST['studentAddress'];

    $stuClassId = $_POST['studentClassId'];
    //$filename = $_FILES['file']['name'];
    $filetmp =$_FILES['file']['tmp_name'];
    move_uploaded_file($filetmp,"../images/".$stuId.".jpg");
    $sql = "INSERT INTO students VALUES('$stuId','$stuName','$stuPassword','$stuPhone','$stuEmail','$stugender','$stuDOB','$stuAddmissionDate','$stuAddress','$stuClassId');";
    $success = mysql_query($sql);
    $sql = "INSERT INTO users VALUES('$stuId','$stuPassword','student');";
    $success = mysql_query($sql);
    if(!$success) {
        die('Could not enter data: '.mysql_error());
    }
    echo "Амжилттай\n";
}
?>

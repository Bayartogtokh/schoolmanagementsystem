<?php
include_once('main.php');
?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
				<script src = "JS/login_logout.js"></script>
        <script src = "JS/searchForUpdateTeacher.js"></script>
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
                    <td><b>Хайх нэрээ бичнүү: </b></td>
                    <td><input type="text" name="searchId" placeholder="Хайх нэрээ бичнүү:" onkeyup="getTeacherForUpdate(this.value);"></td>
                </tr>
            </table>
        </center>
        <br/>
        <center>
          <h2></h2>
            <form action="#" method="post" onsubmit="return newTeacherValidation();" enctype="multipart/form-data">
                <table border="1" cellpadding="6" id='updateTeacherData'>
                </table>
            </form>
        </center>
		</body>
</html>
<?php
include_once('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $Id = $_POST['id'];
    $Name = $_POST['name'];
    $Password = $_POST['password'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $gender = $_POST['gender'];
    $DOB = $_POST['dob'];
    $hiredate = $_POST['hiredate'];
    $stuAddress = $_POST['address'];
    $image = $_POST['pic'];
    $uploads_dir = "../images";
    move_uploaded_file($image, "$uploads_dir/$image");
    $sql = "UPDATE teachers SET id='$Id', name='$Name', password='$Password', phone='$Phone', email='$Email', address='$Address', sex='$gender', dob='$DOB', hiredate='$hiredate',  WHERE id='$id'";
    $success = mysql_query( $sql,$link );
    if(!$success) {
        die('Could not Update data: '.mysql_error());
    }
    echo "Амжилттай\n";
}
?>

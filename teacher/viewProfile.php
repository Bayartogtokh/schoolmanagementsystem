<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
include_once('index.php');
?>
<html>
<body>
<div align="center">
<img src="../images/<?php echo $check ?>.jpg" alt="<?php echo $check ?>"/>
</div>


<div class ="header">
<?php
$sql = "SELECT * FROM teachers WHERE id='$check';";
$res = mysql_query($sql);
while($row = mysql_fetch_array($res)){
   echo "<center>";
   echo "ID: ".$row['id']."<br />";
   echo "Нэр: ".$row['name']."<br />";
   echo "Утас: ".$row['phone']."<br />";
   echo "Төрсөн огноо: ".$row['dob']."<br />";
   echo "Email: ".$row['email']."<br />";
   echo "Хүйс: ".$row['sex']."<br />";
   echo "Ажилд орсон огноо: ".$row['hiredate']."<br />";
   
   echo "</center>";
   
}
?>
</div>
</body>
</html>
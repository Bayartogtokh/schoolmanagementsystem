<?php  
include_once('main.php');
 $em = $_REQUEST['curid'];


$courseincurr = "SELECT * FROM examschedule WHERE courseid='$em' ";
$resc = mysql_query($courseincurr);

echo "<tr> <th>Шалгалтын огноо:</th><th>Шалгалтын цаг:</th></tr>";
while($r=mysql_fetch_array($resc))
{
 echo "<tr><td>",$r['examdate'],"</td><td>",$r['time'],"</td></tr>";

}


?>

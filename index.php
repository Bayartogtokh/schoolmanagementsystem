<?php
$login_code= isset($_REQUEST['login']) ? $_REQUEST['login'] : '1';
if($login_code=="false"){
    $login_message="Нууц үг буруу байна.!";
	  $color="red";
}
else{
    $login_message="Нэвтрэх";
	  $color="green";
}
?>
<link rel="stylesheet" type="text/css" href="nuur.css">
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
	      <script src="source/js/loginValidate.js"></script>
        <title>Сургуулийн систем</title>
    </head>
    <style >
    	body{ background-image: url('num.jpg'); }
    </style>
    <body>
        <center><br><br><br><br><br>
	          <img src="logos.png" width="15%"; />
	          
	        
           

            <form  action="service/check.access.php" onsubmit="return loginValidate();" method="post"><br/>
                <input type="text" id="myid" name="myid" placeholder="Таны ID" autofocus="" class="admin"  /><br/><br/><br/>
                <input type="password" id="mypassword" name="mypassword" placeholder="Нууц үг" class="admin" /><br/><br/><br/>
                
                <input type="submit" value="Нэвтрэх" class="button" />
            </form>
            </div>
        </center>
    </body>
</html>

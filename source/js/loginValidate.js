function loginValidate() {
    var id = document.getElementById('myid').value;
	  var pass = document.getElementById('mypassword').value;
	  if ((id == null || id == "") && (pass == null || pass == "")){
        alert("ID болон Нууц үгээ оруулна уу");
        return false;
    }
    else if (id == null || id == "") {
        alert("ID байх ёстой");
        return false;
    }
	  else if(pass == null || pass == ""){
        alert("Нууц үгээ заавал оруулна уу");
        return false;
    }
	  else{
		    return true;
	}
}

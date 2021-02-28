
function validate_email(mail) 
{
	var username=document.forms["Registration_form"]["user"].value;
var psword=document.forms["Registration_form"]["password"].value;

if(username == "" && psword=="") {
alert("Name & Password must be filled out");
return false;
}
 if(username==""){
alert("Name must be filled out");
return false;
}
if(psword==""){
alert("Password must be filled out");
return false;
}
	var x=document.forms["Registration_form"]["emailaddress"].value;
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))
  {
    return (true)
  }
  else {
    alert("You have entered an invalid email address!")
  return (false)
  }
  
  
}


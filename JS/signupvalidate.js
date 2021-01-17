
function Validate()
{
    var fname = document.forms["RegForm"]["fname"];
    var lname = document.forms["RegForm"]["lname"];
    var email = document.forms["RegForm"]["email"];
    var utype = document.forms["RegForm"]["utype"];
    var uname = document.forms["RegForm"]["uname"];
    var pass = document.forms["RegForm"]["pass"];
    var pass0 = document.forms["RegForm"]["pass0"];

    if(fname.value==""&&lname.value=="")
    {
        window.alert("Enter your Name.");
        fname.focus();
        return false;
    }
    if(email.value=="")
    {
        window.alert("Enter a vaid Email Address");
        email.focus;
        return false;
    }
    if(email.value.indexOf("@",0)<0)
    {
        window.alert("Enter a vaid Email Address");
        email.focus;
        return false; 
    }
    if(email.value.indexOf(".",0)<0)
    {
        window.alert("Enter a vaid Email Address");
        email.focus;
        return false;
    }
    if(utype.selectedIndex < 1)
    {
        alert("Enter User Type")
        utype.focus();
        return false;
    }
    if(uname.value=="")
    {
        window.alert("Enter your Username.");
        uname.focus();
        return false;
    }
    if(pass.value==""||pass0.value=="")
    {
        window.alert("Enter Password");
        pass.focus();
        return false;
    }
    if(pass.value!=pass0.value)
    {
        window.alert("Passwords doesn't match");
        pass.focus();
        return false;
    }
    return true;
}
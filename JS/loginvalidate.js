function Validate()
{
    var uname = document.forms["LogForm"]["uname"];
    var pass = document.forms["LogForm"]["pass"];

    if(uname.value == "")
    {
        window.alert("username required");
        uname.focus();
        return false; 
    }
    if(pass.value == "")
    {
        window.alert("password required");
        uname.focus();
        return false;
    }
    return true;
}

function Validatee()
{
    var name = document.forms["RegForm"]["fname"];
    var email = document.forms["RegForm"]["email"];
    var uname = document.forms["RegForm"]["uname"];
    var pass = document.forms["RegForm"]["pass"];
    var pass0 = document.forms["RegForm"]["pass0"];

    if(name.value=="")
    {
        window.alert("enter your name");
        name.focus();
        return false;
    }
    if(email.value=="")
    {
        window.alert("enter a valid email address");
        email.focus;
        return false;
    }
    if(email.value.indexOf("@",0)<0)
    {
        window.alert("enter a valid email address");
        email.focus;
        return false; 
    }
    if(email.value.indexOf(".",0)<0)
    {
        window.alert("enter a valid email address");
        email.focus;
        return false;
    }
    if(uname.value=="")
    {
        window.alert("enter your username");
        uname.focus();
        return false;
    }
    if(pass.value==""||pass0.value=="")
    {
        window.alert("enter password");
        pass.focus();
        return false;
    }
    if(pass.value!=pass0.value)
    {
        window.alert("password doesn't match");
        pass.focus();
        return false;
    }
    return true;
}
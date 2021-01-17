function Validate()
{
    var vertype = document.forms["RegForm"]["vertype"];
    var verdata = document.forms["RegForm"]["verdata"];

    if((vertype[0].checked == false)&&(vertype[1].checked == false))
    {
        window.alert("Select a Verification Type");
        vertype.focus();       /*check verdata with email*/
        return false; 
    }
    if(vertype[1].checked == true)
    {
        window.alert("Username");
        vertype.focus();       /*check verdata with uname*/
        return false; 
    }
    if(verdata.value=="")
    {
        window.alert("Enter username or email");
        verdata.focus();
        return false;
    }
    return true;
}
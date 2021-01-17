// $('.message a').click(function(){
//    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
// });

function onAccountCreate() {
    toggleVisibility("regForm", "loginForm");
}

function onSignIn() {
    toggleVisibility("loginForm", "regForm");
}

var toggleVisibility = (sVisibleFormId, sInvisibleFormId) => {
    document.getElementById(sVisibleFormId).style.display = "block";
    document.getElementById(sInvisibleFormId).style.display = "none";
}
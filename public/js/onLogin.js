$("#password").keypress(function(e) {
    if(e.which == 13) {
        onLogin();
    }
});
$("#login").keypress(function(e) {
    if(e.which == 13) {
        onLogin();
    }
});
function onLogin(){
    $.ajax({
        url:"../pages/php/verification.php",
        type:"POST",
        data:{
            login:lForm.login.value,
            password:lForm.password.value
        },
        success:function(num){
            if(num==0){
                if(!$('div').is("#alert")) {
                    $("[name='lForm']").after("<div id='alert'>incorrect login or password<div/>");
                }
            }
            else{
                window.sessionStorage.login=lForm.login.value;
                window.sessionStorage.password=lForm.password.value;
                document.location.href="../pages/ownCabinet.php?id="+num;
            }
        }
    });
}
function onVerification(){
    if(window.sessionStorage.login!==undefined&&window.sessionStorage.login!=="undefined")
    {
        $.ajax({
            url:"../pages/php/verification.php",
            type:"POST",
            data:{
                login:window.sessionStorage.login,
                password:window.sessionStorage.password
            },
            success:function(num){
                    document.location.href="/domains/us123.com/wp-content/themes/mytheme/ownCabinet.php?id="+num;
            }
        });
    }
    else {
        document.location.href="http://us123.com/?page_id=60";
    }
}
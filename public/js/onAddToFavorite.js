function onAddToFavorite(id)
{
    if(window.sessionStorage.login!==undefined&&window.sessionStorage.login!=="undefined")
    {
        $.ajax({
            url:"../pages/php/onAddToFavorite.php",
            type:"POST",
            data:{
                login:window.sessionStorage.login,
                password:window.sessionStorage.password,
                product_id:id
            },
            success:function(num){
                if(num==0){
                    alert("Added");
                }
                else if(num==-1){
                    alert("already added");
                }

            }
        });
    }
    else
    {
        document.location.href="../pages/signInForm.php";
    }
id=0;
}

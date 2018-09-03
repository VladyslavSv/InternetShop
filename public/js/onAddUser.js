function onAddUser()
{
    if(lForm.password.value==lForm.password2.value&&lForm.password.value!=lForm.login.value) {
        $.ajax({
            url: "../pages/php/addUser.php",
            type: "POST",
            data: {
                login: lForm.login.value,
                password: lForm.password.value,
                email: lForm.email.value
            },
            success: function (num) {
                if (num == 0) {
                    alert("This user already exist");
                }
                else if (num == 1) {
                    alert("You have successfully registred");
                    document.location.href = "signInForm.php";
                }
            }
        });
    }
    else if(lForm.password.value!=lForm.password2.value){
        alert("passwords are not equal!");
    }
    else if(lForm.password.value==lForm.login.value){
        alert("Create another password!");
    }
}
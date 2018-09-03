function onExit(){
    window.sessionStorage.login=undefined;
    window.sessionStorage.password=undefined;
    $("#cabinet").text("Sing in");
    document.location.href="../pages/signInForm.php";
}
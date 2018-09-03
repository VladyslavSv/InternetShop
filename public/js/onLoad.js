function onLoadAnyPage(){
    if(window.sessionStorage.login!==undefined&&window.sessionStorage.login!=="undefined")
    {
        $("#cabinet").text(window.sessionStorage.login);
    }
}

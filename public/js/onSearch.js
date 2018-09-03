function goToSearch()
{
    var word = $("#searchInfo").val();
    document.location.href="/pages/result.php?category_id=0&word="+word;
}
jQuery("#searchInfo").keypress(function(e) {
    if(e.which == 13) {
        goToSearch();
    }
});
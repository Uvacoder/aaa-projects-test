function test($value) {
    $("#size").val($value).change();
}

$(document).ready(function(){
    //var pageURL = document.getElementById("builderModalIFrame").contentWindow.location.href;
    //$("#input_2_1").val(pageURL);
});

function frameTest() {
    alert(document.getElementById('builderModalIFrame').contentWindow.location.href);
}
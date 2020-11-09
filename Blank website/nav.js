function myFunction() {
    var x = document.getElementById("mainNavs");
    if (x.className === "mainNav") {
        x.className += " responsive";
    } else {
        x.className = "mainNav";
    }
}
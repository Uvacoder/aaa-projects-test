$(document).ready(function(){ 
$( "#nav-btn" ).click(function() {
  $( "nav" ).toggle( "slow" );
});
    });
function openNav() {
    document.getElementById("mySidenav").style.display = "inline";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.display = "none";
}
let navButton = document.querySelector(".nav-button");

navButton.addEventListener("click", (e) => { 
  e.preventDefault();
  
  // toggle nav state
  document.body.classList.toggle("nav-visible");
});
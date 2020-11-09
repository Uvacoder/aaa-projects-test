$(function(){"use strict";$(".mobiletoggleIcontainer").click(function(){"nav"===$(".nav").attr("class")?($(".nav").attr("class","nav nav-mobileopen"),$(".mobiletoggleIcontainer").attr("class","mobiletoggleIcontainer mobiletoggleIcontainer-closeIconVisible"),$("#mob_menu").attr("class","nav-MobileContainer nav-MobileContainer-default nav-MobileContainer-visible")):($(".nav").attr("class","nav"),$(".mobiletoggleIcontainer").attr("class","mobiletoggleIcontainer"),$("#mob_menu").attr("class","nav-MobileContainer nav-MobileContainer--default"))})});$(function(){$("#header-secret").load("/assets/includes/header.html")}),$(function(){$("#footer-secret").load("/assets/includes/footer.html")});


/*

var quantity = prompt("How many sheets?");
if ( 100 < quantity && quantity < 250 ) {

}

*/

var size_prices = new Array();
size_prices["half"]=3.30;
size_prices["letter"]=4.50;

var color_prices = new Array();
color_prices["black"]=0.00;
color_prices["color"]=0.50;

var sides_prices = new Array();
sides_prices["single"]=0.00;
sides_prices["double"]=0.50;


function getQuantity() {
    var theForm = document.forms["customPricing"];
    var quantity = theForm.elements["quantity"];
    var howmany =0;
    if(quantity.value!="") {
        howmany = parseInt(quantity.value);
    }
return howmany;
}

function getSizePrice() {
    var sizePrice=0;
    var theForm = document.forms["customPricing"];
    var selectedSize = theForm.elements["selected_size"];
    for(var i = 0; i < selectedSize.length; i++) {
        if(selectedSize[i].checked) {
            sizePrice = size_prices[selectedSize[i].value];
            break;
        }
    }
    return sizePrice;
}


function getColorPrice() {
    var colorPrice=0;
    var theForm = document.forms["customPricing"];
    var selectedColor = theForm.elements["selected_color"];
    for(var i = 0; i < selectedColor.length; i++) {
        if(selectedColor[i].checked) {
            colorPrice = color_prices[selectedColor[i].value];
            break;
        }
    }
    return colorPrice;
}


function getSidesPrice() {
    var sidesPrice=0;
    var theForm = document.forms["customPricing"];
    var selectedSides = theForm.elements["selected_sides"];
    for(var i = 0; i < selectedSides.length; i++) {
        if(selectedSides[i].checked) {
            sidesPrice = sides_prices[selectedSides[i].value];
            break;
        }
    }
    return sidesPrice;
}

function calculateTotal()
{
    var totalPrice = (getSizePrice() + getColorPrice() + getSidesPrice()) * getQuantity();
    var unitPrice = getSizePrice() + getColorPrice() + getSidesPrice();

    var divobj = document.getElementById('swipiesTotal');
    divobj.style.display='block';
    divobj.innerHTML = "Per unit = $"+unitPrice.toFixed(2)+"<br>Total = $"+totalPrice.toFixed(2);
}


function hideTotal()
{
    var divobj = document.getElementById('swipiesTotal');
    divobj.style.display='none';
}













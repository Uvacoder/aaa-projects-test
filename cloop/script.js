$(function() {
	"use strict";
	
	$(".mobiletoggleIcontainer").click(function(){
		if($(".Snav").attr("class") === "Snav"){
			$(".Snav").attr("class","Snav Snav-mobileopen");
			$(".mobiletoggleIcontainer").attr("class","mobiletoggleIcontainer mobiletoggleIcontainer-closeIconVisible");
			$("#mob_menu").attr("class","Snav-MobileContainer Snav-MobileContainer-default Snav-MobileContainer-visible");
		}else{
			$(".Snav").attr("class","Snav");
			$(".mobiletoggleIcontainer").attr("class","mobiletoggleIcontainer");
			$("#mob_menu").attr("class","Snav-MobileContainer Snav-MobileContainer--default");
		}
	});
	
	
});
"use strict";

//open game in side menu
$(".selectGame").click(function(){
		
		$(".country-list").slideUp();	
		
		$(".country-list").parent("li").removeClass("active");
		
		$(this).parent("li").addClass("active");	
		if( $(this).parent("li").hasClass("active") ){
			$(this).siblings(".country-list").slideDown();				
		} 
	});

// coupon side 
var w = window.innerWidth;
		
		if( w <= 1200 ){
			$("body").append("<a href='#_' class='bet-icon'><img src='Images/bet-icon.png' class='img-fluid' /></a>");
		}
		
		
$(".bet-icon").click(function(){
   
	 // Set the effect type
   $(".couponSide").animate({
      width: "toggle"	   
    });	
	
});

// sidemenu

if( w <= 767 ){
			$("body").append("<a href='#_' class='list-icon'><img src='Images/list.png' class='img-fluid' /></a>");
		}
		
		
$(".list-icon").click(function(){   
	 // Set the effect type
   $(".sidelist").animate({
      width: "toggle"	   
    });	
	
});
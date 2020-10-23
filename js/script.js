const myClose 	= document.querySelector(".my-close");
const button 	= document.querySelector("button.navbar-toggle");

	myClose.addEventListener("click", function(){
		button.click();
	})

$(".owl-carousel").owlCarousel({
				loop:true,
				margin:10,
				navigation:true,
				navigationText:["",""],
				items:3,
				responsive:{
					0:{
						items:1
						},
					600:{
						items:2
					},
					1000:{
						items:2
						},
					1200:{
						item:2
					}
				}
			});
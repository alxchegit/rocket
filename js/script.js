window.onload = function(){
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
					items:3
					}
			}
		});
 

}; 
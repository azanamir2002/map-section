$(function(){

	// code for active menu start from here

	$(window).scroll(function(){
		let scrollDistance = $(window).scrollTop();

		$("section").each(function(i){
			if($(this).position().top <= scrollDistance){
				$("nav a.active").removeClass("active");
				$("nav a").eq(i).addClass("active");
			}
		});
	});
	// code for active menu end here



	// toggleMenu code start from here

	$(".toggleMenu").on("click",function(){
		$("nav").toggleClass("active");
	});

	$("nav a").on("click",function(){
		$("nav").removeClass("active");		
	});


	// toggleMenu code end here

});

 
$(document).ready(function(){
	$nav=$('.nav');
	
	$toggleCollapse=$('.toggle-collapse');
	
	/*------click event on toggle menu----*/
	
	$toggleCollapse.click(function(){
		$nav.toggleClass('collapse');
	})
	/*-------owl-carousel for blog-------*/
	
	$('.owl-carousel').owlCarousel({
		loop:true,
		autoplay:true,
		autoplayTimeout:2000,
		dots:false,
		nav:true,
		navText:[$('.owl-navigation .owl-nav-prev'),$('.owl-navigation .owl-nav-next')],
		responsive:{
			0:{
				items:1
			},
			500:{
				items:2
			},
			800:{
				items:3
			},
		}
	
	})
	
	/*-------click to scroll up-----------*/
	$('.move-up span').click(function(){
		$('html,body').animate({
			scrollTop:0
		},3000)
	})
	
	/*---------Aos instance---------------*/
	AOS.init();
});

 
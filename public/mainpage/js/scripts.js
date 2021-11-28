// ========== expander menu ==========
const showMenu = (toggleId, navId) =>{
	const toggle = document.getElementById(toggleId),
	nav = document.getElementById(navId);

	if (toggle && nav) {
		toggle.addEventListener('click', () =>{
			nav.classList.toggle('show');
		});
	}
};

showMenu('mobile-menu', 'navbar-mini');
showMenu('navmini-close', 'navbar-mini');

// scroll to up button
$(document).ready(function() {
	$(window).scroll(function() {
		if($(window).scrollTop() > 720) {
			$('.scroll__up').css({
				"opacity":"1", "pointer-events":"auto"
			});
		} else {
			$('.scroll__up').css({
				"opacity":"0", "pointer-events":"none"
			});
		}
	});

	$('.scroll__up').click(function() {
		$('html').animate({scrollTop:0}, 150);
	});
});

// CAROUSEL
// carousel-tp-home
$(document).ready(function() {
	$('.owl-carousel#tp').owlCarousel({
		loop:true,
		margin:16,
		nav:false,
		dots:false,
		autoplay:true,
		autoplayTimeout:6000,
		smartSpeed:1000,
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
});

// carousel-info-home
$(document).ready(function() {
	$('.owl-carousel#info').owlCarousel({
		loop:true,
		margin:16,
		nav:false,
		dots:true,
		autoplay:true,
		autoplayTimeout:6000,
		smartSpeed:1000,
		responsive:{
			0:{
				items:1
			},
			600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});
});
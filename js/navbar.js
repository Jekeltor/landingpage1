		$(function() {
			var header = $(".navbar");

			$(window).scroll(function() {    
				var scroll = $(window).scrollTop();
				if (scroll >= 50) {
					header.addClass("navbarscrolled");
				} else {
					header.removeClass("navbarscrolled");
				}
			});

		});
		const parllax = document.querySelector(".background");

		window.addEventListener("scroll", function() {
			let offset = window.pageYOffset;
			parllax.style.backgroundPositionY = offset * .25 + 'px';
		});
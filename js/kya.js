var kya = {
	elm: {
		showMenuBtn: $('.dropdown-menu'),
		ul: $('.main-nav ul')
	},

	init: function() {
		kya.elm.showMenuBtn.click(function(e) {
			kya.elm.ul.toggleClass('show');
	
			if (kya.elm.ul.hasClass('show')) {
				kya.elm.showMenuBtn.text('Close Menu');
			}

			else {
				kya.elm.showMenuBtn.text('Menu');
			}
			e.preventDefault();
		});
	}
};

kya.init();
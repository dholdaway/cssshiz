(function($){
	var $body,$window, backToTopBtn, topSection;

	$(document).ready(function() {
		$body = $('body');
		$window = $(window);
		backToTopBtn = $('.hamburger.btn-up');
		topSection = $('.top-section');

		topSection.css({minHeight:$window.height()+'px'});
		if($window.width() <= 768){
			topSection.css({minWidth:$window.width()+'px'});
		}

		$window.resize(function(){
			if($window.width() <= 768){
				topSection.css({minWidth:$window.width()+'px'});
			}
		});

		$(' .top-btn ').click(function(){
			$(this).toggleClass('open');
			if( $(this).hasClass('open') ) {
				$body.addClass('overlay-active overlay-active-'+$(this).data('side'));
			} else {
				$body.removeClass('overlay-active overlay-active-'+$(this).data('side'));
			}
		});

		// Jscroll Lazyload blog-page
		$('#posts').jscroll({
			nextSelector : '#load-more a',
			contentSelector : '#posts',
			autoTrigger : false,
			loadingHtml : '<div class="loading-text"><span>Loading...</span></div>'
		});

		$window.scroll(function() {
			if( $(this).scrollTop() > $(this).height() ) {
				backToTopBtn.fadeIn(500);
			} else {
				backToTopBtn.fadeOut(300);
			}
		});

		// Click me, back to top button
		$('.hamburger.btn-up').click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:0}, 300);
		});

		// Main navigation dropdown 
		$('.main-navigation .menu-item-has-children > a').append('<span class="drop-down"><i class="fa fa-caret-down"></i></span>');
		$('.main-navigation .menu-item-has-children .drop-down').click(function(event){
			event.preventDefault();
			$(this).toggleClass('open');
			if( $(this).hasClass('open') ) {
				$(this).closest('.main-navigation .menu-item-has-children').addClass('drop-sub');
			} else {
				$(this).closest('.main-navigation .menu-item-has-children').removeClass('drop-sub');
			}
			
		});


	});
	$(window).load(function() {
		$('.outer-section').fadeOut();
	});
})(jQuery);
$(document).ready(function() {
						   
	/*	settings	*/
	
	$('.settings-wrapper .show-settings i').click(function() {
		$(this).parent().parent().find('.settings-block').slideToggle();
	});
	$('.settings-block a').click(function(e) {
		e.preventDefault();
		$t = $(this);
		if ($t.attr('data-color') != undefined) {
			$('#site-color').attr('href', './css/color-' + $t.attr('data-color') + '.css');
		}
		if ($(this).attr('data-pattern') != undefined) {
			$('.pattern-bg').css('background-image', 'url(images/patterns/' + $(this).attr('data-pattern') +'.png)');
		}
	});
						 
	$('a.project-preview').colorbox();

	$('#lang i').click(function() {
		$(this).parent().find('ul').slideToggle();
		$('.top-bar-search-form').fadeOut();
	});
	$('#lang ul li a').click(function(e) {
		e.preventDefault();
		if ($(this).hasClass('cancel')) {
			$(this).parent().parent().fadeOut()
			return;
		}
		$(this).parent().parent().slideUp().parent().find('span').html($(this).html());
	});
	
	$('#top-bar-search i').click(function() {
		$(this).parent().find('.top-bar-search-form').slideToggle();
		$('#lang ul').fadeOut();
	});
	$('.top-bar-search-form i').click(function() { $(this).parent().fadeOut(); });
	
	/*	sliders setup	*/
	
	$('#layerslider').layerSlider({
		skinsPath : './css/layerslider/skins/',
		skin : 'fullwidthdark',
		thumbnailNavigation : 'hover',
		hoverPrevNext : true,
		responsive : true,
		responsiveUnder : 960,
		sublayerContainer : 960,
		twoWaySlideshow : true,
		firstLayer: 1
	});
	$('.single-portfolio-images').flexslider({
		animation: "slide"
	});
	$('.flexslider').flexslider({
		animation: "slide"
	});
	$('#myCarousel').carousel({
		interval: 2000
	})
	
	/*	stick the menu	*/
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 40) {
			$(".site-menu-bg").addClass('site-menu-sticky');
			$('.page-title').css('margin-top','55px');
			$('.stick-logo').show();
		} else {
			$(".site-menu-bg").removeClass('site-menu-sticky');
			$('.page-title').css('margin-top','0px');
			$('.stick-logo').hide();
		}
	});
	
	/*	scroll to the top		*/

	$('#to-the-top').click(function() { $('body,html').animate({scrollTop: 0}, 1000); });

	/*	and-more-trigger i	*/
	
	var andH = $('.and-more').height();
	$('.and-more').height(125)
	$('.and-more-trigger i').click(function() {
		$(this).toggleClass('icon-minus');
		if( $(this).hasClass('icon-minus')) {
			$('.and-more').animate({'height': (andH - 20) + 'px'});
//			$('.and-more').css('height','auto');
		} else {
			$('.and-more').animate({'height':'125px'});
//			$('.and-more').css('height','125px');
		}
	});
	
	/*	messages	*/
	
	$('.message header').each(function() {
		$('<i class="icon-remove"></i>').appendTo($(this));
		$(this).find('.icon-remove').click(function() { $(this).closest('.message').fadeOut(); });
	});
	
	/*	desktop menu	*/
	
	$('<span class="arrow"></span>').insertBefore('nav.desktop-nav > ul > li > ul');
	$('nav.desktop-nav > ul > li').each(function() {
		$(this).find('span.arrow').css('left', $(this).width()/2 - 11);
	}).hover(function() {
		$(this).find('> ul').show().parent().find('span.arrow').show();
	}, function() {
		$(this).find('> ul').hide().parent().find('span.arrow').hide();
	});
	$('nav.desktop-nav > ul > li > ul a').hover(function() {$(this).parent().addClass('hover')}, function() {$(this).parent().removeClass('hover')});
	$('<div class="menu-shadow"></div>').prependTo('.slider1')
	$('<div class="menu-shadow"></div>').prependTo('.slider2')
	$('<div class="menu-shadow"></div>').prependTo('.page-title')
	
	/*	mobile menu	*/
	
	$('.mobile-nav > ul > li').each(function() {
		if ($(this).find('> ul').length != 0) {
			$('<i class="icon-plus-sign"><i>').appendTo($(this));
		}
	}).find('i').click(function() {
		$(this).toggleClass('icon-minus-sign').parent().find('ul').slideToggle();
	});
	$('.mobile-nav > i').click(function() { $(this).parent().find('> ul').slideToggle() });
	
	/*	buttons	*/
	
	$('a.color-button, .block-navigation a, a.dark-button, a.light-button').bind('mousedown', function() {$(this).addClass('inset-shadow');})
	$('a.color-button, .block-navigation a, a.dark-button, a.light-button').bind('mouseup', function() {$(this).removeClass('inset-shadow');})
	
	/*	.feature	*/
	
	$('.feature p:last-child').css('margin-bottom','0px');
	
	/*	block navigation	*/
	
	$('.block-navigation a').click(function(e) { e.preventDefault(); });
	
	/*	project	*/
	
	resizeHomeProjectsCarousel();
	$('.project-links').wrapInner('<div class="sub"></div>');
	$('.project').each(function() {
		$(this).hover(function() {
			var $img = $(this).find('img');
			$(this).find('.project-title').stop(true, true).animate({'height': 41});
			$(this).find('.project-links').stop(true, true).animate({'height': $img.height() - 41})
		}, function() {
			$(this).find('.project-title').animate({'height': 0});
			$(this).find('.project-links').animate({'height': 0})
		}); 
	});
	$('.single-portfolio-images .flex-direction-nav li a.flex-next').html('<i class="icon-circle-arrow-right"></i>');
	$('.home-portfolio .jcarousel-skin-tango .jcarousel-next-horizontal, .home-portfolio .jcarousel-skin-tango .jcarousel-prev-horizontal').hover(
		function() {
			$(this).addClass('jcarousel-hover');
		}, function() {
			$(this).removeClass('jcarousel-hover');
	});
	$('.related-projects .project:last-child').css('margin-bottom','0px');
	$('.home-portfolio .jcarousel-skin-tango .jcarousel-next-horizontal, .home-portfolio .jcarousel-skin-tango .jcarousel-prev-horizontal').wrapAll('<div class="home-portfolio-nav-wrapper"></div>');
	$('.home-portfolio .jcarousel-skin-tango .jcarousel-clip-horizontal').height(getTestimonialsMaxH());
	$('.home-portfolio .jcarousel-skin-tango .jcarousel-next-horizontal, .home-portfolio .jcarousel-skin-tango .jcarousel-prev-horizontal').bind('mousedown', function() { $(this).addClass('jcarousel-pressed'); });
	$('.home-portfolio .jcarousel-skin-tango .jcarousel-next-horizontal, .home-portfolio .jcarousel-skin-tango .jcarousel-prev-horizontal').bind('mouseup', function() { $(this).removeClass('jcarousel-pressed'); });
	$('.home-portfolio .jcarousel-skin-tango .jcarousel-next-horizontal').html('<i class="icon-chevron-right"></i>');
	$('.home-portfolio .jcarousel-skin-tango .jcarousel-prev-horizontal').html('<i class="icon-chevron-left"></i>');

	/*	client-logo-list	*/

	resizeClientsCarousel();
	$('.clients li img').fadeTo(0, 0.3).hover(
		function() {
			$(this).fadeTo(0, 1);
		}, function() {
			$(this).fadeTo(0, 0.3);
	});
	$('.clients .jcarousel-skin-tango .jcarousel-next-horizontal, .clients .jcarousel-skin-tango .jcarousel-prev-horizontal').wrapAll('<div class="clients-nav-wrapper"></div>');
	$('.clients .jcarousel-skin-tango .jcarousel-next-horizontal, .clients .jcarousel-skin-tango .jcarousel-prev-horizontal').hover(
		function() {
			$(this).addClass('jcarousel-hover');
		}, function() {
			$(this).removeClass('jcarousel-hover');
	});
	$('.clients .jcarousel-skin-tango .jcarousel-next-horizontal, .clients .jcarousel-skin-tango .jcarousel-prev-horizontal').bind('mousedown', function() { $(this).addClass('jcarousel-pressed'); });
	$('.clients .jcarousel-skin-tango .jcarousel-next-horizontal, .clients .jcarousel-skin-tango .jcarousel-prev-horizontal').bind('mouseup', function() { $(this).removeClass('jcarousel-pressed'); });
	$('.clients .jcarousel-skin-tango .jcarousel-next-horizontal').html('<i class="icon-chevron-right"></i>');
	$('.clients .jcarousel-skin-tango .jcarousel-prev-horizontal').html('<i class="icon-chevron-left"></i>');
	$('.jcarousel-item-undefined, .jcarousel-item-NaN', '.clients').detach().remove();
	
	/*	testimonials	*/
	
	$('<div class="arrow"></div>').insertBefore('.content', '.testimonials');
	jQuery('#testimonialsCarousel').jcarousel({
		wrap: 'circular',
		scroll: 1,
		visible: 1
	});
	$('.testimonials-wrapper .jcarousel-skin-tango .jcarousel-next-horizontal, .testimonials-wrapper .jcarousel-skin-tango .jcarousel-prev-horizontal').hover(
		function() {
			$(this).addClass('jcarousel-hover');
		}, function() {
			$(this).removeClass('jcarousel-hover');
	});
	$('.testimonials-wrapper .jcarousel-skin-tango .jcarousel-next-horizontal, .testimonials-wrapper .jcarousel-skin-tango .jcarousel-prev-horizontal').wrapAll('<div class="testimonials-wrapper-nav-wrapper"></div>');
	$('.testimonials-wrapper .jcarousel-skin-tango .jcarousel-clip-horizontal').height(getTestimonialsMaxH());
	$('.testimonials-wrapper .jcarousel-skin-tango .jcarousel-next-horizontal, .testimonials-wrapper .jcarousel-skin-tango .jcarousel-prev-horizontal').bind('mousedown', function() { $(this).addClass('jcarousel-pressed'); });
	$('.testimonials-wrapper .jcarousel-skin-tango .jcarousel-next-horizontal, .testimonials-wrapper .jcarousel-skin-tango .jcarousel-prev-horizontal').bind('mouseup', function() { $(this).removeClass('jcarousel-pressed'); });
	$('.testimonials-wrapper .jcarousel-skin-tango .jcarousel-next-horizontal').html('<i class="icon-chevron-right"></i>');
	$('.testimonials-wrapper .jcarousel-skin-tango .jcarousel-prev-horizontal').html('<i class="icon-chevron-left"></i>');
	
	
	/*	twitter-nav	*/
	
	$('.twitter-block p.tweet').eq(0).show();
	var tq = $('.twitter-block p.tweet').length,
		tcurrent = 0;
	$('#twitter-nav a.block-navigation-right').click(function() {
		if (tcurrent < (tq - 1)) {
			tcurrent++;
			$('.twitter-block p.tweet').hide();
			$('.twitter-block p.tweet').eq(tcurrent).show();
		}
	});
	$('#twitter-nav a.block-navigation-left').click(function() {
		if (tcurrent > 0 ) {
			tcurrent--;
			$('.twitter-block p.tweet').hide();
			$('.twitter-block p.tweet').eq(tcurrent).show();
		}
	});
	
	/*	skills	*/
	
	$('.skill').each(function() {
		var skill = $(this).find('span').attr('data-skill');
		$(this).find('span').wrap('<div class="span-wrapper"></div>').animate({'width': skill}, 1000).parent().parent().hover(function() {
		$(this).find('span').css('width','auto').stop(true, true).animate({'width':skill}, 1000);
		}, function() {
		});
	});
	
	$('.feature').eq($('.feature').length - 1).css('margin-bottom','0px');
	
	/*	team	*/
	
	$('<div class="arrow"></div>').appendTo('.team figure');
	$('.team figure .arrow').each(function() {
		$(this).css('left', ($(this).parent().width()/2 - 13) + 'px');
	});
	var l = $('.team').length;
	$('.team').eq(l-1).css('margin-bottom','0px').css('border','0px solid #f00');
	
	/*	ul list styles	*/
	
	$('.ul-style-1').find('> li').each(function() {
		$('<i class="icon-star"></i>').prependTo($(this));
	});
	$('.ul-style-2').find('> li').each(function() {
		$('<i class="icon-ok-sign"></i>').prependTo($(this));
	});
	$('.ul-style-3').find('> li').each(function() {
		$('<i class="icon-circle-arrow-right"></i>').prependTo($(this));
	});
	$('.ul-style-4').find('> li').each(function() {
		$('<i class="icon-check"></i>').prependTo($(this));
	});
	
	/*	pricing tables	*/
	
	$('.pr-table-1').eq($('.pr-table-1').length - 1).css('margin-bottom','0px');
	$('.pr-table-3').eq($('.pr-table-3').length - 1).css('margin-bottom','0px');

	$('.pr-table-2 tbody tr').each(function() {
		$(this).find('> td').eq(0).addClass('features');
	});
	$('.pr-table-2 thead tr td').eq(0).css({'padding-left':'20px', 'text-align':'left'});
	$('.pr-table-2 tbody tr').hover(
		function() {
			$(this).find('> td:not(.features)').css('background-color','#eee');
		}, function() {
			$(this).find('> td:not(.features)').css('background-color','#fff');
	});
	if ($('body').width() < 768) {
		$('.pr-table-2-wrapper').css('overflow','scroll');
	} else {
		$('.pr-table-2-wrapper').css('overflow','visible');
	}
	
	/*	widget	*/
	
	$('.sidebar-widget').eq($('.sidebar-widget').length - 1).css('margin-bottom','0px');
	$('.sidebar-post', '.tab-item').eq($('.sidebar-post', '.tab-item').length - 1).css('margin-bottom','0px');
	
	/*	widget-categories	*/
	
	$('<i class="icon-folder-open"></i>').prependTo('.widget-categories ul li a');
	
	/*	typography fix	*/
	
	$('.block-header-bg', '.page-content').css('margin-top','40px').eq(0).css('margin-top','0px');
	$('[class*="span"]').each(function() {
	});
	
	/*	ad-accordion	*/
	
	$('.ad-accordion article').each(function() {
		var $ar = $(this);
		if (!$ar.parent().hasClass('ad-toggle')) {
			$ar.find('header').click(function() { $(this).toggleClass('open').parent().find('p').slideToggle(); });
		} else {
			$ar.find('header').click(function() {
				if ($(this).hasClass('open')) {
					$(this).removeClass('open').parent().find('p').slideUp();
				} else {
					$('.ad-accordion article').find('header').removeClass('open').end().find('p').slideUp();
					$(this).addClass('open').parent().find('p').slideDown();
				}
			});
		}
	});
	
	
	/*	ad-tabs	*/
	
	$('<div class="arrow"></div>').prependTo('.ad-tabs header span.active');
	$('.ad-tabs .tab-item').eq(0).show().end().parent().find('header span').eq(0).addClass('active').end().click(function() {
			$('.ad-tabs header span').removeClass('active').parent().parent().find('.tab-item').hide().eq($(this).index()).show();
			$(this).addClass('active');
			$('<div class="arrow"></div>').prependTo($(this));
	});
	
	/*	block-404	*/
	
	$('.block-404').css({'margin-top':'-' + ($('.block-404').height()/2) + 'px','margin-left':'-' + ($('.block-404').width()/2) + 'px'});
	
	
	/*	testimonials 2 fix	*/
	
	$('<i class="icon-angle-left"><i>').prependTo('.testimonials-2 .jcarousel-prev');
	$('<i class="icon-angle-right"><i>').prependTo('.testimonials-2 .jcarousel-next');
	$('.testimonials-2 .jcarousel-clip-horizontal').height(getMycarouselMaxH());
	jQuery('#testimonialsCarousel2').jcarousel({
		scroll: 1,
		visible: 1
	});

	$('.testimonials-2 .jcarousel-skin-tango .jcarousel-next-horizontal, .testimonials-2 .jcarousel-skin-tango .jcarousel-prev-horizontal').wrapAll('<div class="testimonials-2-nav-wrapper"></div>');
	
	/*	form	*/
	
	var $f = $('input[type=text], input[type=email], input[type=password], textarea, #top-search-form-2, #contactform fieldset div input[type=text], #contactform fieldset div input[type=email], #contactform fieldset div input[type=tel], #contactform fieldset div input[type=url], #contactform fieldset div select, #contactform fieldset div textarea');
	$f.bind('focus', function() { $(this).addClass('focused'); });
	$f.bind('blur', function() { $(this).removeClass('focused'); });
	$('.widget-search form input[type=text]').bind('focus', function() { $(this).closest('form').addClass('focused'); });
	$('.widget-search form input[type=text]').bind('blur', function() { $(this).closest('form').removeClass('focused'); });
	
	/*	bootstrap caroulsel	*/
	
	$('.carousel-control').html('<i class="icon-chevron-left"></i>');
	$('.carousel-control + .right').html('<i class="icon-chevron-right"></i>');

	/*	sliders fix	*/
	
	$('.slider1 .flexslider ul.slides li .container').css('margin-left', '-' + $('.slider1 .flexslider ul.slides li .container').width()/2 + 'px');
	
	/*	portfolio sorting	*/
	
	$(document).ready(function() {
		var args = {
			selector: '.portfolio-item'
		}
		$('#portfolio-list').suonoSort(args);
	});

	/* resize window fix	*/
	
	makeResize();
	$(window).resize(makeResize);
	
});

	function resizeClientsCarousel() {
		var bw = $('body').width();
		if (bw < 480) {
			jQuery('#clientsCarousel').jcarousel({
				wrap: 'circular',
				scroll: 1,
				visible: 1
			});
		} else if ((bw <= 767) && (bw >= 480)) {
			jQuery('#clientsCarousel').jcarousel({
				wrap: 'circular',
				scroll: 2,
				visible: 2
			});
		} else if ((bw > 767) && (bw <= 979)) {
			jQuery('#clientsCarousel').jcarousel({
				wrap: 'circular',
				scroll: 2,
				visible: 5
			});
		} else if (bw > 979) {
			jQuery('#clientsCarousel').jcarousel({
				wrap: 'circular',
				scroll: 2,
				visible: 5
			});
		}
	}

	function resizeHomeProjectsCarousel() {
		var bw = $('body').width();
		if (bw < 480) {
			jQuery('#homeProjectsCarousel').jcarousel({
				wrap: 'circular',
				scroll: 1,
				visible: 1
			});
		} else if ((bw <= 767) && (bw >= 480)) {
			jQuery('#homeProjectsCarousel').jcarousel({
				wrap: 'circular',
				scroll: 1,
				visible: 1
			});
		} else if ((bw > 767) && (bw <= 979)) {
			jQuery('#homeProjectsCarousel').jcarousel({
				wrap: 'circular',
				scroll: 1,
				visible: 4
			});
		} else if (bw > 979) {
			jQuery('#homeProjectsCarousel').jcarousel({
				wrap: 'circular',
				scroll: 1,
				visible: 4
			});
		}
	}

	function getMycarouselMaxH () {
		var mycarouselMaxH = 0;
		$('#testimonialsCarousel2 li.testimonials-2-item').each(function() {
			if ($(this).height() > mycarouselMaxH) mycarouselMaxH = $(this).height();
		});
		return(mycarouselMaxH);
	}
	
	function getTestimonialsMaxH () {
		var testimonialsMaxH = 0;
		$('.testimonials-wrapper .testimonials').each(function() {
			if ($(this).height() > testimonialsMaxH) testimonialsMaxH = $(this).height();
		});
		return(testimonialsMaxH);
	}
	
	function getHomePortfolioMaxH () {
		var homePortfolioMaxH = 0;
		$('.home-portfolio .project').each(function() {
			if ($(this).height() > homePortfolioMaxH) homePortfolioMaxH = $(this).height();
		});
		return(homePortfolioMaxH);
	}
	
	function makeIntro() {
		var $intro = $('.intro-img'),
			introW = $intro.width(),
			$introImg = $intro.find('> img'),
			introImgW = $introImg.attr('width'),
			introImgH = $introImg.attr('height'),
			$p = $intro.find('> p'),
			w = ($('body').width() > 480) ? true : false;
		$intro.height(introImgH).css('border','1px solid #f00;');
		if (w) {
			$introImg.css({'margin-left': '-' + introImgW/2 + 'px', 'left':'50%'});
		} else {
			$introImg.css({'left':'0px', 'margin-left':'0px'});
		}
		$p.each(function() {
			$(this).css('margin-left', '-' + ($(this).width() + 40)/2 + 'px').css({'left': '50%', 'top': (introImgH - $(this).height())/2 + 'px'});
		});
		$intro.height(introImgH);
	}
	
	function makeResize() {
		makeIntro();
		resizeClientsCarousel();
		resizeHomeProjectsCarousel();
		$('.team figure .arrow').each(function() {
			$(this).css('left', ($(this).parent().width()/2 - 13) + 'px');
		});
		if ($('body').width() < 768) {
			$('.pr-table-2-wrapper').css('overflow','scroll');
		} else {
			$('.pr-table-2-wrapper').css('overflow','visible');
		}
		$('.block-404').css({'margin-top':'-' + ($('.block-404').height()/2) + 'px','margin-left':'-' + ($('.block-404').width()/2) + 'px'});
		$('.slider1 .flexslider ul.slides li .container').css('margin-left', '-' + $('.slider1 .flexslider ul.slides li .container').width()/2 + 'px');
		$('.testimonials-2 .jcarousel-clip-horizontal').height(getMycarouselMaxH());
		$('.testimonials-wrapper .jcarousel-skin-tango .jcarousel-clip-horizontal').height(getTestimonialsMaxH());
		$('.home-portfolio .jcarousel-skin-tango .jcarousel-clip-horizontal').height(getHomePortfolioMaxH());
		$('.jcarousel-item-undefined, .jcarousel-item-NaN', '.clients').detach().remove();
	}

(function( $ ){

	$.fn.suonoSort = function( options ) {
		
		var $this = $(this),
			$blocks = $this.find(options['selector']),
			qty = $blocks.length,
			selector = options['selector'],
			selected = [],
			$filters = $('.portfolio-sorting', $this).find('a[data-filter-val]');
			
		$filters.click(function(e) {
			e.preventDefault();
			$filters.each(function() { $(this).removeClass('color-button'); });
			var filter = $(this).addClass('color-button').attr('data-filter-val');
			$blocks.hide().each(function() {
				if ($(this).hasClass(filter)) {
					$(this).show();
				}
			});
			if (filter == '*') {
				$blocks.show();
			}
		});

	};	

})( jQuery );
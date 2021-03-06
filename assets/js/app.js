/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import '../css/app.scss';
import Typed from 'typed.js';

require('@fortawesome/fontawesome-free/css/all.min.css');
require('@fortawesome/fontawesome-free/js/all.js');
require('../css/app.scss');

const $ = require('jquery');

global.$ = global.jQuery = $;

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

(function ($) {
	"use strict";
	var nav = $('nav');
	var navHeight = nav.outerHeight();

	$('.navbar-toggler').on('click', function () {
		if (!$('#mainNav').hasClass('navbar-reduce')) {
			$('#mainNav').addClass('navbar-reduce');
		}
	})

	// Preloader
	$(window).on('load', function () {
		if ($('#preloader').length) {
			$('#preloader').delay(100).fadeOut('slow', function () {
				$(this).remove();
			});
		}
	});

	// Back to top button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('.back-to-top').fadeIn('slow');
		} else {
			$('.back-to-top').fadeOut('slow');
		}
	});
	$('.back-to-top').click(function () {
		$('html, body').animate({
			scrollTop: 0
		}, 1500, 'easeInOutExpo');
		return false;
	});

	/*--/ Star ScrollTop /--*/
	$('.scrolltop-mf').on("click", function () {
		$('html, body').animate({
			scrollTop: 0
		}, 1000);
	});


	/*--/ Star Scrolling nav /--*/
	$('a.js-scroll').click(function () {
		$('html, body').animate({
			scrollTop: $($.attr(this, 'href')).offset().top - 92
		}, 1000);
		return false;
	});

	// Closes responsive menu when a scroll trigger link is clicked
	$('.js-scroll').on("click", function () {
		$('.navbar-collapse').collapse('hide');
	});
	/*--/ End Scrolling nav /--*/

	/*--/ Navbar Menu Reduce /--*/
	$(window).trigger('scroll');
	$(window).on('scroll', function () {
		var pixels = 50;
		var top = 1200;
		if ($(window).scrollTop() > pixels) {
			$('.navbar-expand-md').addClass('navbar-reduce');
			$('.navbar-expand-md').removeClass('navbar-trans');
		} else {
			$('.navbar-expand-md').addClass('navbar-trans');
			$('.navbar-expand-md').removeClass('navbar-reduce');
		}
		if ($(window).scrollTop() > top) {
			$('.scrolltop-mf').fadeIn(1000, "easeInOutExpo");
		} else {
			$('.scrolltop-mf').fadeOut(1000, "easeInOutExpo");
		}
	});

	/*--/ Star Typed /--*/
	if ($('.text-slider').length == 1) {
		var typed_strings = $('.text-slider-items').text();
		var typed = new Typed('.text-slider', {
			strings: typed_strings.split(','),
			typeSpeed: 80,
			loop: true,
			backDelay: 1100,
			backSpeed: 30
		});
	}

	/*--/ ScrollMagix TweenMax /--*/
	var controller = new ScrollMagic.Controller();

	// loop through all elements
	$('.animate-box').each(function () {

		// build a tween
		var tween = TweenMax.from($(this), 0.3, {
			autoAlpha: 0,
			scale: 0.5,
			y: '+=30',
			ease: Linear.easeNone
		});

		// build a scene
		var scene = new ScrollMagic.Scene({
				triggerElement: this,
				triggerHook: 0.9
			})
			.setTween(tween) // trigger a TweenMax.to tween
			.addTo(controller);
	});

	//Alert messages 
	document.addEventListener('submit', function (event) {
		if (document.getElementById("contact")) {
			location.href = "#contact"
		}
	});

	window.setTimeout(function () {
		$(".alert").fadeTo(1000, 0).slideUp(1000, function () {
			$(this).remove();
		});
	}, 5000);


})(jQuery);
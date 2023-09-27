$(document).ready(function(){
	$('#musicPlayer').prop("volume", 0.3);
	$(window).scroll(function () {	
		$(this).scrollTop() > 50 ? $('#back-to-top').fadeIn() : $('#back-to-top').fadeOut();
		$(this).scrollTop() > 20 ? $("#navbar").css({"padding":"0px 16px", "opacity":"0.9"}).add(".navbar-brand").css({"font-size":"12px"}) : $("#navbar").css({"padding":"0px 16px", "opacity":"1.0"}).add(".navbar-brand").css({"font-size":"1.171875rem"});
	});

	$('#back-to-top').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 400);
		return false;
	});

	TweenMax.to("#tiger", 2, {scale:0.6});
	TweenMax.to("#tiger", 1, {boxShadow:"5px 5px 15px 5px rgba(123,123,123)",repeat:-1,yoyo:true});
	const tl = gsap.timeline({defaults: { ease: "power1.out" }});
	tl.to(".hide", {y:"0%", duration: 1});
	
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	});

	// console.log("Cookies: " + navigator.cookieEnabled);
	// console.log("Browser Language: " + navigator.browserLanguage);
	// console.log("Language: " + navigator.language);
	// console.log("Platform: " + navigator.platform);
	// console.log("Connection Speed: " + navigator.connectionSpeed);
	// console.log("User Agent: " + navigator.userAgent);
	// console.log("Webdriver: " + navigator.webdriver);
	// console.log("Geolocation: " + navigator.geolocation);
});
$(document).ready(function(){
	// pushes .active in main nav menu
	$("a[href^='"+this_url+"']").parent().addClass("active");

	// extract original image dimensions and append in html
	var imgW = $('.panel-body img').width();
	var imgH = $('.panel-body img').height();
	$('.img-dimensions').append(imgW + 'x' + imgH + 'px');
	// extract resized image dimensions and append in html
	var boxWxs = $('.img-outer-min-1').outerWidth();
	var boxHxs = $('.img-outer-min-1').outerHeight();
	var boxWsm = $('.img-outer-min-2').outerWidth();
	var boxHsm = $('.img-outer-min-2').outerHeight();
	var boxWmd = $('.img-outer-min-3').outerWidth();
	var boxHmd = $('.img-outer-min-3').outerHeight();
	$('.img-min-1').append(boxWxs + 'x' + boxHxs + 'px');
	$('.img-min-2').append(boxWsm + 'x' + boxHsm + 'px');
	$('.img-min-3').append(boxWmd + 'x' + boxHmd + 'px');

	// check width and push to console
	// console.log("Outer width of div: " + $(".img-outer-min-1").outerWidth());

	// Oblaci
	// add .fade class
	$( '#pas, #jez, #puz' ).attr( 'class', 'fade' );
	// add .oblak class
	$( '#oblak-pas, #oblak-jez, #oblak-puz' ).attr( 'class', 'oblak' );

	// wrap animals in anchors
	// $( '#pas' ).html('<a xlink:href="#">'+ $( '#pas' ).html() +'</a>')

	// Ptice
	// wingsi
	$( '#wing_x5F_left, #wing_x5F_left_1_, #wing_x5F_left_2_' ).attr( 'class', 'bird_wing_left' );
	$( '#wing_x5F_right, #wing_x5F_right_1_, #wing_x5F_right_2_' ).attr( 'class', 'bird_wing_right' );

	// JezPuz
	$( '#jez_x5F_kotac_x5F_l, #jez_x5F_kotac_x5F_r, #puz_x5F_kotac_x5F_l, #puz_x5F_kotac_x5F_r' ).attr( 'class', 'kotac' )

});
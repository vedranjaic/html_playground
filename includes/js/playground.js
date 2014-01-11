$(document).ready(function(){
	// pushes .active in menu
	$("a[href^='"+this_url+"']").parent().addClass("active")

	// extract original image dimensions and append in html
	var imgW = $('.panel-body img').width();
	var imgH = $('.panel-body img').height();
	$('.img-dimensions').append(imgW + 'x' + imgH + 'px');
	// extract resized image dimensions and append in html
	var boxW = $('.img-outer-min-1').outerWidth();
	var boxH = $('.img-outer-min-1').outerHeight();
	var boxW = $('.img-outer-min-2').outerWidth();
	var boxH = $('.img-outer-min-2').outerHeight();
	var boxW = $('.img-outer-min-3').outerWidth();
	var boxH = $('.img-outer-min-3').outerHeight();
	$('.img-min-1').append(boxW + 'x' + boxH + 'px');
	$('.img-min-2').append(boxW + 'x' + boxH + 'px');
	$('.img-min-3').append(boxW + 'x' + boxH + 'px');

	// check width and push to console
	// console.log("Outer width of div: " + $(".img-outer-min-1").outerWidth());
});
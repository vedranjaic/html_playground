$(document).ready(function(){
	// pushes .active in menu
	$("a[href^='"+this_url+"']").parent().addClass("active")

	// image sizes
	var imgW = $('.panel-body img').width();
	var imgH = $('.panel-body img').height();
	$('.img-dimensions').append(imgW + 'x' + imgH + 'px');

});
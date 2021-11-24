$(function() {

	$('.photo-gallery ul li').click(function() {
		var src = $(this).data('src');
		var $gallery = $(this).closest('.photo-gallery');
		$gallery.find('.current-photo img').attr('src', src);
		$gallery.find('.current-photo img').attr('data-zoom-image', src);
		
		var zoomConfig = {
			zoomType: "inner",
			cursor: "crosshair",
			zoomWindowFadeIn: 500,
			zoomWindowFadeOut: 750
		   };
		$('.zoomContainer').remove();
		$('.zoom_01').removeData('elevateZoom');
		$('.zoom_01').removeData('zoomImage');
        $('.zoom_01').elevateZoom(zoomConfig);//initialise zoom
	});

	$('.photo-gallery').each(function() {
		$(this).find('li')[0].click();
	});

});
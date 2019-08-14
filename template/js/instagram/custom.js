$(document).ready(function() {
    
    var feed = new Instafeed({
		get: 'user',
		userId: '4229764297',
		accessToken: '4229764297.9b35ef5.48036f186ec249d3ae095440878959a9',
        target: 'instafeed',
        sortBy: 'most-recent',
		resolution: 'low_resolution',
		template: '<li class="col-md-3 col-sm-6 col-xs-12 isotope-item instagram"><strong>From API Instagram</strong><div class="image-gallery-item"><div class="image-gallery-item"><span class="thumb-info thumb-info-hide-wrapper-bg"><span class="thumb-info-wrapper"><a href="{{link}}" target="_new" class="lightbox-portfolio"><img src="{{image}}" class="img-responsive" alt="" /></a><span class="thumb-info-caption"><span class="thumb-info-caption-text">{{caption}}</span></span></span></span></div></div></li>'
	});
	feed.run();
});
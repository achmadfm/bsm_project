$(document).ready(function() {
    
	var feed = new Instafeed({
		get: 'user',
		userId: '4229764297',
		accessToken: '4229764297.9b35ef5.48036f186ec249d3ae095440878959a9',
		target: 'instafeed',
		sortBy: 'most-recent',
		limit:9,
		resolution: 'thumbnail',
		template:'<li><a href="{{link}}" target="_new" ><span class="thumbnail mb-0"><img src="{{image}}" width="70" height="70" /></span></a></li>',
	});
	feed.run();
});
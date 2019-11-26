$(document).ready(function() {
    
	var feed = new Instafeed({
		get: 'user',
		userId: '5585679322',
		accessToken: '5585679322.1be78b3.0a7ccf4dcec54668b951b97783f9e75a',
		target: 'instafeedsabhome',
		sortBy: 'most-recent',
		limit:9,
		resolution: 'thumbnail',
		template:'<li><a href="{{link}}" target="_new" ><span class="thumbnail mb-0"><img src="{{image}}" width="70" height="70" /></span></a></li>',
	});
	feed.run();
});
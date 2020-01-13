$(document).ready(function() {
    
	var feed = new Instafeed({
		get: 'user',
		userId: '4229764297',
		accessToken: '4229764297.9b35ef5.48036f186ec249d3ae095440878959a9',
		target: 'instafeed',
		sortBy: 'most-recent',
		limit:9,
		resolution: 'thumbnail',
		template:'<li><a href="{{link}}" target="_new"><span class="img-thumbnail d-block"><img class="img-fluid" width="70" height="70" src="{{image}}"></span></a><br><p><i class="fa fa-heart"></i> {{likes}}  <i class="fa fa-comment"></i> {{comments}}</p></li>',
	});
	feed.run();
});
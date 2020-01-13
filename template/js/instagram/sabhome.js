$(document).ready(function() {
    
	var feed = new Instafeed({
		get: 'user',
		userId: '5585679322',
		accessToken: '5585679322.1be78b3.0a7ccf4dcec54668b951b97783f9e75a',
		target: 'instafeedsabhome',
		limit: 9,
		sortBy: 'most-recent',
		resolution: 'thumbnail',
		template: '<li><a href="{{link}}" target="_new"><span class="img-thumbnail d-block"><img class="img-fluid" width="70" height="70" src="{{image}}"></span></a><br><p><i class="fa fa-heart"></i> {{likes}}  <i class="fa fa-comment"></i> {{comments}}</p></li>'
	});
	feed.run();
});
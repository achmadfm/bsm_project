$(document).ready(function() {
    
    var feed = new Instafeed({
		get: 'user',
		userId: '4229764297',
		accessToken: '4229764297.9b35ef5.48036f186ec249d3ae095440878959a9',
        target: 'instafeedhome',
        limit: 5,
        sortBy: 'most-recent',
		resolution: 'thumbnail',
		template: '<li><a href="{{link}}"><span class="img-thumbnail d-block"><img class="img-fluid" src="{{image}}"></span></a><br><p><i class="fa fa-heart"></i> {{likes}}  <i class="fa fa-comment"></i> {{comments}}</p></li>'
	});
	feed.run();
});
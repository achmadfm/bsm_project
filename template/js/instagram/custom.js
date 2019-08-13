$(document).ready(function() {
    
    var feed = new Instafeed({
		get: 'user',
		userId: '4229764297',
		accessToken: '4229764297.9b35ef5.48036f186ec249d3ae095440878959a9',
        target: 'instafeed',
        sortBy: 'most-recent',
		resolution: 'low_resolution',
		template: '<li><a href="{{link}}" target="_new"><img src="{{image}}" /></a></li>',
	});
	feed.run();
});
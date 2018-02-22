function twit(){	
	$.ajax({
		url: 'models/Twitter.php',
		type: 'POST',
		async: true,
		dataType: 'json',
		success: function(result) {
			$('.container').empty();				
			result.forEach(function(twit, i, result)
			{
				$('.container').prepend("<div class='row twit'><div class='col-md-12'><div class='post-title'><img src='" + twit['user']['profile_image_url'] + "'/><h3>" + twit['user']['name'] + "</h3></div><div class='post-info'><a href='" + twit['user']['url'] + "'>" + twit['user']['screen_name'] + "</a><p>" + twit['user']['description'] + "</p></div></div>");				
			});			
		}		
	});		
	//$('.container').prepend("<div class='row twit'><div class='col-md-12'><div class='post-title'><img src=''/><h3></h3></div><div class='post-info'><a href=''></a><p>1111111111</p></div></div>");				
}
twit();
setInterval('twit()', 24000);










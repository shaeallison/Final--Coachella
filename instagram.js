// JavaScript Document


//Use this url below to get your access token
//https://instagram.com/oauth/authorize/?display=touch&client_id=46e4521f5f8a47148fe8b2eff6ac45c5&redirect_uri=http://shaeallison.webfactional.com/apps/instagram&response_type=token 

//if you need a user id for yourself or someone else use:
//http://jelled.com/instagram/lookup-user-id
	
						
$(function() {
	
	var apiurl = "https://api.instagram.com/v1/tags/coachella/media/recent?access_token=20436466.46e4521.736f23b72d7948a39decdbb181d6c709&callback=?"
	var access_token = location.hash.split('=')[1];
	var html = ""
	
	
		$.ajax({
			type: "GET",
			dataType: "json",
			cache: false,
			url: apiurl,
			success: parseData
		});
		
		
		function parseData(json){
			console.log(json);
			
			$.each(json.data,function(i,data){
				html += '<a href="' + data.link + '" target="_blank"><img src ="' + data.images.low_resolution.url + '"></a>'
			});
			
			console.log(html);
			$("#results").append(html);
			
		}
		
		
		
                
               
 });
		
		
		
		
	

		

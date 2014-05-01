<head>
	
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    
<!-- Bootstrap core CSS and JS-->
<link href="bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.min.js"></script>


<script src="http://codeorigin.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
<script src="instagram.js" type="text/javascript"></script>

<!-- slider links -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="responsiveslides.min.js"></script>

<!-- custom stylesheet -->
<link href="css/styles.css" rel="stylesheet">
	
<!-- bootstrap stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<script href="bootstrap.min.js"></script>

<!-- tumblr JS -->
<script href="tumblr.js"></script>

<script src="jquery.tweet-linkify.js"></script>

	
<title>Coachella 2014</title>

</head>

<body class="body">


<div class="maintitle">
    <a href="#"><img class="coachella" src="photos/TitlePNG.png"></a>
<img class="topphoto" src="photos/background.png">
    
</div>

<br>
<br>
    


<div class="container">
    

    
<div class="navbar-container1">
    <a href="#instagram"><img class="circles" src="photos/photos.png"></a><a href="#feed"><img class="circles" src="photos/feeds.png"></a><a href="#camp"><img class="circles" src="photos/maps.png"></a><a href="#lineup"><img class="circles" src="photos/lineup.png"></a>
</div>

<br>
<br>
<!--     
<div class="row">
	<div class="col-md-12">
	    <div class="infobox">
	    <p class="titlefont"></p>
<!-- 
<ul class="rslides">
  <li><img src="photos/one.jpg"></li>
  <li><img src="photos/two.jpg" alt=""></li>
  <li><img src="photos/three.jpg" alt=""></li>
  <li><img src="photos/four.jpg" alt=""></li>
  <li><img src="photos/five.jpg" alt=""></li>
</ul>

<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>

	</div>
	    <br>
</div>
</div>

<br>
-->


<div class="row">
	<div class="col-md-12">
<div class="box">
    <div class="titlefont" id="instagram">Instagram<img class="camera" src="photos/instagram.png"></div>
<div  id="results"></div>
</div>
	</div>
</div>

<br>
<br>

<div class="row">
<div class="col-md-12">
<div class="containertwitter" id="feed">
	<div class="titlefont">Twitter Feed<img class="bird" src="photos/twitter.png"><br>
	</div>

		<script>
		function pageReady(){
			console.log("pageReady()");
			$('p.tweet').tweetLinkify();
		};
		</script>
	

	
	
<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "382740231-uD917Mrh5Ia2r8AgEDVWPRz0LP0hJW83trhTg3Bq",
    'oauth_access_token_secret' => "6Lw9XeEoniiB9kAU0ybLlIKUw61u5Sih6dQAanXEuKCMq",
    'consumer_key' => "JHrGsqhxHVh8881WapWtkh3Aw",
    'consumer_secret' => "3dLe25DPqXiOttxyCWaBt2iRoIT6fZzJIa1abqwQAu15vnS9Hx"
);

/** Perform a GET request and echo the response **/
/** Note: Set the GET field BEFORE calling buildOauth(); **/
$url = 'https://api.twitter.com/1.1/search/tweets.json';
$getfield = '?q=%23coachella&count=20';

$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
/** echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(); **/

$string = json_decode($twitter->setGetfield($getfield)
			->buildOauth($url, $requestMethod)
             ->performRequest(), $assoc = TRUE);

foreach($string['statuses'] as $items)
	{
		$tweetText = $items['text'];
		$users = $items['user'];
		
	    
		echo "<p class='tweet'> @" . $users['screen_name'] . ": ";
		echo "" . $tweetText . "</p>";
		
		echo "<p class='time'>When: " . $items['created_at'] . "<p/>";
		echo "<hr/>";
	}
echo '<script>pageReady();</script>';



?>
		
</div>	
</div>
</div>

<br>
<br>
    


<div class="titlefont mapbox" id="camp">OFF-SITE CAMPING
<div id="map-canvas"></div></div>

<br>



<div class="lineupbox" id="lineup"><div class="infobox"><span class="titlefont">2014 Lineup</span>

<div class="row">
<div class="col-md-4">
    <img class="crowd" src="photos/outkast.jpg">
</div>
<div class="col-md-4">
    <img class="crowd" src="photos/arcade.jpg">
</div>
    <div class="col-md-4">
<!-- spotify playlist -->
<iframe class="playlist" src="https://embed.spotify.com/?uri=https://play.spotify.com/user/coachella/playlist/6U28LZWt0mpgKNqwJMtjAS" width="100%" height="60%" frameborder="0" allowtransparency="true"></iframe>
</div>
</div>
<br>
    <p class="lineupinfo">Coachella 2014 will take place over two weekends, with the first half set for April 11th-13th and the second scheduled for April 18th-20th. Check out some of the 2014 lineup and listen to some of their music below! For the complete lineup, please visit the <a href="http://www.coachella.com/lineup/">Coachella Website</a>.</p>
<br>

<!-- weekend 1 nav-tabs -->
<ul class="nav nav-tabs linetab" id="myTab">
  <li class="active"><a href="#home2" data-toggle="tab">Friday 4/11 & 4/18</a></li>
  <li><a href="#profile2" data-toggle="tab">Saturday 4/12 & 4/19</a></li>
  <li><a href="#messages2" data-toggle="tab">Sunday 4/13 & 4/20</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="home2">
	<p class="titlefont artists">OutKast </p> <img class="band" src="photos/outkast3.jpg"><img class="band" src="photos/outkast2.jpg"><iframe class="bandplay" src="https://embed.spotify.com/?uri=spotify:track:6bUNEbXT7HovLW6BgPCBsb" width="100%" height="30%" frameborder="0" allowtransparency="true"></iframe>
	<p class="titlefont artists">Broken Bells</p> <img class="band" src="photos/bells.jpg"><img class="band" src="photos/bells2.jpg"><iframe class="bandplay" src="https://embed.spotify.com/?uri=spotify:track:5gPrOspTrxMNKKL44h40O2" width="100%" height="30%" frameborder="0" allowtransparency="true"></iframe>
	<p class="titlefont artists">Zedd </p> <img class="band" src="photos/zedd.jpg"><img class="band" src="photos/zedd2.jpg"><iframe class="bandplay" src="https://embed.spotify.com/?uri=spotify:track:60wwxj6Dd9NJlirf84wr2c" width="100%" height="30%" frameborder="0" allowtransparency="true"></iframe>
  </div>
  <div class="tab-pane" id="profile2">
    <p class="titlefont artists">Muse </p> <img class="band" src="photos/outkast3.jpg"><img class="band" src="photos/outkast2.jpg"><iframe class="bandplay" src="https://embed.spotify.com/?uri=spotify:track:0c4IEciLCDdXEhhKxj4ThA" width="100%" height="30%" frameborder="0" allowtransparency="true"></iframe>
    <p class="titlefont artists">Skrillex</p> <img class="band" src="photos/bells.jpg"><img class="band" src="photos/bells2.jpg"><iframe class="bandplay" src="https://embed.spotify.com/?uri=spotify:track:5gPrOspTrxMNKKL44h40O2" width="100%" height="30%" frameborder="0" allowtransparency="true"></iframe>
    <p class="titlefont artists">Foster the People </p> <img class="band" src="photos/zedd.jpg"><img class="band" src="photos/zedd2.jpg"><iframe class="bandplay" src="https://embed.spotify.com/?uri=spotify:track:60wwxj6Dd9NJlirf84wr2c" width="100%" height="30%" frameborder="0" allowtransparency="true"></iframe>
  </div>

  <div class="tab-pane" id="messages2">
    <p class="titlefont artists">Arcade Fire </p> <img class="band" src="photos/outkast3.jpg"><img class="band" src="photos/outkast2.jpg"><iframe class="bandplay" src="https://embed.spotify.com/?uri=spotify:track:5gPrOspTrxMNKKL44h40O2" width="100%" height="30%" frameborder="0" allowtransparency="true"></iframe>
    <p class="titlefont artists">Calvin Harris </p> <img class="band" src="photos/bells.jpg"><img class="band" src="photos/bells2.jpg"><iframe class="bandplay" src="https://embed.spotify.com/?uri=spotify:track:5gPrOspTrxMNKKL44h40O2" width="100%" height="30%" frameborder="0" allowtransparency="true"></iframe>
    <p class="titlefont artists">Lana Del Rey </p> <img class="band" src="photos/zedd.jpg"><img class="band" src="photos/zedd2.jpg"><iframe class="bandplay" src="https://embed.spotify.com/?uri=spotify:track:60wwxj6Dd9NJlirf84wr2c" width="100%" height="30%" frameborder="0" allowtransparency="true"></iframe> 
  </div>

</div>

<script>
  
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
  
</script>

<br>


<!-- end of lineups -->
</div>
    

	
<div><h5 style="text-align:center">Design by<a href="http://shaeallison.com" target="_blank"> Shae Allison</a></h5></div>

<!-- end of container1 -->
</div>
</div>

<br>




</body>

<style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0px }
      #map-canvas { height: 48% }
      #map-canvas2 { height: 48% }
    
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtzRuvyRkVnyYcFandf38JxZs1EzphnhU&sensor=false">
    </script>
    <script type="text/javascript">
    var map,map2;
      function initialize() {
        var mapOptions = {
            center: new google.maps.LatLng(33.828216,-116.274018),
            zoom: 9,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
var contentString1 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="https://www.emeralddesert.com/" target="_blank">EMERALD DESERT RV RESORT</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 76-000 Frank Sinatra Dr. Palm Desert, CA 92211 <p><b>Phone:</b> 877.624.4140</p><p><b>Distance:</b> 14 miles</p><p><b>Notes:</b> Only 15 minutes to Festival</p> <p><b>Amenities:</b> Offers RV Camping</p>' +
      '</div>'+
      '</div>';
      
var contentString2 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="http://happytravelerrv.com/" target="_blank">HAPPY TRAVELER RV</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 211 W.Mesquite Palm Springs, CA 92264 <p><b>Phone:</b> 760.325.8518</p><p><b>Distance:</b> 24 miles</p><p><b>Amenities:</b> Offers RV Camping</p>' +
      '</div>'+
      '</div>';
      
var contentString3 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="http://www.carefreervresorts.com/rv-parks/california/indian-wells/" target="_blank">INDIAN WELLS RV RESORT</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 47-340 Jefferson Indio, CA 92201 <p><b>Phone:</b> 800.789.0895</p><p><b>Distance:</b> 5.8 miles</p><p><b>Amenities:</b> Offers RV Camping</p>' +
      '</div>'+
      '</div>';
      
var contentString4 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="http://www.indianwatersrvresort.com/Coachella_and_Stagecoach_Festivals.php" target="_blank">2014 INDIAN WATERS RV RESORT</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 47202 Jackson St. Indio, CA 92201 <p><b>Phone:</b> 760.342.8100</p><p><b>Distance:</b> 3 miles</p><p><b>Amenities:</b> Offers RV Camping, Tent Camping and Shuttle Option</p>' +
      '</div>'+
      '</div>';
      
var contentString5 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="http://www.nps.gov/jotr/planyourvisit/camping.htm" target="_blank">JOSHUA TREE NATIONAL PARK</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 74485 National Park Dr. 29 Palms, CA 92277 <p><b>Phone:</b> 760.367.5500</p><p><b>Distance:</b> 31 miles</p><p><b>Notes:</b> Has multiple Campgrounds. Call for more information.</p> <p><b>Amenities:</b> Offers RV Camping and Tent Camping</p>' +
      '</div>'+
      '</div>';
var contentString6 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="http://www.rivcoparks.org/parks/lake-cahuilla/lake-cahuilla-recreation-area-home/" target="_blank">LAKE CAHUILLA RECREATION AREA</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 58-075 Jefferson Street La Quinta CA 92253 <p><b>Phone:</b> 760.564.4712</p><p><b>Distance:</b> 5 miles</p><p><b>Notes:</b> Just minutes to Festival</p> <p><b>Amenities:</b> Offers RV Camping and Tent Camping</p>' +
      '</div>'+
      '</div>';
var contentString7 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="http://www.motorcoachcc.com/rentals.html" target="_blank">MOTORCOACH COUNTRY CLUB</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 80-501 Avenue 48 Indio, CA 92201 <p><b>Phone:</b> 760.863.0789</p><p><b>Distance:</b> 2 miles</p><p><b>Notes:</b> Only 15 minutes to Festival</p> <p><b>Amenities:</b> Offers RV Camping</p>' +
      '</div>'+
      '</div>';
var contentString8 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="http://oasispalmsrvpark.com/" target="_blank">OASIS PALMS RV PARK</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 90123 Avenue 81 Oasis, CA 92274 <p><b>Phone:</b> 760.397.1011</p><p><b>Distance:</b> 23 miles</p><p><b>Notes:</b><br> *Full hook-ups for RVs up to 50 amps<br>*Tent campsites available<br>*Lake on site<br>*Laundry, Pool, Hot Tub, Game room, Gas grills</p> <p><b>Amenities:</b> Offers RV Camping and Tent Camping</p>' +
      '</div>'+
      '</div>';
var contentString9 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="http://www.parks.ca.gov/?page_id=639" target="_blank">SALTON SEA STATE REC PARK</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 100-225 State Park Road North Shore, CA 92254 <p><b>Phone:</b> 760.393.3052</p><p><b>Distance:</b> 24 miles</p><p><b>Notes:</b> Five campgrounds with a total of 1,600 campsites</p> <p><b>Amenities:</b> Offers RV Camping and Tent Camping</p>' +
      '</div>'+
      '</div>';
var contentString10 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="http://samsfamilyspa.com/" target="_blank">SAMS FAMILY SPA</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 70-875 Dillon Rd Desert Hot Springs, CA 92241 <p><b>Phone:</b> 760.329.6457</p><p><b>Distance:</b> 28 miles</p><p><b>Notes:</b> <br>*Underground hot mineral water springs<br>*Travel trailers, tents, motor-homes, campers & fifth wheels are welcome*Motel rooms for those who prefer not to camp</p> <p><b>Amenities:</b> Offers RV Camping and Tent Camping</p>' +
      '</div>'+
      '</div>';
var contentString11 = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><a href="http://www.coachellacamping.com/" target="_blank">SHADOW HILLS RV RESORT</a></h1>'+
      '<div id="bodyContent">'+
      '<p><b>Address:</b> 40-655 Jefferson Indio, CA 92203 <p><b>Phone:</b> 760.360.4040</p><p><b>Distance:</b> 7.5 miles</p> <p><b>Amenities:</b> Offers RV Camping, Tent Camping and Shuttle Option</p>' +
      '</div>'+
      '</div>';
      
  var infowindow1 = new google.maps.InfoWindow({
      content: contentString1
  });
  var infowindow2 = new google.maps.InfoWindow({
      content: contentString2
  });
  var infowindow3 = new google.maps.InfoWindow({
      content: contentString3
  });
  var infowindow4 = new google.maps.InfoWindow({
      content: contentString4
  });
  var infowindow5 = new google.maps.InfoWindow({
      content: contentString5
  });
  var infowindow6 = new google.maps.InfoWindow({
      content: contentString6
  });
  var infowindow7 = new google.maps.InfoWindow({
      content: contentString7
  });
  var infowindow8 = new google.maps.InfoWindow({
      content: contentString8
  });
  var infowindow9 = new google.maps.InfoWindow({
      content: contentString9
  });
  var infowindow10 = new google.maps.InfoWindow({
      content: contentString10
  });
  var infowindow11 = new google.maps.InfoWindow({
      content: contentString11
  });
  
        var EMERALD = new google.maps.LatLng(33.774153,-116.362309);
	var HAPPY = new google.maps.LatLng(33.807733,-116.546768);
	var INDIAN = new google.maps.LatLng(33.718343,-116.267994);
	var WATERS = new google.maps.LatLng(33.706438,-116.213745);
	var JOSHUA = new google.maps.LatLng(34.128991,-116.037685);
	var LAKE = new google.maps.LatLng(33.606399,-116.267637);
	var COUNTRY = new google.maps.LatLng(33.70185,-116.229185);
	var OASIS = new google.maps.LatLng(33.461583,-116.093143);
	var SALTON = new google.maps.LatLng(33.404218,-115.788742);
	var FAMILY = new google.maps.LatLng(33.949341,-116.412216);
	var SHADOW = new google.maps.LatLng(33.756886,-116.269611);
	
        var marker1 = new google.maps.Marker({
            position: EMERALD,
            map: map,
            title: "EMERALD DESERT RV RESORT"
        });
	 var marker2 = new google.maps.Marker({
            position: HAPPY,
            map: map,
            title: "HAPPY TRAVELER RV"
        });
	 var marker3 = new google.maps.Marker({
            position: INDIAN,
            map: map,
            title: "INDIAN WELLS RV RESORT"
        });
	 var marker4 = new google.maps.Marker({
            position: WATERS,
            map: map,
            title: "2014 INDIAN WATERS RV RESORT"
        });
	 var marker5 = new google.maps.Marker({
            position: JOSHUA,
            map: map,
            title: "JOSHUA TREE NAT'L PARK"
        });
	 var marker6 = new google.maps.Marker({
            position: LAKE,
            map: map,
            title: "LAKE CAHUILLA RECREATION AREA"
        });
	 var marker7 = new google.maps.Marker({
            position: COUNTRY,
            map: map,
            title: "MOTORCOACH COUNTRY CLUB"
        });
	 var marker8 = new google.maps.Marker({
            position: OASIS,
            map: map,
            title: "OASIS PALMS RV PARK"
        });
	 var marker9 = new google.maps.Marker({
            position: SALTON,
            map: map,
            title: "SALTON SEA STATE REC PARK"
        });
	 var marker10 = new google.maps.Marker({
            position: FAMILY,
            map: map,
            title: "SAM'S FAMILY SPA"
        });
	 var marker11 = new google.maps.Marker({
            position: SHADOW,
            map: map,
            title: "SHADOW HILLS RV RESORT"
        });
        
        google.maps.event.addListener(marker1, 'click', function() {
	infowindow1.open(map,marker1);
	infowindow2.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
  });
	
        google.maps.event.addListener(marker2, 'click', function() {
	infowindow2.open(map,marker2);
	infowindow1.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
  });
	google.maps.event.addListener(marker3, 'click', function() {
	infowindow3.open(map,marker3);
	infowindow1.close();
	infowindow2.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
  });
	google.maps.event.addListener(marker4, 'click', function() {
	infowindow4.open(map,marker4);
	infowindow1.close();
	infowindow2.close();
	infowindow3.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
	infowindow11.close();
  });
	google.maps.event.addListener(marker5, 'click', function() {
	infowindow5.open(map,marker5);
	infowindow1.close();
	infowindow2.close();
	infowindow3.close();
	infowindow4.close();
	infowindow11.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
  });
	google.maps.event.addListener(marker6, 'click', function() {
	infowindow6.open(map,marker6);
	infowindow1.close();
	infowindow2.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow11.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
  });
	google.maps.event.addListener(marker7, 'click', function() {
	infowindow7.open(map,marker7);
	infowindow1.close();
	infowindow2.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow11.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
  });
	google.maps.event.addListener(marker8, 'click', function() {
	infowindow8.open(map,marker8);
	infowindow1.close();
	infowindow2.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow11.close();
	infowindow9.close();
	infowindow10.close();
  });
	google.maps.event.addListener(marker9, 'click', function() {
	infowindow9.open(map,marker9);
	infowindow1.close();
	infowindow2.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow10.close();
	infowindow11.close();
  });
	google.maps.event.addListener(marker10, 'click', function() {
	infowindow10.open(map,marker10);
	infowindow1.close();
	infowindow2.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow11.close();
  });
	google.maps.event.addListener(marker11, 'click', function() {
	infowindow11.open(map,marker11);
	infowindow1.close();
	infowindow2.close();
	infowindow3.close();
	infowindow4.close();
	infowindow5.close();
	infowindow6.close();
	infowindow7.close();
	infowindow8.close();
	infowindow9.close();
	infowindow10.close();
  });


    }
      
      
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

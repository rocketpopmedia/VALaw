<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
	<div class="contact">
		<div class="richmond">
			<h1>Contact Us: Richmond Office</h1>
			<section class="left">
				<p> 4915 Radford Ave 
				<br> Suite 100
				<br> Richmond, Va 23230</p>
			</section>
			<section class="right">
				<p>Phone: (804) 359-5500
				<br> Toll Free: (800) 884-9507  
				<br> Fax: (804) 359-5555
				</p>
			</section>
			<section class="contactbutton">
				<a id="button" href="mailto:#">Email Richmond Office</a>
			</section>
		</br><h1>Email Our Richmond Office Directly:</h1>
				<?php gravity_form(1, false, false, false, '', false); ?>
		</div>
		<div class="map-container-richmond">
		    <div id="map-canvas-richmond">
		    </div>
		</div> 
		<div class="fredericksburg">
			<h1>Contact Us: Fredericksburg Office</h1>
			<section class="left">
				<p>600 Westwood Office Park<br>
				Fredericksburg, Virginia 22401
					<br>
			</section>
			<section class="right">
				<p>Phone: (540) 371-4444
				<br> Toll Free: (800) 884-9507   
				<br> Fax: (540) 368-1025
								</p>
			</section>
			<section class="contactbutton">
				<a id="button" href="mailto:#">Email Fredericksburg Office</a>
			</section>
			</br><h1>Email Our Fredericksburg Office Directly:</h1>
			<?php gravity_form(3, false, false, false, '', false); ?>
		</div>
		<div class="map-container-fredericksburg">
		    <div id="map-canvas-fredericksburg">
		    </div>
		</div>        
	</div>	
	
	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- GOOGLE MAP -->
        <script type="text/javascript">
	      
	      function initialize() {
			  var myLatlng = new google.maps.LatLng(37.580636, -77.493465);
			  var mapOptions = {
			    zoom: 16,
			    zoomControl: false,
			    scaleControl: false,
			    scrollwheel: false,
			    center: myLatlng,
			    mapTypeId: google.maps.MapTypeId.ROADMAP,
			    styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]}
			  var map = new google.maps.Map(document.getElementById('map-canvas-richmond'), mapOptions);
			  
              var contentString = '<div id="content">'+
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<div style="width: 285px; height: 100px;" id="bodyContent">'+
                  '<p style="margin:0px; line-height:29px; font-size: 21px;"><b>VA Comp Law</b></p>'+
                  '<p style="margin:0px; line-height:22px;">4915 Radford Ave, Suite 100</p>'+
                  '<p style="margin:0px; line-height:22px;">Richmond, VA 23230</p>'+
                  '<p style="margin:0px; line-height:22px;">(804) 359-5500</p>'+                  
                  '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });



			  var marker = new google.maps.Marker({
			      position: myLatlng,
			      map: map,
			      title: 'Va Injury Law'
			  });
              google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
              });

			}
			
			google.maps.event.addDomListener(window, 'load', initialize);
			
	  	</script>
	  	
	  	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <!-- GOOGLE MAP -->
        <script type="text/javascript">
        
  
	      
	      function initialize() {
			  var myLatlng = new google.maps.LatLng(38.296796, -77.494804);
			  var mapOptions = {
			    zoom: 16,
			    zoomControl: false,
			    scaleControl: false,
			    scrollwheel: false,
			    center: myLatlng,
			    mapTypeId: google.maps.MapTypeId.ROADMAP,
			    styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]}
			  var map = new google.maps.Map(document.getElementById('map-canvas-fredericksburg'), mapOptions);
			
              var contentString = '<div id="content">'+
                  '<div id="siteNotice">'+
                  '</div>'+
                  '<div style="width: 285px; height: 100px;" id="bodyContent">'+
                  '<p style="margin:0px; line-height:29px; font-size: 21px;"><b>VA Comp Law</b></p>'+
                  '<p style="margin:0px; line-height:22px;">600 Westwood Office Park</p>'+
                  '<p style="margin:0px; line-height:22px;">Fredericksburg, Virginia 22401</p>'+
                  '<p style="margin:0px; line-height:22px;">(540) 371-4444</p>'+                  
                  '</div>'+
                  '</div>';

              var infowindow = new google.maps.InfoWindow({
                  content: contentString
              });



			  var marker = new google.maps.Marker({
			      position: myLatlng,
			      map: map,
			      title: 'Va Injury Law'
			  });
              google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
              });

			}
			
			google.maps.event.addDomListener(window, 'load', initialize);

	  	</script>
	  <?php get_footer(); ?>

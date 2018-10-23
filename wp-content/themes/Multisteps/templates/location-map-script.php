<?php $google_map_api_key = get_field('google_map_api_key', 'option'); ?>

<?php if(($google_map = get_field('google_map')) && $google_map_api_key): ?>
    <?php $google_map_center =  array_map("floatval", explode(",", $google_map['google_map_center'])); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/scripts/gmap3.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=<?php echo $google_map_api_key; ?>"></script>

<script type="text/javascript">
/* <![CDATA[ */
    jQuery(document).ready(function() {
        var map;
        var infoWindow;
        var infoWindowContent = "hello";

        initGmap();

        function initGmap() {

            var styles = [{stylers: [{hue: "#00ffe6"}, {saturation: -20 } ] }, {featureType: "road", elementType: "geometry", stylers: [{lightness: 100 }, {visibility: "simplified"} ] }, {featureType: "road", elementType: "labels", stylers: [{visibility: "on"} ] }];

            // Create a map object, and include the MapTypeId to add
            // to the map type control.
            var mapOptions = {
                center: { lat: 15.552727, lng: 48.516388000000006 },
                zoom: 3,
                mapTypeControlOptions: { mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style'] }
            };
            map = new google.maps.Map(document.getElementById('gmap'), mapOptions);

            //Set map styles to custom style
            map.setOptions({
                styles: styles
            });

            map.data.loadGeoJson('<?php echo get_template_directory_uri(); ?>/assets/scripts/locations.json');

            map.data.setStyle(function(feature) {
                return {icon:feature.getProperty('icon')};
            });

            infoWindow = new google.maps.InfoWindow({
                content: infoWindowContent
            });


            //Listener for click
            map.data.addListener('click', function (event) {
                // alert(event.latLng.lat());
                // var marker = new google.maps.Marker({
                //         position: event.latLng,
                //         map: map
                // });
                // infoWindow.setContent("hello world");
                // infoWindow.open(map,marker);
                setLocationDataAndMapPosition(event.feature);
            });


            // var maplocation = "Sydney University, Camperdown NSW, Australia";
            // var center = [<?php echo $google_map_center[0]; ?>,<?php echo $google_map_center[1]; ?>];

            // jQuery('.gmap')
            //     .gmap3({
            //         address: maplocation,
            //         zoom: 12,
            //         zoomControl: true,
            //         mapTypeControl: false,
            //         scaleControl: false,
            //         scrollwheel: false,
            //         navigationControl: true,
            //         streetViewControl: false,
            //         draggable: true,
            //         mapTypeId : google.maps.MapTypeId.ROADMAP,
            //         styles: [{"featureType": "administrative", "elementType": "all", "stylers": [{"visibility": "on"} ] }, {"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}, {"visibility": "on"} ] }, {"featureType": "administrative.country", "elementType": "geometry.fill", "stylers": [{"color": "#ff0000"}, {"visibility": "on"} ] }, {"featureType": "administrative.province", "elementType": "all", "stylers": [{"visibility": "off"} ] }, {"featureType": "administrative.land_parcel", "elementType": "geometry.fill", "stylers": [{"color": "#1b682f"}, {"visibility": "on"}, {"weight": "2.82"} ] }, {"featureType": "administrative.land_parcel", "elementType": "labels.text", "stylers": [{"color": "#1b682f"} ] }, {"featureType": "administrative.land_parcel", "elementType": "labels.text.fill", "stylers": [{"visibility": "off"} ] }, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#e8e9db"}, {"saturation": "0"} ] }, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "simplified"}, {"hue": "#0052ff"}, {"saturation": "-63"} ] }, {"featureType": "poi.business", "elementType": "labels.text", "stylers": [{"visibility": "off"} ] }, {"featureType": "poi.medical", "elementType": "all", "stylers": [{"visibility": "off"} ] }, {"featureType": "poi.park", "elementType": "geometry.fill", "stylers": [{"color": "#8dceab"}, {"saturation": "0"}, {"lightness": "0"}, {"visibility": "on"} ] }, {"featureType": "poi.park", "elementType": "labels.text.fill", "stylers": [{"visibility": "on"} ] }, {"featureType": "poi.park", "elementType": "labels.icon", "stylers": [{"visibility": "off"} ] }, {"featureType": "poi.place_of_worship", "elementType": "all", "stylers": [{"visibility": "off"} ] }, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100 }, {"lightness": "26"}, {"visibility": "on"} ] }, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "off"}, {"color": "#ffffff"} ] }, {"featureType": "road.highway", "elementType": "labels.text", "stylers": [{"color": "#adadad"}, {"visibility": "off"} ] }, {"featureType": "road.highway", "elementType": "labels.text.fill", "stylers": [{"visibility": "off"} ] }, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"} ] }, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "simplified"}, {"lightness": "28"}, {"saturation": "-38"}, {"gamma": "0.70"} ] }, {"featureType": "transit", "elementType": "geometry", "stylers": [{"saturation": "28"} ] }, {"featureType": "transit", "elementType": "geometry.stroke", "stylers": [{"visibility": "off"} ] }, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#9fdbe1"}, {"visibility": "on"}, {"saturation": "0"}, {"lightness": "50"} ] } ]
            //     })
            //     .marker({
            //         position: center
            //     });

        }

        function setLocationDataAndMapPosition(feature) {
            //Reset feature icon
            // map.data.forEach(function (feat) {
            //     feat.setProperty('icon', '<?php echo get_template_directory_uri(); ?>/assets/images/multisteps-map-icon-normal.png');
            // });

            var featureLatLng = feature.getGeometry().get();
            map.setZoom(11);
            map.panTo({lat:featureLatLng.lat(),lng:featureLatLng.lng()});

            //map.setCenter(event.feature.getPosition());

            //$('[data-toggle="tooltip"]').tooltip('destroy');
            setLocationData(feature);
            //$('[data-toggle="tooltip"]').tooltip();

            // feature.setProperty('icon', '<?php echo get_template_directory_uri(); ?>/assets/images/multisteps-map-icon-large.png');
        }

        function setLocationData(feature) {
            var featureString = "<h4>";

            if (feature.getProperty('title') != "") {
                featureString = featureString + feature.getProperty('title') + "</h4><p>";
            }

            if (feature.getProperty('description') != "") {
                featureString = featureString + feature.getProperty('description') + "<br />";
            }

            featureString = featureString + "</p><p>";

            if (feature.getProperty('buildingName') != "") {
                featureString = featureString + feature.getProperty('buildingName') + "<br />";
            }

            if (feature.getProperty('address1') != "") {
                featureString = featureString + feature.getProperty('address1') + "<br />";
            }

            if (feature.getProperty('address2') != "") {
                featureString = featureString + feature.getProperty('address2') + "<br />";
            }

            if (feature.getProperty('city') != "") {
                featureString = featureString + feature.getProperty('city') + ", ";
            }

            if (feature.getProperty('state') != "") {
                featureString = featureString + feature.getProperty('state') + ", ";
            }

            if (feature.getProperty('postcode') != "") {
                featureString = featureString + feature.getProperty('postcode') + "<br />";
            }
            featureString = featureString + "Australia</p><p>";

            if (feature.getProperty('phone') != "") {
                featureString = featureString + "Phone: " + feature.getProperty('phone') + "<br />";
            }

            //if (feature.getProperty('fax') != "") {
            //  featureString = featureString + "Fax: " + feature.getProperty('fax') + "<br />";
            //}
            featureString = featureString + "</p>";

            /*if (feature.getProperty('openTimes') != "") {
                featureString += "<p><strong>Open Times</strong></p>";
                featureString += generateOpenTimes(feature.getProperty('openTimes'));
            }*/

            // if (feature.getProperty('openTimes') != "") {
            //     var openTimesString = "<p><strong>Open Times</strong></p>" + generateOpenTimes(feature.getProperty('openTimes'));
            // }
            // var accessibleString = generateAccessibleOptions(feature.getProperty('wheelchair'), feature.getProperty('parking'), feature.getProperty('trainService'), feature.getProperty('busService'), feature.getProperty('interpreter'));

            var details = "<div class=\"details\">"+featureString+"</div>";// +
            //                 "<div class=\"accessibilities text-center\">"+accessibleString+"</div>" +
            //                 "<div class=\"openTimes\">"+openTimesString+"</div>";

            document.getElementById('location-details').innerHTML = details;
        }

    });

/* ]]> */
</script>

<?php endif; ?>

<!DOCTYPE html>
<html>
<head>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
<h3>My Google Maps Demo</h3>
<div id="map"></div>
<script>
    function initMap() {
        var location = {lat: 7.7353, lng: 5.66928};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_3uXo6TQB96e1zhaCOuYXPxyB1EP55YQinitMap()">
</script>
</body>
</html>
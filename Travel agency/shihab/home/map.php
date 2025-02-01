<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive Map</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        /* Style for map container */
        #map {
            width: 100%;
            height: 500px; /* Adjust height as needed */
            border-radius: 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Interactive map container -->
<div id="map"></div>

<!-- Load the Google Maps JavaScript API -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

<!-- JavaScript for initializing the map -->
<script>
    // Initialize and add the map
    function initMap() {
        // Bandarban coordinates
        var bandarban = { lat: 22.1953, lng: 92.2180 };
        
        // Create the map centered at Bandarban
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10, // Zoom level
            center: bandarban, // Center the map at Bandarban
        });
        
        // Add marker for Bandarban
        var marker = new google.maps.Marker({
            position: bandarban,
            map: map,
            title: "Bandarban",
        });
    }
</script>

</body>
</html>

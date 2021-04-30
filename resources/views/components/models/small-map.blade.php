<link rel="stylesheet" href="/css/leaflet.css" />
<script src="/js/leaflet.js"></script>

<div class="bg-white flex flex-col items-center justify-center w-full h-full">
    <div id="mapDiv" style="width: 800px; height: 300px"></div>
</div>



<script type="text/javascript">
    var locations = <?php print_r(json_encode($center)) ?>;

    //Open maps
    var lat = locations.latitude;
    var lon = locations.longitude;

    // initialize map
    var map = L.map('mapDiv').setView([lat, lon], 16);
    // set map tiles source
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
        maxZoom: 18,
    }).addTo(map);

    // add marker to the map
    var marker = L.marker([locations.latitude, locations.longitude]).addTo(map);
    // add popup to the marker
    marker.bindPopup(locations.name);
</script>
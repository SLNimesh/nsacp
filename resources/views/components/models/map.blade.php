<link rel="stylesheet" href="/css/leaflet.css" />
<script src="/js/leaflet.js"></script>

<div class="bg-white flex flex-col items-center justify-center w-100 h-100 mr-16">
  <div class="flex flex-row p-2 items-center">
    <img class="w-6 h-6 mr-2" src="/img/pin.png" alt="">
    <a href="/help-centers">
      <p class="text-lg font-semibold text-gray-500">Help Centers</p>
    </a>
  </div>
  <div id="mapDiv" style="width: 450px; height: 750px" class="rounded-md"></div>
</div>



<script type="text/javascript">
  var locations = <?php print_r(json_encode((app(App\Http\Controllers\CenterController::class)->getAll()))) ?>;


  //Open maps
  var lat = 7.827279338543741;
  var lon = 80.792423;

  // initialize map
  var map = L.map('mapDiv').setView([lat, lon], 8);
  // set map tiles source
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    maxZoom: 18,
  }).addTo(map);

  locations.forEach(value => {
    // add marker to the map
    var marker = L.marker([value.latitude, value.longitude]).addTo(map);
    // add popup to the marker
    marker.bindPopup(value.name);
  });
</script>
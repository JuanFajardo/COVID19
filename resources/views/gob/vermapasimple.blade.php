
<style>
  #map { 
    width: 100%;
    height: 580px;
    box-shadow: 5px 5px 5px #888;
 }
</style>
        <div id="footer">&copy; <a href="https://www.openstreetmap.org/copyright"> Te Ayudamos</a> QuedateEnCasa</div>
        <!-- bring in the google maps library -->
        <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css"/>
         <div id="map">
        </div>
        <input type="text" name="dom_lon" id="dom_lon"> <input type="text" name="dom_lat" id="dom_lat">
        <script type="text/javascript">
            //Google maps API initialisation
            var element = document.getElementById("map");
            function onMapClick(e) {
              alert(e.latlng);
              marker = new L.marker(e.latlng, {draggable:'true'});
              marker.on('dragend', function(event){
               
              var marker = event.target;
              var position = marker.getLatLng();
              marker.setLatLng(new L.LatLng(position.lat, position.lng),{draggable:'true'});
              map.panTo(new L.LatLng(position.lat, position.lng));
                
              });
              map.addLayer(marker);
            };
            var coord = {lat:{!! $dom_lat !!} ,lng:{!! $dom_lon !!} } ;
            var mymap = L.map('map').setView(coord, 16); 
            //Define OSM map type pointing at the OpenStreetMap tile server
            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                       attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                       maxZoom: 18
            }).addTo(mymap);
                     var marker=L.marker(coord,{draggable: true}).addTo(mymap);

                     marker.on("drag", function(e) {
                            var marker = e.target;
                            var position = marker.getLatLng();
                            
                            document.getElementById('dom_lat').value = position.lat ;
                            document.getElementById('dom_lon').value = position.lng ; 
                            map.panTo(new L.LatLng(position.lat, position.lng));

                     });
                
            //DA LA DIR Y EL ZOOM***************************
            document.getElementById('dom_lat').value = {!! $dom_lat !!};
            document.getElementById('dom_lon').value = {!! $dom_lon !!};             
        </script>
       

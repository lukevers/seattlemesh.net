  <?php require('header.php'); ?>

    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>

    <script>
      var map;
      function initialize() {
            var mapOptions = {
                zoom: 11,
                center: new google.maps.LatLng(-122.2930339, 47.5832951),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                disableDefaultUI: true
            }

            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

<?
    foreach(scandir("maps/") as $file) {
        if(strpos($file, ".kmz") !== false) {
            $jsvar = str_replace(".", "", $file);
            $jsvar = str_replace("-", "", $jsvar);
            $jsvar = "layer".$jsvar;
            echo "            var $jsvar = new google.maps.KmlLayer({\n";
            echo "                url: 'https://seattlemesh.net/maps/$file'\n";
            echo "            });\n";
            echo "            $jsvar.setMap(map);\n\n\n";
        }
    }
    ?>
    }
        google.maps.visualRefresh = true;
        google.maps.event.addDomListener(window, 'load', initialize);

    </script>

    <div id="map-canvas"></div>

  <?php require('footer.php'); ?>
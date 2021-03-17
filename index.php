
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/css/ol.css" type="text/css">
    
    
    <style>
        .map {
            height: 100vh;
            width: 100%;
            position:absolute;
            top:0;
            left:0;
            z-index:-1;
        }
        
        .header h2 {
            width:100vw;
            font-size:5vw;
            
        }
        
        .header{
            background-color:white;
           
            width:100vw;
            position:absolute;
            top:0;
            left:0;
            text-align:center;
            
        }
    </style>
    
    
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/build/ol.js"></script>
    
    
    
    
    <title>World Viewer</title>
</head>
<body>
    
    <div class="header"> 
        
        
        <h2>World Viewer</h2>
        <a href="">Map</a>
        <a href=""> Grid</a>
    
    </div>
    
    <div id="map" class="map"></div>
    

    
    
    
    <script type="text/javascript">
        
        
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: ol.proj.fromLonLat([-70.41, 25.82]),
          zoom: 3
        })
        
          
      });
    </script>
    
    

    
    
    
    
    
</body>
</html>
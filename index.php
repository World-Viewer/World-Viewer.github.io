<!doctype html>
<html lang="en">

<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/css/ol.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="main.css">





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--    1 - include OpenLayers-->
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/build/ol.js"></script>

      <link rel = "icon" href = "wv_logo.png" type = "image/x-icon">




    <title>World Viewer</title>
</head>

<body>


    <div class="header">
        
        <img src="wv_logo.png" id="mainLogo" alt="World Viewer Logo">


<!--
    TODO: this... or make a toggle in js....

        <a href="">Map</a>
        <a href=""> Grid</a>
-->

    </div>






    <!--    div map container-->
    <div id="map" class="map">


        <div id="popoutContainer">


        </div>


    </div>
    <div id="info"></div>


    <div class='place'>
        <h3>Location: Times Square, NYC <br> Longitude:-73.9855<br>Latitude:40.7580</h3>

        <iframe src="https://www.youtube.com/embed/eJ7ZkQ5TC08" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <div class='place'>

        <h3>Location: La Plata, Misouri <br> Longitude:-92.490924<br>Latitude: 40.023942</h3>

        <iframe src="https://www.youtube.com/embed/AAQUGsUzWbE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>

    <div class='place'>
        
<!--        when adding a new place from googles coordinates, I had to switch the long and the lat, then turn the LONG into a negative...-->

        <h3>Location: Biloxi, Mississippi <br> Longitude:-88.9012<br>Latitude:30.3944</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/G85dhopGADE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>



    <script src="viewer.js"></script>
    
    <div class="footer"></div>







</body>

</html>

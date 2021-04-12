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
        
        <img src="wv_logo2.png" id="mainLogo" alt="World Viewer Logo">


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
    
    
    <div class='place'>
<!--35.693503292958304, 139.69949538242176-->
        <h3>Location: Shinjuku, Tokyo <br> Longitude:139.69949538242176<br>Latitude: 35.693503292958304</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/RQA5RcIZlAM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
    
       <div class='place'>
<!--43.0440° N, 87.9140° W-->
        <h3>Location: Milwaukee, WI <br> Longitude:-87.9140<br>Latitude: 43.0440</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/JATo2lPJcaE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
    
           <div class='place'>
<!--29.571164382 -95.489498042-->
        <h3>Location: Houston, Texas <br> Longitude:-95.489498042<br>Latitude: 29.571164382</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/c5_w4yGHmNQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
    
              <div class='place'>

        <h3>Location: Times Square, NYC <br> Longitude:-73.9847<br>Latitude: 40.7580</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/3XTw2FmCUdE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
    
               <div class='place'>

        <h3>Location: Las Vegas, NV <br> Longitude:-115.172924<br>Latitude: 36.102578</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/1ZNCtDLUKHw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
    
     <div class='place'>

        <h3>Location: Las Vegas, NV <br> Longitude:-80.1170<br>Latitude: 26.0087</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/cmkAbDUEoyA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
    
    
         <div class='place'>

        <h3>Location: Ciudad de México <br> Longitude:-99.1346<br>Latitude: 19.4322</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/WRnHHyKYQsw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
    
             <div class='place'>

        <h3>Location: Laikipia County, Kenya <br> Longitude: 36.7820<br>Latitude: 0.3606</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/bGpNSsnSlfo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div> 
    
    <div class='place'>

        <h3>Location: Place Centrale Verbier, Switzerland <br> Longitude: 7.2265100<br>Latitude: 46.1002000</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/yDKJMdZTEXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>


    
    









    <script src="viewer.js"></script>
    
    <div class="footer"></div>







</body>

</html>

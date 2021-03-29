<!doctype html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/css/ol.css" type="text/css">


    <style>
        .map {
            height: 100vh;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .header h2 {
            font-size: 4vw;
            opacity:0.75;

        }

        .header {
            
            background-color:white;
            width: 100vw;
            position: absolute;
            top: 0;
            left: 0;
            text-align: center;
            line-height:0.55;
            margin-top:-0;

        }

    </style>

    

    <!--    1 - include OpenLayers-->
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.5.0/build/ol.js"></script>
    
    




    <title>World Viewer</title>
</head>

<body>

    <div class="header">


        <h2>World Viewer</h2>
        <a href="">Map</a>
        <a href=""> Grid</a>

    </div>



    <!--    div map container-->
    <div id="map" class="map">
        <div id="popup"></div>
    </div>
    <div id="info"></div>





    <script type="text/javascript">
        ol.proj.useGeographic();
        var place = [0, 68.66];
        var point = new ol.geom.Point(place);


        var map = new ol.Map({




            //            attaching map object to div... map object takes target into args, 'map' is the id of the div...
            target: 'map',


            //            The layers: [ ... ] array is used to define the list of layers available in the map.
            //            Layers in OpenLayers are defined with a type (Image, Tile or Vector) which contains a source. The source is the protocol used to get the map tiles.

            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                }),


                new ol.layer.Vector({
                    source: new ol.source.Vector({
                        features: [new ol.Feature(point)],
                    }),
                    style: new ol.style.Style({
                        image: new ol.style.Circle({
                            radius: 9,
                            fill: new ol.style.Fill({
                                color: 'red'
                            }),
                        }),
                    }),




                }),
            ],


            //            The view allows to specify the center, resolution, and rotation of the map. The simplest way to define a view is to define a center point and a zoom level. Note that zoom                level 0 is zoomed out.
            view: new ol.View({
                center: ol.proj.fromLonLat([-70.41, 25.82]),
                zoom: 3
            })


        });

        var element = document.getElementById('popup');

        var popup = new ol.Overlay({
            element: element,
            positioning: 'bottom-center',
            stopEvent: false,
            offset: [0, -10],
        });
        map.addOverlay(popup);

        function formatCoordinate(coordinate) {
            return ("\n    <table>\n      <tbody>\n        <tr><th>lon</th><td>" + (coordinate[0].toFixed(2)) + "</td></tr>\n        <tr><th>lat</th><td>" + (coordinate[1].toFixed(2)) + "</td></tr>\n      </tbody>\n    </table>");
        }

        var info = document.getElementById('info');
        map.on('moveend', function() {
            var view = map.getView();
            var center = view.getCenter();
            info.innerHTML = formatCoordinate(center);
        });

        map.on('click', function(event) {
            var feature = map.getFeaturesAtPixel(event.pixel)[0];
            if (feature) {
                var coordinate = feature.getGeometry().getCoordinates();
                popup.setPosition(coordinate);
                $(element).popover({
                    container: element.parentElement,
                    html: true,
                    sanitize: false,
                    content: formatCoordinate(coordinate),
                    placement: 'top',
                });
                $(element).popover('show');
            } else {
                $(element).popover('dispose');
            }
        });

        map.on('pointermove', function(event) {
            if (map.hasFeatureAtPixel(event.pixel)) {
                map.getViewport().style.cursor = 'pointer';
            } else {
                map.getViewport().style.cursor = 'inherit';
            }
        });

    </script>
    <!--<script src="main.js"></script> in the future to seperate the files...-->







</body>

</html>

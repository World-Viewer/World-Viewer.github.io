$(document).ready(function() {



            ol.proj.useGeographic();
            //longitude = vert, lattitude = horiz...  

            var places = [];
            var points = [];


            $('.place').each(function(index) {

                //using REGEX to turn the innerHTML into dict, append that dict to places array...
                let long_reg = 'Longitude:(.+?)<'
                let lat_reg = 'Latitude:(.+?)<';
                let name_reg = 'Location: (.+?) <b';
                let iframe_reg = "<iframe(.+?)/iframe>";


                var info = $(this).html();

                var name = info.match(name_reg)[1];


                var longitude = info.match(long_reg)[1];
                var latitude = info.match(lat_reg)[1];


                var iframe = info.match(iframe_reg)[0];





                var place_info = {
                    "name": name,
                    "longitude": parseFloat(longitude),
                    "latitude": parseFloat(latitude),
                    "iframe_url": iframe
                };

                places.push(place_info);

            });






            for (var w = 0; w < places.length; w++) {
                var currentPlace = places[w];
                var long = currentPlace['longitude'];
                var lat = currentPlace['latitude'];
                var longlat = [long, lat];
                var new_plot = new ol.Feature(new ol.geom.Point(longlat));

                points.push(new_plot);


            }
            
            
            
            

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
                            features: points,
                        }),
                        style: new ol.style.Style({
                            image: new ol.style.Icon({
                                src: "wv_blip.png",
                                scale:0.11,
                                offset: [0.95,0],
                                opacity:0.90,

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
                $('#popoutContainer').empty();

                
                var feature = map.getFeaturesAtPixel(event.pixel)[0];
                if (feature) {
                    var coordinate = feature.getGeometry().getCoordinates();
                    popup.setPosition(coordinate);


                    //show popup div
                    $('#popoutContainer').append("<div id='popout'></div>");
                    
                   
                    
                   


                    // check places array for which coordinates match the long and lat
                    for (var g = 0; g < places.length; g++) {
                        if (places[g]['longitude'] == coordinate[0] && places[g]['latitude'] == coordinate[1]) {


                            var current_iframe = places[g]['iframe_url'];
                            var current_name = places[g]['name'];
                            var closeButton = '<button id="close" type="button">close</button>';
                            
                            $('#popout').append('<h3>' + current_name + '</h3>' + '<br>' + current_iframe + '<br>' + closeButton);
                            $('#close').click(function() {
                                $('#popoutContainer').empty();
                            });
                            
                        }
                    }









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

        });
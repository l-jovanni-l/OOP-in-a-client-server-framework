 /*********************
Name: Jovanni Elias
Final project
Purpose: This is for my 3rd party API. I have the coordinates set to machu picchu so you can see where
        Alpacas might be in their natural habitat.
**********************/
 window.onload = function() {
        L.mapquest.key = 'lYrP4vF3Uk5zgTiGGuEzQGwGIVDGuy24';

        var map = L.mapquest.map('map', {
          center: [-13.1648, -72.5586],
          layers: L.mapquest.tileLayer('map'),
          zoom: 12
        });

        map.addControl(L.mapquest.control());
      }

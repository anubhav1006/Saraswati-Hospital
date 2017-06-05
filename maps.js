
      function initMap() {
        var place = {lat:28.6306933, lng:76.992378};
            var marker= new google.maps.Marker({position:place,map:map});
        var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 15,
          center: place
        });
      }

<script>
  let address1 = $("#address1").val();
let address2 = $("#address2").val();
let see = document.getElementById("weight").value;
// let weight = document.getElementById("weight").innerHTML;
// let see = document.getElementById("address2").value;
// console.log(see);
// console.log(address2);

//ONCLICK FUNCTION
function reply() {
  
  var address1Lat = document.getElementById("lat").innerText;

  var address1Lng = document.getElementById("long").innerText;

  addressLng = parseFloat(address1Lng);
  addressLat = parseFloat(address1Lat);
  var address2Lat = document.getElementById("new").innerText;

  addressesLat = parseFloat(address2Lat);
  var address2Lng = document.getElementById("year").innerText;
  addressesLng = parseFloat(address2Lng);

  let distance1 = {
    lat: addressLat,
    lng: addressLng,
  };
  let distance2 = {
    lat: addressesLat,
    lng: addressesLng,
  };

  //Direction Parameters
  let directionsService = new google.maps.DirectionsService();
  let directionsRenderer = new google.maps.DirectionsRenderer();
  // let DirectionsRequest = new google.maps.DirectionsRequest();
  directionsRenderer.setMap(map);
  directionsRenderer.setPanel(document.getElementById("direction")); // Existing map object displays directions

  // Create route from existing points used for markers
  const route = {
    origin: distance1,
    destination: distance2,
    travelMode: "DRIVING",
  };

  directionsService.route(route, function (response, status) {
    if (status !== "OK") {
      window.alert("Directions request failed due to " + status);
      return;
    } else {
      directionsRenderer.setDirections(response); // Add route to the map
      var directionsData = response.routes[0].legs[0]; // Get data about the mapped route
      if (!directionsData) {
        window.alert("Directions request failed here");
      } else {
        var kilometer = directionsData.distance.text;
        // converting duration of travel to min
        time = directionsData.duration.value / 60;

        //multiplying the time by price per min
       var prices;
        let price = 75 * time;
        if (parseFloat(kilometer) <= 10) {
          let price = 700;
          document.getElementById("get_estimate").style.color = "green";
          document.getElementById("get_estimate").innerHTML =
            "Estimated price";
            var prices =  Math.ceil(price / 100.0) * 100
          document.getElementById("estimate_result").innerHTML =
            "Your bill is <b>&#8358</b><strong>" +
           prices +
            '</strong><br><a href="#">Proceed</a>';
            // console.log("price is: "+prices);
            return prices;
        } else if (parseFloat(kilometer) >= 47) {
          let price = 2500;
          document.getElementById("get_estimate").style.color = "green";
          document.getElementById("get_estimate").innerHTML =
            "Estimated price";
            var prices =  Math.ceil(price / 100.0) * 100
          document.getElementById("estimate_result").innerHTML =
            "Your bill is <b>&#8358</b><strong>" +
            prices +
            '</strong><br><a href="#">Proceed</a>';
            // console.log("price is: "+prices);
            return prices;
        } else {
          let bill = 30 * time;
          let price = 0 + bill;
          document.getElementById("get_estimate").style.color = "#4CAF50";
          document.getElementById("get_estimate").innerHTML =
            "Estimated price";
          var prices =  Math.ceil(price / 100.0) * 100
          document.getElementById("estimate_result").innerHTML = "Your bill is <b>&#8358</b><strong>" +
           prices +
            `</strong><br><a class="proceed-btn" href="receipt.php">Proceed</a>`;
            
            return prices;
        }
        console.log("price is: "+prices);
      }
      
    }
    
  });
  let address1value= document.getElementById("address1").value  ;
  console.log(address1value);
  
}
</script>
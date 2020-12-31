<?php
 // session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/customestyle.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/material.css" />
    <!-- <link rel="stylesheet" href="css/responsiveness.css" /> -->
    <link rel="stylesheet" href="css/vegas.css" />

    <style>
      .proceed-btn{
        margin-top: 10%;
        padding:5px 15px;
        color: #ffffff;
        border: 2px solid #4CAF50;
        border-radius: 5px;
      }
      .proceed-btn:hover{
        text-decoration: none;
        color:#ffffff;
      }
    </style>

    <title>Deliverable</title>
  </head>
  <body class="signup-page homepage-banner">
    <nav class="navbar navbar-transparent navbar-absolute">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target="#navigation-example"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand hidden-xs" href="#"
            ><img src="" style="width: 250px"
          /></a>
          <a class="navbar-brand visible-xs" href="#"
            ><img src="#" style="width: 250px" alt="logo"
          /></a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#"> Be a rider </a>
            </li>
            <li>
              <a href="#"> Invest </a>
            </li>
            <li>
              <a href="#"> <i class="material-icons">folder</i>Business </a>
            </li>
            <li>
              <a href="#"> <i class="material-icons">input</i> Login </a>
            </li>
            <li>
              <a href="#"> <i class="material-icons">unarchive</i> Sign Up </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="wrapper">
      <div class="header header-filter">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-sm-6">
              <div class="card-signup"></div>
            </div>
            <div class="col-md-5 col-sm-6">
              <div class="card card-signup">
                <!-- Form Estimation -->
                <center>
                  <?php
                      //echo "yes i hav ebeenlmd<br/>";
                      $address = "";
                      if (isset($_POST['check_estimate'])){
                        echo "I am clicked<br/>";
                        $address = $_POST['pickup_address'];
                        echo $address;
                      }
                     
                  ?>
                <!-- <form action="receipt_process.php" class="" method="post"> -->
                   <form action="" class="" method="post">
                    <div id="lat" hidden></div>
                    <div id="long" hidden></div>
                    <div id="new" hidden></div>
                    <div id="year" hidden></div>
                    <!-- <p id="result"></p>
                    <div id="distance"></div>
                    <div id="duration"></div>
                    <div id="price"></div> -->
                    <div
                      id="get-estimate"
                      class="header header-danger text-center"
                    >
                      <h3 id="get_estimate">Get Estimate</h3>
                      <h3 id="estimate_result"></h3>
                    </div>

                    <div
                      id="show-estimate"
                      class="header header-success text-center"
                      style="display: none"
                    ></div>

                    <div class="content">
                      <div class="input-group address1">
                        <span class="input-group-addon">
                          <i class="material-icons">location_on</i>
                        </span>
                        <input
                          type="text"
                          id="address1"
                          name="pickup_address"
                          value=""
                          class="form-control"
                          placeholder="Pickup "
                        />
                      </div>
                      <div class="input-group address2">
                        <span class="input-group-addon">
                          <i class="material-icons">location_on</i>
                        </span>
                        <input
                          type="text"
                          id="address2"
                          name="delivery_address"
                          placeholder="Drop Off"
                          class="form-control"
                        />
                      </div>

                      <div class="input-field">
                        <select class="form-control" name="weight" id="weight">
                          <option value="" disabled selected>
                            -- Estimated Weight
                          </option>
                          <option value="200">0 - 1 kg</option>
                          <option value="200">1 - 2 kg</option>
                          <option value="300">2 - 3 kg</option>
                          <option value="300">3 - 4 kg</option>
                          <option value="300">4 - 5 kg</option>
                        </select>
                      </div>
                    </div>
                    <div class="content-footer text-center">
                      <button
                        type="submit"
                        class="btn btn-card btn-success btn-lg"
                        id="find-estimate"
                        onclick="reply()"
                        name="check_estimate"
                      >
                        Get Estimate
                      </button>
                      <p class="alt-link pull-left">
                        <a href="#" class="">Track Package </a>
                      </p>
                    </div>
                  </form>
                </center>
                <!-- end of form -->
              </div>
            </div>
          </div>
        </div>

        <footer class="footer">
          <div class="container">
            <div class="copyright pull-right">
              &copy; WAVEUS LTD <a href="javascript:;" target="_blank"> </a>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </body>
  <script src="js/jquery.js"></script>
  <script src="js/slider.js"></script>
  <script src="js/vegas.js"></script>
  <script src="js/main.js"></script>
  <script>
    $(document).ready(function () {
      $("#show-estimate").hide();
    });
  </script>

  <!-- good -->
  <script>
    $(document).ready(function () {
      validate();
      $("#address1, #address2, #weight").change(validate);
    });

    function validate() {
      if (
        $("#address1").val().length > 0 &&
        $("#address2").val().length > 0 &&
        $("#weight").val().length > 0
      ) {
        $("#find-estimate").prop("disabled", false);
      } else {
        $("#find-estimate").prop("disabled", true);
      }
    }
  </script>
  <!-- good -->
  <script>
    $(document).ready(function () {
      $(document).on("click", "#find-estimate", function (e) {
        e.preventDefault();
        var address1 = $("#address1").val();
        var address2 = $("#address2").val();
        // var weight = $("#weight").val();
        var return_url = "index2.html";
      });

      //Try
      $("#weight").on("change", function () {
        see = document.getElementById("weight").value;
        //console.log($('option:selected').text());
        //console.log(see);
      });
      //console.log(see);
      //Try End
    });
  </script>
  <script
    type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuJ6oSW4YtvZ3yjCu8aXoNxPVBfi__oBM&libraries=places"
  ></script>
  <script>
    var map;
    google.maps.event.addDomListener(window, "load", initialize);
    function initialize() {
      // DECLARING MAP BOUNDRIES TO CENTER ON NIGERIA ONLY
      var defaultBounds = new google.maps.LatLngBounds(
        new google.maps.LatLng(6.465422, 3.406448),
        new google.maps.LatLng(6.465422, 3.406448)
      );

      var options = {
        bounds: defaultBounds,
        componentRestrictions: { country: "ng" },
      };

      // AUTOCOMPLETE DECLARATION FOR ADDRESS 1
      var address1 = document.getElementById("address1");
      var autocomplete = new google.maps.places.Autocomplete(address1, options);
      // autocomplete.setTypes(["geocode"]);
      google.maps.event.addListener(autocomplete, "place_changed", function () {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
          return;
        }
        var add1Lat = place.geometry.location.lat();
        var add1Lng = place.geometry.location.lng();
        document.getElementById("lat").innerHTML = add1Lat;
        // console.log(add1Lat + " " + add1Lng);
        document.getElementById("long").innerHTML = add1Lng;
      });
      //  AUTO COMPLETE DECLARATION FOR ADDRESS 2
      var address2 = document.getElementById("address2");
      var autocom = new google.maps.places.Autocomplete(address2, options);
      google.maps.event.addListener(autocom, "place_changed", function () {
        var places = autocom.getPlace();
        if (!places.geometry) {
          return;
        }
        add2Lat = places.geometry.location.lat();
        add2Lng = places.geometry.location.lng();
        document.getElementById("new").innerHTML = add2Lat;

        document.getElementById("year").innerHTML = add2Lng;
      });
    }
  </script>

  <!-- main -->
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
  <!-- <script src="js/click.js">
    // var res = "success";
  </script> -->
  <?php
   //echo "<script>document.writeln(res);</script>";
?>
</html>

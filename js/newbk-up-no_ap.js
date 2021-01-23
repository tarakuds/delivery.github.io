var districts = {
  mainland: {
    district1: [
      "surulere",
      "mushin",
      "shomolu",
      "ojuelegba",
      "yaba",
      "onipanu",
      "palmgroove",
      "bariga",
      "apapa",
      "ijora",
      "iganmu",
      "costain",
      "obanikoro",
    ],
    district2: [
      "maryland",
      "ikeja",
      "mma1",
      "mma2",
      "olodiapapa",
      "oshodi",
      "isolo",
      "ajao estate",
      "gbagada",
      "anthony",
    ],
    district3: [
      "iju-ishaga",
      "ogba",
      "ojodu berger",
      "magodo phase 1",
      "omole phase 1",
      "omole phase 2",
      "alausa",
      "magodo",
      "mile 12",
      "ketu",
      "ojota",
      "iyanaoworo",
    ],
    district4: [
      "alimosho",
      "ifako-ijaiye",
      "igando",
      "ipaja-gowon estate",
      "idimu",
      "ikotun",
      "egbeda",
      "abule egba",
      "orile-agege",
      "agege",
      "ikorodu",
    ],
    district5: [
      "iba",
      "ojo",
      "trade fair",
      "volkswagen",
      "okokomaiko",
      "lasu",
      "alaba",
      "navy town",
      "satellite town",
      "festac",
      "amuwo-odofin",
      "mile 2",
    ],
  },
  island: {
    district1: [
      "lagos island",
      "ikoyi",
      "obalende",
      "dolphin estate",
      "osborne",
      "park view",
      "victoria island",
      "banana island",
      "marina",
      "oniru",
      "lekki-phase I",
    ],
    district2: [
      "third roundabout",
      "osapa london",
      "alpha beach",
      "chisco",
      "agungi femi",
      "chevron",
      "vgc",
      "ajah",
      "lekki phase 2",
      "abraham adesanya",
      "badore",
    ],
  },
};
function compare() {
  var destination = document.getElementById("address2").value;
  var pick = document.getElementById("address1").value;
  var address = "you";
  console.log(pick + " " + destination);
  //   convert destination and pickup valyues to lowercase,
  //   destination = destination.toLowerCase();
  //   pick = pick.toLowerCase();
  // console.log(Object.keys(districts.mainland)[0].includes(pick));
  console.log(districts.mainland.district1.includes(pick));

  //DECLARING PRICES
  //Linking Objects to districts
  var placemd1 = districts.mainland.district1;
  var placemd2 = districts.mainland.district2;
  var placemd3 = districts.mainland.district3;
  var placemd4 = districts.mainland.district4;
  var placemd5 = districts.mainland.district5;
  var placeid1 = districts.island.district1;
  var placeid2 = districts.island.district2;

  //FOR MAINLAND
  if (placemd1.includes(pick) == true) {
      let price= 0;
    if (placemd1.includes(destination) == true) {
      price = 700;
      console.log("price is 700");return price;
    } else if (placemd2.includes(destination) == true) {
       price = 1400;
      
      console.log("price is 1400");
    } else if (placemd3.includes(destination) == true) {
      price = 1600;
      console.log("price is 1600");
    } else if (placemd4.includes(destination) == true) {
      price = 1800;
      console.log("price is 1800");
    } else if (placemd5.includes(destination) == true) {
      price = 2000;
      console.log("price is 2000");
    } else if (placeid1.includes(destination) == true) {
       price = 1400;
      console.log("price is 1400");
    } else if (placeid2.includes(destination) == true) {
       price = 1800;
      console.log("price is 1800");return price;
    }
  //   COMBINED ANSWER
  document.getElementById("get_estimate").style.color = "green";
  document.getElementById("get_estimate").innerHTML = "Estimated price";
  document.getElementById("estimate_result").innerHTML =
    "Your bill is <b>&#8358</b><strong>" +
    price +
    '</strong><br><a class="proceed-btn" href="contact.php">Proceed</a>';
  } else if (placemd2.includes(pick) == true) {
      let price = 0;
    if (placemd1.includes(destination) == true) {
      price = 1200;
      console.log("price is 1200");
    } else if (placemd2.includes(destination) == true) {
      price = 700;
      console.log("price is 700");
    } else if (placemd3.includes(destination) == true) {
      price = 1200;
      console.log("price is 1200");
    } else if (placemd4.includes(destination) == true) {
      price = 1600;
      console.log("price is 1600");
    } else if (placemd5.includes(destination) == true) {
      price = 2200;
      console.log("price is 2200");
    } else if (placeid1.includes(destination) == true) {
      price = 1600;
      console.log("price is 1600");
    } else if (placeid2.includes(destination) == true) {
      price = 2000;
      console.log("price is 2000");
    }
  //   COMBINED RESPONSE
  document.getElementById("get_estimate").style.color = "green";
      document.getElementById("get_estimate").innerHTML = "Estimated price";
      document.getElementById("estimate_result").innerHTML =
        "Your bill is <b>&#8358</b><strong>" +
        price +
        '</strong><br><a class="proceed-btn" href="contact.php">Proceed</a>';
  
   } else if (placemd3.includes(pick) == true) {
       let price=0;
    if (placemd1.includes(destination) == true) {
      price = 1400;
      console.log("price is 1400");
    } else if (placemd2.includes(destination) == true) {
      price = 1200;
      console.log("price is 1200");
    } else if (placemd3.includes(destination) == true) {
      price = 1000;
      console.log("price is 1000");
    } else if (placemd4.includes(destination) == true) {
      price = 1800;
      console.log("price is 1800");
    } else if (placemd5.includes(destination) == true) {
      price = 2000;
      console.log("price is 2000");
    } else if (placeid1.includes(destination) == true) {
      price = 1800;
      console.log("price is 1800");
    } else if (placeid2.includes(destination) == true) {
      price = 2200;
      console.log("price is 2200");
    }
      // COMBINED ANSWER
      document.getElementById("get_estimate").style.color = "green";
      document.getElementById("get_estimate").innerHTML = "Estimated price";
      document.getElementById("estimate_result").innerHTML =
        "Your bill is <b>&#8358</b><strong>" +
        price +
        '</strong><br><a class="proceed-btn" href="contact.php">Proceed</a>';
  } else if (placemd4.includes(pick) == true) {
      let price=0;
    if (placemd1.includes(destination) == true) {
      price = 1600;
      console.log("price is 1600");
    } else if (placemd2.includes(destination) == true) {
      price = 1400;
      console.log("price is 1400");
    } else if (placemd3.includes(destination) == true) {
      price = 1600;
      console.log("price is 1600");
    } else if (placemd4.includes(destination) == true) {
      price = 1000;
      console.log("price is 1000");
    } else if (placemd5.includes(destination) == true) {
      price = 2000;
      console.log("price is 2000");
    } else if (placeid1.includes(destination) == true) {
      price = 2000;
      console.log("price is 2000");
    } else if (placeid2.includes(destination) == true) {
      price = 2500;
      console.log("price is 2500");
    }
   // COMBINED ANSWER
   document.getElementById("get_estimate").style.color = "green";
   document.getElementById("get_estimate").innerHTML = "Estimated price";
   document.getElementById("estimate_result").innerHTML =
     "Your bill is <b>&#8358</b><strong>" +
     price +
     '</strong><br><a class="proceed-btn" href="contact.php">Proceed</a>';
  } else if (placemd5.includes(pick) == true) {
      let price=0;
    if (placemd1.includes(destination) == true) {
      price = 1800;
      console.log("price is 1800");
    } else if (placemd2.includes(destination) == true) {
      price = 2000;
      console.log("price is 2000");
    } else if (placemd3.includes(destination) == true) {
      price = 1600;
      console.log("price is 1600");
    } else if (placemd4.includes(destination) == true) {
      price = 1800;
      console.log("price is 1800");
    } else if (placemd5.includes(destination) == true) {
      price = 1000;
      console.log("price is 1000");
    } else if (placeid1.includes(destination) == true) {
      price = 2200;
      console.log("price is 2200");
    } else if (placeid2.includes(destination) == true) {
      price = 2500;
      console.log("price is 2500");
    }
  // COMBINED ANSWER
  document.getElementById("get_estimate").style.color = "green";
  document.getElementById("get_estimate").innerHTML = "Estimated price";
  document.getElementById("estimate_result").innerHTML =
    "Your bill is <b>&#8358</b><strong>" +
    price +
    '</strong><br><a class="proceed-btn" href="contact.php">Proceed</a>';
  }
  //DECLARING FOR ISLAND
  else if (placeid1.includes(pick) == true) {
      let price = 0;
    if (placemd1.includes(destination) == true) {
      price = 1400;
      console.log("price is 1400");
    } else if (placemd2.includes(destination) == true) {
      price = 1600;
      console.log("price is 1600");
    } else if (placemd3.includes(destination) == true) {
      price = 1800;
      console.log("price is 1800");
    } else if (placemd4.includes(destination) == true) {
      price = 2000;
      console.log("price is 2000");
    } else if (placemd5.includes(destination) == true) {
      price = 2200;
      console.log("price is 2200");
    } else if (placeid1.includes(destination) == true) {
      price = 800;
      console.log("price is 800");
    } else if (placeid2.includes(destination) == true) {
      price = 1400;
      console.log("price is 1400");
  }
   // COMBINED ANSWER
   document.getElementById("get_estimate").style.color = "green";
   document.getElementById("get_estimate").innerHTML = "Estimated price";
   document.getElementById("estimate_result").innerHTML =
     "Your bill is <b>&#8358</b><strong>" +
     price +
     '</strong><br><a class="proceed-btn" href="contact.php">Proceed</a>';
     } 
  else if (placeid2.includes(pick) == true) {
      let price =0;
    if (placemd1.includes(destination) == true) {
      price = 1600;
      console.log("price is 1600");
    } else if (placemd2.includes(destination) == true) {
      price = 1900;
      console.log("price is 1900");
    } else if (placemd3.includes(destination) == true) {
      price = 2000;
      console.log("price is 2000");
    } else if (placemd4.includes(destination) == true) {
      price = 2500;
      console.log("price is 2500");
    } else if (placemd5.includes(destination) == true) {
      price = 2500;
      console.log("price is 2500");
    } else if (placeid1.includes(destination) == true) {
      price = 1400;
      console.log("price is 1400");
    } else if (placeid2.includes(destination) == true) {
      price = 1000;
      console.log("price is 1000");
    }
  // COMBINED ANSWER
  document.getElementById("get_estimate").style.color = "green";
  document.getElementById("get_estimate").innerHTML = "Estimated price";
  document.getElementById("estimate_result").innerHTML =
    "Your bill is <b>&#8358</b><strong>" +
    price +
    '</strong><br><a class="proceed-btn" href="contact.php">Proceed</a>';
  }
  return address;
}

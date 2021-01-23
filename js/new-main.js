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
        "surulere,",
        "mushin,",
        "shomolu,",
        "ojuelegba,",
        "jibowu,",
        "jibowu",
        "yaba,",
        "onipanu,",
        "palmgroove,",
        "bariga,",
        "apapa,",
        "ijora,",
        "orile iganmu,",
        "suru",
        "costain,",
        "obanikoro,",
      ],
      district2: [
        "maryland",
        "maryland,",
        "ikeja,",
        "ikeja",
        "mma1",
        "mma2",
        "mm2,",
        "mm2",
        "olodi",
        "oshodi",
        "isolo",
        "ajao",
        "mma1,",
        "mma2,",
        "olodi,",
        "oshodi,",
        "isolo,",
        "ajao,",
        "gbagada,",
        "gbagada",
        "anthony",
        "anthony,",
      ],
      district3: [
        "iju",
        "ogba",
        "ojodu",
        "magodo",
        "iju,",
        "ogba,",
        "ojodu,",
        "magodo,",
        "omole phase 1,",
        "omole phase 2,",
        "alausa",
        "magodo",
        "alausa,",
        "magodo,",
        "mile 12",
        "ketu",
        "ketu,",
        "ojota",
        "ojota,",
        "iyana oworo",
        "oworonshoki",
        "oworonshoki,",
      ],
      district4: [
        "alimosho",
        "alimosho,",
        "ifako-ijaiye,",
        "igando",
        "igando",
        "ipaja",
        "idimu",
        "ikotun",
        "iyana-ipaja,",
        "iyana",
        "iyana,",
        "idimu,",
        "ikotun,",
        "egbeda",
        "egbeda,",
        "abule egba",
        "abule egba,",
        "orile agege",
        "agege",
        "ikorodu",
        "agege,",
        "ikorodu,",
      ],
      district5: [
        "iba",
        "ojo",
        "iba,",
        "ojo,",
        "trade",
        "volks",
        "okokomaiko",
        "lasu",
        "alaba",
        "volkswagen,",
        "okokomaiko,",
        "alaba international",
        "navy",
        "navy,",
        "satellite",
        "satellite,",
        "festac",
        "festac,",
        "amuwo",
        "mile 2",
        "mile 2,",
      ],
    },
    island: {
      district1: [
        "lagos island",
        "lagos",
        "ikoyi",
        "obalende",
        "ikoyi,",
        "obalende,",
        "dolphin",
        "dolphin,",
        "osborne",
        "osborne,",
        "park view",
        "victoria island",
        "banana island",
        "park view,",
        "banana",
        "marina",
        "oniru",
        "marina,",
        "oniru,",
        "lekki phase 1,",
      ],
      district2: [
        "3rd roundabout",
        "osapa",
        "alpha",
        "alpha beach",
        "chisco",
        "chisco,",
        "agungi femi",
        "chevron",
        "chevron,",
        "vgc",
        "ajah",
        "ajah,",
        "lekki phase 2,",
        "abraham adesanya,",
        "lekki phase 2",
        "abraham adesanya",
        "badore",
        "badore,",
      ],
    },
  };
 
  function compare() {
    var destination = document.getElementById("address2").value;
    var pick = document.getElementById("address1").value;
    var address = "you";
    //   convert destination and pickup valyues to lowercase,
     destination = destination.toLowerCase();
     pick = pick.toLowerCase();
     console.log(pick + " " + destination);

     var pickArray = pick.split(" ");
     var destinationArray = destination.split(" ");
     console.log(pickArray);
     console.log(destinationArray);

     
    // console.log(Object.keys(districts.mainland)[0].includes(pick));
   // console.log(districts.mainland.district1.includes(pick));
  
    //DECLARING PRICES
    //Linking Objects to districts
    var placemd1 = districts.mainland.district1;
    var placemd2 = districts.mainland.district2;
    var placemd3 = districts.mainland.district3;
    var placemd4 = districts.mainland.district4;
    var placemd5 = districts.mainland.district5;
    var placeid1 = districts.island.district1;
    var placeid2 = districts.island.district2;
  
    var loc1=pickArray[0];
    var loc2=destinationArray[0];

    var combo = pickArray[0] +" "+ pickArray[1];
    var combination = destinationArray[0]+" "+destinationArray[1];
    console.log(combo);
    console.log(combination);


    let price= 0;
   // FOR MAINLAND
    if(pickArray[0].includes("mile") || pickArray[1].includes("island") || pickArray[0].includes("park") || pickArray[0].includes("alpha") || pickArray[0].includes("abraham") || pickArray[0].includes("orile")|| pickArray[0].includes("3rd")|| pickArray[0].includes("agungi")|| pickArray[0].includes("abule")|| pickArray[1].includes("oworo")){
      loc1 = combo;

      console.log("This is it")
    }else if(loc2.includes("mile") || pickArray[1].includes("island") || pickArray[0].includes("park") || pickArray[0].includes("alpha") || pickArray[0].includes("abraham")|| pickArray[0].includes("3rd")|| pickArray[0].includes("orile")|| pickArray[0].includes("agungi") || pickArray[0].includes("abule")|| pickArray[1].includes("oworo")){
      loc2 = combination;
      //console.log("continue")
    }
    else if(pickArray[1].includes("phase")){
      combo=pickArray[0] +" "+ pickArray[1]+" "+pickArray[2];
      loc1=combo;
      //console.log("This one has phase")

    }

 console.log("This is pickup "+loc1);
 console.log("This is destination "+loc2);

    if (placemd1.includes(loc1) ==true) {  
      if (placemd1.includes(loc2) == true) {
        price = 700;
        console.log("price is 700");return price;
      } else if (placemd2.includes(loc2) == true) {
         price = 1400;
        console.log("price is 1400");
      } else if (placemd3.includes(loc2) == true) {
        price = 1600;
        console.log("price is 1600");
      } else if (placemd4.includes(loc2) == true) {
        price = 1800;
        console.log("price is 1800");
      } else if (placemd5.includes(loc2) == true) {
        price = 2000;
        console.log("price is 2000");
      } else if (placeid1.includes(loc2) == true) {
         price = 1400;
        console.log("price is 1400");
      } else if (placeid2.includes(loc2) == true) {
         price = 1800;
        console.log("price is 1800");return price;
      }
    } else if (placemd2.includes(loc1) == true) {
      if (placemd1.includes(loc2) == true) {
        price = 1200;
        console.log("price is 1200");
      } else if (placemd2.includes(loc2) == true) {
        price = 700;
        console.log("price is 700");
      } else if (placemd3.includes(loc2) == true) {
        price = 1200;
        console.log("price is 1200");
      } else if (placemd4.includes(loc2) == true) {
        price = 1600;
        console.log("price is 1600");
      } else if (placemd5.includes(loc2) == true) {
        price = 2200;
        console.log("price is 2200");
      } else if (placeid1.includes(loc2) == true) {
        price = 1600;
        console.log("price is 1600");
      } else if (placeid2.includes(loc2) == true) {
        price = 2000;
        console.log("price is 2000");
      }    
     } else if (placemd3.includes(loc1) == true) {
      if (placemd1.includes(loc2) == true) {
        price = 1400;
        console.log("price is 1400");
      } else if (placemd2.includes(loc2) == true) {
        price = 1200;
        console.log("price is 1200");
      } else if (placemd3.includes(loc2) == true) {
        price = 1000;
        console.log("price is 1000");
      } else if (placemd4.includes(loc2) == true) {
        price = 1800;
        console.log("price is 1800");
      } else if (placemd5.includes(loc2) == true) {
        price = 2000;
        console.log("price is 2000");
      } else if (placeid1.includes(loc2) == true) {
        price = 1800;
        console.log("price is 1800");
      } else if (placeid2.includes(loc2) == true) {
        price = 2200;
        console.log("price is 2200");
      }
    } else if (placemd4.includes(loc1) == true) {
      if (placemd1.includes(loc2) == true) {
        price = 1600;
        console.log("price is 1600");
      } else if (placemd2.includes(loc2) == true) {
        price = 1400;
        console.log("price is 1400");
      } else if (placemd3.includes(loc2) == true) {
        price = 1600;
        console.log("price is 1600");
      } else if (placemd4.includes(loc2) == true) {
        price = 1000;
        console.log("price is 1000");
      } else if (placemd5.includes(loc2) == true) {
        price = 2000;
        console.log("price is 2000");
      } else if (placeid1.includes(loc2) == true) {
        price = 2000;
        console.log("price is 2000");
      } else if (placeid2.includes(loc2) == true) {
        price = 2500;
        console.log("price is 2500");
      }
    } else if (placemd5.includes(loc1) == true) {
      if (placemd1.includes(loc2) == true) {
        price = 1800;
        console.log("price is 1800");
      } else if (placemd2.includes(loc2) == true) {
        price = 2000;
        console.log("price is 2000");
      } else if (placemd3.includes(loc2) == true) {
        price = 1600;
        console.log("price is 1600");
      } else if (placemd4.includes(loc2) == true) {
        price = 1800;
        console.log("price is 1800");
      } else if (placemd5.includes(loc2) == true) {
        price = 1000;
        console.log("price is 1000");
      } else if (placeid1.includes(loc2) == true) {
        price = 2200;
        console.log("price is 2200");
      } else if (placeid2.includes(loc2) == true) {
        price = 2500;
        console.log("price is 2500");
      }
    }
    //DECLARING FOR ISLAND
    else if (placeid1.includes(loc1) == true) {
      if (placemd1.includes(loc2) == true) {
        price = 1400;
        console.log("price is 1400");
      } else if (placemd2.includes(loc2) == true) {
        price = 1600;
        console.log("price is 1600");
      } else if (placemd3.includes(loc2) == true) {
        price = 1800;
        console.log("price is 1800");
      } else if (placemd4.includes(loc2) == true) {
        price = 2000;
        console.log("price is 2000");
      } else if (placemd5.includes(loc2) == true) {
        price = 2200;
        console.log("price is 2200");
      } else if (placeid1.includes(loc2) == true) {
        price = 800;
        console.log("price is 800");
      } else if (placeid2.includes(loc2) == true) {
        price = 1400;
        console.log("price is 1400");
    }
       } 
    else if (placeid2.includes(loc1) == true) {
      if (placemd1.includes(loc2) == true) {
        price = 1600;
        console.log("price is 1600");
      } else if (placemd2.includes(loc2) == true) {
        price = 1900;
        console.log("price is 1900");
      } else if (placemd3.includes(loc2) == true) {
        price = 2000;
        console.log("price is 2000");
      } else if (placemd4.includes(loc2) == true) {
        price = 2500;
        console.log("price is 2500");
      } else if (placemd5.includes(loc2) == true) {
        price = 2500;
        console.log("price is 2500");
      } else if (placeid1.includes(loc2) == true) {
        price = 1400;
        console.log("price is 1400");
      } else if (placeid2.includes(loc2) == true) {
        price = 1000;
        console.log("price is 1000");
      }
    }
     // COMBINED ANSWER
     document.getElementById("get_estimate").style.color = "green";
     document.getElementById("get_estimate").innerHTML = "Estimated price";
     document.getElementById("estimate_result").innerHTML =
       "Your bill is <b>&#8358</b><strong>" +
       price +
       '</strong><br><a class="proceed-btn" href="contact.php">Proceed</a>';
     console.log("This roduct is costing"+price);
    return address;
  }
  
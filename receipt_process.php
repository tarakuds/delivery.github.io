<?php
session_start();
$address1 = $_POST['pickup_address']="";
$address2 = $_POST['delivery_address']="";
$price = "";
$address1Err = $address2Err = "";
// $price = 1000;



// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if(empty($_POST['pickup_address'])){
//         $address1Err = "No address selected";
//     }else{
//         $address1 = $_POST['pickup_address'];
//     }
//     if(empty($_POST['delivery_address'])){
//         $address2Err = "No address selected";
//     }else{
//         $address2 = $_POST['delivery_address'];
//     }

// }
// $address1 = $_POST['pickup_address'];
echo "Yes I have been clicked<br />";
$address = "";
if (isset($_POST['check_estimate'])){
  echo "I am clicked<br/>";
  $address = $_POST['pickup_address'];
  echo $address;
}
// if(isset($_POST['check_estimate'])){
//     $address1 = $_POST['pickup_address'];
//     echo "ÿes its set";
//     echo "Address 1 ".$address1."<br/>";
//     echo "Address 2 ".$_POST['delivery_address']."<br/>";

// }

if(!empty($_POST['check_estimate'])){
    if(empty($_POST['pickup_address'])){
        $address1Err = "No address selected";
    }else{
        $address1 = $_POST['pickup_address'];
    }
    if(empty($_POST['delivery_address'])){
        $address2Err = "No address selected";
    }else{
        $address2 = $_POST['delivery_address'];
    }
    echo $address1;
}
else{
    if(empty($_POST['pickup_address'])){
        $address1Err = "No address selected";
    }else{
        $address1 = $_POST['pickup_address'];
       
    }
    $add = $_SESSION['pickup_address']= 'do it';
    echo $address1;
    
}

// $address1 = $_POST['pickup_address'];
// $address2 = $_POST['delivery_address'];
echo $address1;
$price = 5000;





?>
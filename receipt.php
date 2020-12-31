<?php
    include('receipt_process.php');
    require_once('click.php');
    echo "Yes I have been clicked<br />";
$address = "";
if (isset($_POST['check_estimate'])){
  echo "I am clicked<br/>";
  $address = $_POST['pickup_address'];
  echo $address;
}
    $pickup_address="";
$pickup_address = $_POST['pickup_address'];
 echo($pickup_address);
?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/receipt.css">
    <script src="js/click.js"></script>
</head>
<script src="js/click.js">
    var res = "success";
  </script>
 
<body>
<?php
   echo "<script>document.writeln(res);</script>";
?>
    <h1>This is  the receipts</h1>
<p id="this">We shall pick up from : </p>
    <p><?php echo $price;  ?></p>
    <p><?php echo $add ?></p>

</body>
</html>
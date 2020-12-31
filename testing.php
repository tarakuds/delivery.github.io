<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        result($_POST);
        if(isset($_POST['submit'])){
            echo "Your Nmae:". $_POST['name'];
        }
    ?>

    <form action="" method="post">
        <p>NAME: <input type="text" name="name" id=""></p>
        <p>Email: <input type="email" name="email" id=""></p>
        <p>Phone Number: <input type="number" name="phone" id=""></p>
        <input type="submit" value="send" name="submit">
    </form>
</body>
</html>

<?php
    function result($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    };
?>
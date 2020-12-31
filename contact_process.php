<?php
        
        $senderName = $_POST["name"];
        $senderAdd = $_POST["pick-up_address"];
        $deliveryTime = $_POST["deliverytime"];
        $senderEmail = $_POST["email"];
        $senderPhone = $_POST["phone"];
        $price = 500;
       
        // $recipientAdd = $_POST["drop-off_address"];

        if(isset($_POST['submit'])){
                if(empty($senderName) || empty($senderEmail)){
                        $error = "Please fill all required fields";
                        $_SESSION["error"] =  $error;
                        echo $error;
                        // redirect
                        header("Location: contact.php");
                         exit;
                 }else{
                        $email_from = "no-reply@waveus.com";
                        $email_subject = "Request Confirmation";
                        $email_body = "You have just made a request for a delivery. Your email address is $senderEmail \n"."Here is to confirm your request is processing." . "Name: $senderName \n Email Address: $senderEmail\n\n"."Price : $price";;
                        //$to = "omotarakuds@gmail.com";
                        $headers = "From: $email_from \r\n" ."CC:itemsandmoreng@gmail.com";
                        $success = mail($senderEmail, $email_subject,$email_body,$headers);
                        //mail($senderEmail, $message)

                        if($success){
                                $thankYou="<p>Thank you! Your message has been sent.</p>";
                                echo "hello". $senderPhone ." ".$thankYou;
                                

                        }else{
                                echo "something went wrong";
                        }
                        die();
                       
                 }
                 


        }
        



        // sending mail

//         if( empty($errors))
// {
// $to = $myemail;
// $email_subject = "Contact form submission: $name";
// $email_body = "You have received a new message. ".
// " Here are the details:\n Name: $name \n ".
// "Email: $email_address\n Message \n $message";
// $headers = "From: $myemail\n";
// $headers .= "Reply-To: $email_address";
// mail($to,$email_subject,$email_body,$headers);
// //redirect to the 'thank you' page
// header('Location: contact-form-thank-you.html');
// }
?>
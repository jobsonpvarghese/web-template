<?php 
if(isset($_POST['submit'])){
    $to = "fenstrokdigital@gmail.com"; // this is your Email address
    $from = "fenstrokdigital@gmail.com"; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    $subject = "Form submission";
    $message = "Name : " . $name . "\n" . "Email : " . $email . "\n" . "Message : " . $_POST['message'];


    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    header('Location: contact.html');
    exit;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>

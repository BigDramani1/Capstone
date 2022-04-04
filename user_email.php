<?php

//get data from form  
$name = $_POST['firstname'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "a.dramani@aisghana.org";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: capstone_divanta@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$txt,$headers);
}
//redirect
    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="home.php";</script>';

?>


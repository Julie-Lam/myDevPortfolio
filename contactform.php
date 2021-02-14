<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name']; 
    $emailFrom = $_POST['email']; 
    $subject = $_POST['subject']; 
    $message = $_POST['message']; 

    $mailTo = "lam.julie@hotmail.com"; 
    $headers = "From: ".$emailFrom; 
    $txt = "You have received an email from ".$name.".\n\n".$message;  

    mail($mailTo, $subject, $txt, $headers); 
    header("Location: index.php?mailsend"); 


}




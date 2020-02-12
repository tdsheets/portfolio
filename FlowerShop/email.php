<?php
include "https://p9.secure.webhosting.luminate.com/forms?ssc=us1&login=yzassri";
/*if (isset($_POST) ) {
    
    //form validation vars
    $formok = true;
    $errors = array();
    
    //submission data
    $ipaddress = $_SERVER['REMOTE_ADDRESS'];
    $date = date('d/m/Y');
    $time = date('H:i:s');
    
    //form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    //form validation goes here
    //validate name is not empty
    if(empty($name)) {
        $formok = false;
        $errors[] = "You have not entered a name";
    }
    
    //validate email address is not empty
    if(empty($email)) {
        $formok = false;
        $errors[] = "You have not entered an email address";
    }
    //validate email address is valid
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formok = false;
        $errors[] = "You have not entered a valid email address";
    }
    //validate message is not empty
    if(empty($message)) {
        $formok = false;
        $errors[] = "You have not entered a message";
    }
    
    //if this is not an ajax request
    if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
        
        //set session variable
        session_start();
        $_SESSION['cf_returndata'] = $returndata;
        
        //redirect back to form
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
}*/

/*$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent = "From: $name\r\n Message: $message";
$recipient = "tara@sheetsngeekles.com";
$subject = "Floral Contact Form";
$mailheader = "From: $email\r\n";
mail("tara@sheetsngeekles.com", "Floral Contact Form", $formcontent, $mailheader) or die("Error!");
echo "Thank you!" . " =" . "<a href='form.html' style='text-decoration:none; color: #ff0099;'> Return Home</a>";*/

?>
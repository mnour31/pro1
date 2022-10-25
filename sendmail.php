<?php
    //we need to get our variables first
    
    $email_to =   'mmmnnnmmm1122333@gmail.com'; //the address to which the email will be sent
    $name     =   $_POST['user_name'];  
    $email    =   $_POST['user_email'];
    $subject  =   $_POST['user_subject'];
    $message  =   $_POST['user_message'];
    
    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know 
     who are we replying to. */
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..      
    }else{
        echo '<h2>failed</h2>';// ... or this one to tell it that it wasn't sent    
    }
?>
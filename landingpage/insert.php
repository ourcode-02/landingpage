<?php  
$to="abcd@gmail.com";
     $name =  $_POST["name"];
    $email =  $_POST["email"];
   $message =  $_POST["message"];
    $subject = "landing pahe";
    $subject2 = "Reply";
    $message = "New Query Details :" ."\n\n" ."name:" . $name. "\n\n" ."email:" . $email  . "\n\n"."message:" . $message  . "\n\n";
    //$message2 = "Thank You For Contacting Us , we will contact you shortly.";
    $headers = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender 
    echo "Mail Sent. Thank you ,  we will contact you shortly.";
    
 ?>
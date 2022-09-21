<?php 
if(isset($_POST['email'])){
    // 530 5.7.0 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $enquiry = $_POST['enquire'];

    $subject = "form submission";
    $message = "Name: ".$name."\n"."Phone: ".$enquiry."\n";
    $hedaers = "From:".$email.">\r\n";
    $to = "asitmandal492@gmail.com";
   if(mail($to,$subject,$message,$hedaers)){
     echo "success";
   }
   else{
    echo "something went wrong";
   }
   

}
   
   
?> 
<?php
  $name = $_REQUEST['name'] ;
  $email = $_REQUEST['email'] ;
  $phonenumber = $_REQUEST['phonenumber'] ;
  $HowMany1 = $_REQUEST['HowMany1'] ;
  $HowMany2 = $_REQUEST['HowMany2'] ;
  $HowMany3 = $_REQUEST['HowMany3'] ;
  $HowMany4 = $_REQUEST['HowMany4'] ;
  $Size1 = $_REQUEST['Size1'] ;
  $address = $_REQUEST['address'] ;
  $buyer = "\n $name \n $email \n $phonenumber" ;
  
  $message = "Here's what they ordered: \n No Strings EP - Phyiscal Copy: $HowMany1 \n  Sabado Sessions - Physical Copy: $HowMany2 \n Tshirts: $HowMany3   Size(s): $Size1 \n Wristbands: $HowMany4 \n \n Their Address: \n $address \n \n Buyer Info: \n $buyer" ;

  mail( "theolesband@gmail.com","Olé Merch Order!",
    $message);
  header( "Location: http://www.theolesband.com/ThankYou.html" );
?>




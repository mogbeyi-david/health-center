<?php
include("../../model/database/database_fns.php");
function send($immunization,$email_address,$date){

         $status = True;
         $email_address = "xyz@somedomain.com";
         $subject = "Your ".$immunization." immunization";
         $message = "<b>Your Child has </b>" . $immunization. " immunization on ". $date;
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         $retval = mail ($email_address,$subject,$message,$header);
         if( $retval == true ) {
            $status = True;
         }else {
            $status = False;
            echo "Message not sent to: " .$email_address;
   }
}

if(isset($_POST["submit"])){

$immunization = $_POST["diseases"];
$date = $_POST["date"];
$email_addresses= mailer();
$all_arrays = array();
foreach($email_addresses as $x => $x_value)
{
  array_push($all_arrays,$x_value);
}
$count = count($all_arrays);
for($i=0; $i<$count;$i++)
{
  for ($j = 0; $j < count($all_arrays[0]); $j++)
    {
    send($immunization,$all_arrays[$i][$j],$date);
    }

}
}
?>

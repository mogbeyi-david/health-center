<?php
function convert($string)
{
    return htmlspecialchars($string);
}
if(isset($_POST["submit"])){
    include("../../model/database/server.php");
    $firstname = convert($_POST["firstname"]);
    $lastname = convert($_POST["lastname"]);
    $email = convert($_POST["email"]);
    $contact = convert($_POST["contact"]);
    $subject = convert($_POST["subject"]);
    $message = convert($_POST["message"]);
    $date = date("Y-m-d");
    $time = date("h:i:sa");


$query = "INSERT INTO messages(firstname , lastname , email , contact , subject , message , dates , times)
VALUES('$firstname', '$lastname' , '$email' , '$contact' , '$subject' , '$message', '$date', '$time')";

if(mysqli_query($connection , $query))
{
    echo "<h2>Message Sent Successfully</h2>";
}else
{
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}
}
?>
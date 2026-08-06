<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "connect.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql = "INSERT INTO contact (name,email,message)
            VALUES ('$name','$email','$message')";


    if(mysqli_query($conn,$sql))
    {
        echo "Message Sent Successfully!";
        echo "<br>";
        echo "<a href='index.php'>Back to Portfolio</a>";
    }
    else
    {
        echo "Insert Error: " . mysqli_error($conn);
    }

}
else
{
    echo "No form data received";
}


mysqli_close($conn);

?>
<?php
$servername ="localhost" ;
$username ="root";
$password ="";
$database="hello";

$conn = mysqli_connect($servername, $username, $password,$database);



//Die if connection was not successful
if(!$conn){
    die("sorry we failed to connect:" . mysqli_connect_error());
}
//else{
//echo "connection was successful";
//}

?>
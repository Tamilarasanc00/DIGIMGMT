<?php
$servername = "localhost";
$username = "digimgmt";
$password = "Fokre#65654995656";
$dbname = "digimgmt_model";

//check connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("could not connect:".$conn->connect_error);
}
?>
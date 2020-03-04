<?php 
class DB
{
    public function connect(){
    $servername = "localhost";
    $usernamedb = "root";
    $passworddb = "";
    $dbname="shoponline";

// Create connection
$conn = new mysqli($servername, $usernamedb, $passworddb,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    return $conn;
}
    }

}
?>
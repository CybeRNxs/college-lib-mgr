<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "global_institute_of_management_library";
$conn = new mysqli($server,$user, $pass, $dbname);

if (!$conn){
    echo "Oopps..! : {$conn -> connection_error}";
}
else{
    echo "Hi Issita";
}
?>
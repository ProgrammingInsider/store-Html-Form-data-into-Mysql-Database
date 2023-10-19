<?php

$servername = "localhost";
$username = "";
$password="";
$dbname = "personal_info";  // it is database name


//It's to make connection with server database
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}else{
    //echo "Connected Successfully";
}


// Accepting datas from client

if($_SERVER["REQUEST_METHOD"] == TRUE){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $phonenumber = $_POST["phonenumber"];
}


// Inserting datas to database


$sql = "INSERT INTO personal_datas(firstname,lastname,age,phonenumber)
        VALUES('$firstname','$lastname',$age,$phonenumber)";


if($conn->query($sql) === TRUE){

 echo "All Personal Informations are stored succesfully";

}else{
  echo "Error".$sql;
}









?>




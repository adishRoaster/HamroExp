<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("Connection to this database failed due to" . mysqli_connect_error());
}
//echo "success connected to database !!"
$sql = "INSERT INTO `order_form` (`name`, `email`, `phone`, `address`, `how many`, `details`) VALUES ('First Second', 'blabla@gmail.com', '9828799999', 'Biratnagar,Nepal,Kanchanbari-4', '60', 'Cheese Burst Pizza \r\nChicken momo', );"

?>
<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo
    "<script> alert('submitted sucessfully');</script>";
}
else{
    echo 
    "<script> alert('submitted unsucessfully');</script>";
}
mysqli_select_db($con,'DONATION');
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$adhar=$_POST["adhar"];
$organ=$_POST["organ"];

$query="INSERT INTO organs(name, age, gender, phone,adhar,organ) VALUES ('$name', '$age', '$gender', '$phone','$adhar', '$organ')";

mysqli_query($con,$query);
?>
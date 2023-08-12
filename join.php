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


$query="INSERT INTO joined(name, age, gender, phone,adhar) VALUES ('$name', '$age', '$gender', '$phone','$adhar')";

mysqli_query($con,$query);
?>
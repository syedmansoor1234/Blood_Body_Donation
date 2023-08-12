<?php
$con=mysqli_connect('localhost','root');
if($con){
    echo
    "<script> alert('submitted sucessfully');</script>";
}
else{
    "<script> alert('submitted unsucessfully');</script>";
}
mysqli_select_db($con,'DONATION');
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$adhar=$_POST["adhar"];
$blood=$_POST["blood"];

$query="INSERT INTO bloods(name, age, gender, phone,adhar,blood) VALUES ('$name', '$age', '$gender', '$phone','$adhar', '$blood')";

mysqli_query($con,$query);
?>
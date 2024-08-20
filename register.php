<?php

$conn = mysqli_connect("localhost","root","","lms");

if(isset($_POST['submit']))
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['Password'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

$query = "INSERT into `users` (name,email,password,mobile,address) values('$name','$email','$password','$mobile','$address')";
$res= mysqli_query($conn,$query);
if($res){
    
    header('location:singup.php?msg=<script> alert("you are registered"); </script>');
}
?>

    


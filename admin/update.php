<?php
$conn=mysqli_connect("localhost","root","","lms");

$_GET['id'];
if(isset($_POST['update'])){

$name=$_POST['name'];
$email1=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$address=$_POST['address'];


$query ="UPDATE `admin` SET `name` = '$name', `email` = '$email1', `mobile` = '$mobile', `password` = '$password', `addres` = '$address' WHERE `admin`.`id` =$_GET[id]";

// $query = "UPDATE `users` set (name,email,mobile,password,address) values('$name','$email1','$mobile','$password','$address') where email='$email1'";
$res=mysqli_query($conn,$query );
if($res){
 echo '<script>alert("updated successfully")</script>';

header('location:viewprofile.php');

}
}



?>
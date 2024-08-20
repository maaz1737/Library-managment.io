<?php
$conn = mysqli_connect("localhost", "root", "", "lms");
session_start();

if(isset($_POST['update'])){

   $bookname= $_POST['bookname'];
   $borrowername= $_POST['borrowername'];
   $date= $_POST['date'];
   $address= $_POST['address'];

   $query="INSERT into `issue_books` (`book_name`,`book_borrower`,`issue_date`,`address`) values('$bookname','$borrowername','$date','$address')";
    
   $res =mysqli_query($conn,$query);
   if($res){

    header('location:issuebooks.php');
   }

}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <style>
        #side_bar {
            background-color: whitesmoke;
            padding: 50px;
            width: 306px;
            height: 450px;
        }

        marquee {
            color: blue;

        }

        a {
            text-decoration: none;
        }
        

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Library Managment System(LMS) </a>
            </div>
            <font style="color:white;"><strong style="text-transform:capitalize;">Welcome:<?php echo $_SESSION['name'];   ?></strong></font>
            <font style="color:white;"><strong><?php echo $_SESSION['email'];   ?></strong></font>
                <div class="dropdown">
            <div class="dropdown">
                
                    <span class="text-light dropdown-toggle mx-4" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        My Profile </span>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">


                        <li><a class="dropdown-item" href="viewprofile.php">View Profile</a>
                            <a class="dropdown-item" href="editprofile.php">Edit Profile</a>
                            <a class="dropdown-item" href="changepassword.php">Change Password</a>
                        </li>
                    </ul>
                    <a class="text-light nav-item" href="logout.php">Logout</a>
                </div>
    </nav><br>
    <span>
        <marquee behavior="" direction="left">
            <h5>Library Opens at 8:00 AM and close at 5:30 pm. Come and enhance your kowledge.</h5>
        </marquee>
    </span>
    <div class="row">
        <div class="col-md-3"></div>
    </div>


  <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">

        <form action="" method="post">

<div class="form-group my-3">
    <label for="name">Book Name :</label>
    <input type="text" name="bookname" class="form-control" required>   
</div>                                                                 
                                                                        
<div class="form-group my-3">
    <label for="name">Book Borrower :</label>                          
    <input type="text" name="borrowername" class="form-control" >
</div>

<div class="form-group my-3">
    <label for="name">Issue_Date :</label>
    <input type="date" name="date" class="form-control" >
</div>

<div class="form-group my-3">
    <label for="name">Address:</label>
    <textarea name="address" id="" cols="70"></textarea>
</div>





<button class="btn btn-primary" name="update">customers</button>

</form>




    </div>


    </div>



</body>

</html>
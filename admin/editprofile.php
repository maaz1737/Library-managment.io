<?php
session_start();
$conn=mysqli_connect("localhost","root","","lms");

     $name="";
     $email=$_SESSION['email'];
     $mobiel="";
     $address="";
     

    $query = "SELECT * from `admin` where `email`='$email'";
    $res = mysqli_query($conn, $query);
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            
            $id =$row['id'];
            $name=$row['name'];
            $email1=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            $address=$row['addres'];
           
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
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="update.php?id=<?php echo $id;?>" method="post">
                <div class="form-group">
                    <label for="">Name:</label>
                    <input type="text" class="form-control" value="<?php echo $name;    ?>"
                    name="name">
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" class="form-control" value="<?php echo $email1;    ?>" name="email">
                </div>
                <div class="form-group">
                    <label for="">Mobile:</label>
                    <input type="number" class="form-control" value="<?php echo $mobile;    ?>" name="mobile">
                </div>
                
                <div class="form-group">
                    <label for="">password:</label>
                    <input type="password" class="form-control" value="<?php echo $password;    ?>" name="password">
                </div>
                <div class="form-group">
                    <label for="">Address:</label>
                    <textarea rows="3" cols="70" class="form-control" name="address"><?php echo $address;?></textarea>
                </div>
                <button type="submit" class="btn btn-primary my-4" name="update">update</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>







    </div>


    </div>



</body>

</html>
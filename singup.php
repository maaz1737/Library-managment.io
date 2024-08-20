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
        marquee{
            color: blue;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Library Managment System(LMS) </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">User Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Register</a>
                </li>
            </ul>

        </div>
    </nav><br>
    <span>
        <marquee behavior="alternate" direction="left">Library Opens at 8:00 AM and close at 5:30 pm. Come and enhance your kowledge.</marquee>
    </span>
    <div class="row mx-4">
        <div class="col-md-4" id="side_bar">
            <h5>libary Timing</h5>
            <ul>
                <li>Opening Time : 8:00 AM</li>
                <li>Closing Time : 5:30 PM </li>
                <li>Sunday off</li>
            </ul>
            <h5>Our Services</h5>
            <ul>
                <li>Clean Environment</li>
                <li>Comfortable Chairs</li>
                <li>History, Science, Literature, Science Fictional Books.</li>
            </ul>

        </div>
        <div class="col-md-8" id="main_content">
            <center>
                <h3>User registration Form</h3>
            </center>
            <form action="register.php" method="post">

                <div class="form-group">
                    <label for="name">Full Name :</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="name">E-Mail :</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
               
                <div class="form-group">
                    <label for="Password">Password :</label>
                    <input type="Password" name="Password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Mobile">Mobile :</label>
                    <input type="number" name="mobile" class="form-control" required>
                </div>
                <div class="form-group my-4">
                    <label for="address">Address</label>
                    <textarea rows="3" cols="80" name="address" id=""></textarea>
                </div>
                <button class="btn btn-primary" name="submit">Register</button>

            </form>

        </div>


    </div>



</body>

</html>
<?php

if(isset($_GET['msg'])){

    echo $_GET['msg'];
}





?>
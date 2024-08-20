

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
                    <a class="nav-link" href="admin/index.php">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">User Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="singup.php">Register</a>
                </li>
            </ul>

        </div>
    </nav><br>
    <span>
        <marquee behavior="scroll" direction="left"><h5>Library Opens at 8:00 AM and close at 5:30 pm. Come and enhance your kowledge.</h5></marquee>
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
                <h3>Login Form</h3>
            </center>
            <form action="" method="post">

                <div class="form-group">
                    <label for="email">E-Mail :</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="Password">Password :</label>
                    <input type="Password" name="Password" class="form-control" required>
                </div>


                <button class="btn btn-primary my-3" name="login">Login</button>

            </form>
            <?php
$conn = mysqli_connect("localhost", "root", "", "lms");

session_start();

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['Password'];

    $query = "SELECT * from `users` where `email`='$email'";
    $res = mysqli_query($conn, $query);
    if ($res) {
        while ($row = mysqli_fetch_assoc($res)) {
            if ($row['email'] == $_POST['email']) {

                if ($row['password'] == $password) {
                
                    $_SESSION['name']=$row['name'];
                    $_SESSION['email']=$row['email'];
                    header('location:userdashboard.php');
                    
                }
                else{
                    ?>
                 <br> <center><span class="alert-danger">wrong password</span></center>
                    <?php
                }
            }
            else{
                echo "wrong email id";
            }
        }
    }
}





?>


        </div>


    </div>



</body>

</html>



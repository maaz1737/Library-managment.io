<?php
$conn = mysqli_connect("localhost", "root", "", "lms");
session_start();










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
    
    <div class="container">
        <table class="table table-success table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">Book Name</th>
                    <th scope="col">Book Borrower</th>
                    <th scope="col">Issue Date</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $query = "SELECT * from `issue_books`";
                $res = mysqli_query($conn, $query);
                if ($res) {
                    while ($row = mysqli_fetch_assoc($res)) {

                        $Book_Name = $row['book_name'];
                        $Issue_Date = $row['issue_date'];
                        $Book_Borrower = $row['book_borrower'];
                        $address = $row['address'];

                        echo '
       <tr>
       <td>' . $Book_Name . '</td>
       <td>' . $Book_Borrower . '</td>
       <td>' .  $Issue_Date . '</td>
       <td>' . $address . '</td>
       
       </tr>';
                    }
                }

                ?>
            </tbody>
        </table>

        <button class="btn btn-info"><a href="aib.php">Add Book</button>

    </div>

    </div>
    <div class="col-md-3"></div>
    </div>


      




    </div>


    </div>



</body>

</html>
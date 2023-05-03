<?php
// include('connect.php');
// session_start();
$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password);

if (!$con) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Donor</title>
</head>

<body>

    <!-- <div id="full">
        <div id="inner_full">
            <div id="header">
                <h2><a href="home.php" style="text-decoration:none;color: pink;">Blood Bank Management System</a></h2>
            </div>
            <div id="body">
                <br>
                <style>
                    h1 {
                        color: aqua;
                    }
                </style>
                <h1>Blood Donation</h1>
                <center>
                    <div id="form">
                        <form action="donor-reg.php" method="post">
                            <table>
                                <tr>
                                    <td width="200px" height="50px">Enter Name</td>
                                    <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                                    <td width="200px" height="50px">Enter Last Name</td>
                                    <td width="200px" height="50px"><input type="text" name="lname" placeholder="Enter Last Name"></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Enter Address</td>
                                    <td width="200px" height="50px"><textarea name="address"></textarea></td>
                                    <td width="200px" height="50px">Enter City</td>
                                    <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Enter Age</td>
                                    <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
                                    <td width="200px" height="50px">Select Blood Group</td>
                                    <td width="200px" height="50px">
                                        <select name="bgroup">
                                            <option>O+</option>
                                            <option>AB+</option>
                                            <option>A+</option>
                                            <option>B+</option>
                                            <option>O-</option>
                                            <option>AB-</option>
                                            <option>A-</option>
                                            <option>B-</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Enter E-Mail</td>
                                    <td width="200px" height="50px"><input type="text" name="email" placeholder="@gmail.com"></td>
                                    <td width="200px" height="50px">Enter Mobile No</td>
                                    <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="sub" value="Save"></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </center>
            </div>

            <div id="footer">
                <button type="button" class="btn btn-info" id="logout"><a href="admin_user.php">Log out</a></button>
            </div>
        </div>
    </div> -->

    <nav class="navbar navbar-expand-lg navbar-success" style="background-color: #e3e3e3;">
        <a class="navbar-brand" href="#" style="margin-left: 3%;">Blood Bank Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 15%; padding:0%">
            <ul class="navbar-nav" style="margin-left:35%;">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admin Login</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User Section
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="user-login.php">User Login</a>
                        <a class="dropdown-item" href="user-signup.php">User Registration</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="registration">
        <div class="container-lg">
            <div class="title">Donor Registration</div>
            <form action="" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="name" placeholder="First Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter Email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mobile Number</span>
                        <input type="text" name="mno" placeholder="Enter Mobile No" required>
                    </div>

                    <div class="input-box">
                        <span class="details">Age</span>
                        <input type="text" name="age" placeholder="Enter Age" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Blood Group</span>
                        <select name="bgroup" class="bgroup">
                            <option>O+</option>
                            <option>AB+</option>
                            <option>A+</option>
                            <option>B+</option>
                            <option>O-</option>
                            <option>AB-</option>
                            <option>A-</option>
                            <option>B-</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" name="address" placeholder="Address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">City</span>
                        <input type="text" name="city" placeholder="City" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="sub" value="Register">
                </div>
            </form>
        </div>
    </div>


    <?php
    $op = 0;
    $ap = 0;
    $bp = 0;
    $abp = 0;
    $on = 0;
    $an = 0;
    $bn = 0;
    $abn = 0;
    if (isset($_POST['sub'])) {
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $age = $_POST['age'];
        $bgroup = $_POST['bgroup'];
        $mno = $_POST['mno'];
        $email = $_POST['email'];

        $sql = "INSERT INTO `bbp`.`donor_reg` (`name`, `lname`, `email`, `mno`, `age`, `bgroup`, `quantity`, `address`, `city`) VALUES ('$name', '$lname', '$email', '$mno', '$age', '$bgroup', '1', '$address', '$city')";
        if ($bgroup == 'O+') {
            $op++;
            $sql1 = "UPDATE `bbp`.`stock_list` SET `quantity`='$op' WHERE `bgroup`='$bgroup'";
            $con->query($sql1);
        } else if ($bgroup == 'A+') {
            $ap++;
            $sql2 = "UPDATE `bbp`.`stock_list` SET `quantity`='$ap' WHERE `bgroup`='$bgroup'";
            $con->query($sql2);
        } else if ($bgroup == 'B+') {
            $bp++;
            $sql3 = "UPDATE `bbp`.`stock_list` SET `quantity`='$bp' WHERE `bgroup`='$bgroup'";
            $con->query($sql3);
        } else if ($bgroup == 'AB+') {
            $abp++;
            $sql4 = "UPDATE `bbp`.`stock_list` SET `quantity`='$abp' WHERE `bgroup`='$bgroup'";
            $con->query($sql4);
        } else if ($bgroup == 'O-') {
            $on++;
            $sql5 = "UPDATE `bbp`.`stock_list` SET `quantity`='$on' WHERE `bgroup`='$bgroup'";
            $con->query($sql5);
        } else if ($bgroup == 'A-') {
            $an++;
            $sql6 = "UPDATE `bbp`.`stock_list` SET `quantity`='$an' WHERE `bgroup`='$bgroup'";
            $con->query($sql6);
        } else if ($bgroup == 'B-') {
            $bn++;
            $sql7 = "UPDATE `bbp`.`stock_list` SET `quantity`='$bn' WHERE `bgroup`='$bgroup'";
            $con->query($sql7);
        } else if ($bgroup == 'AB-') {
            $abn++;
            $sql8 = "UPDATE `bbp`.`stock_list` SET `quantity`='$abn' WHERE `bgroup`='$bgroup'";
            $con->query($sql8);
        }


        if ($con->query($sql) == true) {
            echo "<script>alert('Blood Donation Successful')</script>";
        } else {
            echo "<script>alert('Donor Registration Failed')</script>";
        }
    }
    ?>
</body>

</html>
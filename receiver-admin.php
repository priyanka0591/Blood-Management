<?php
include('connect.php');
// session_start();
// $servername = "localhost";
// $username = "root";
// $password = "";
// $con = mysqli_connect($servername, $username, $password);

// if (!$con){
//     die("Sorry we failed to connect: ". mysqli_connect_error());
// }
// else{
//     echo "Connection was successful<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiver Admin</title>
</head>

<body>

    <!-- <div id="full">
        <div id="inner_full">
            <div id="header">
                <h2><a href="home.php" style="text-decoration:none;color: pink;">Blood Bank Management System</a></h2>
            </div>
            <div id="body">
                <br> -->

    <!-- <style>
                    h1 {
                        color: aqua;
                    }
                </style>
                <h1>Blood Collection</h1>
                <center>
                    <div id="form">
                        <form action="" method="post">
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
            </div> -->
    <!-- <div id="footer"><h4 align="center">Copyright@bloodbank</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div> -->
    <!-- #region 
           
            <div id="footer">
                <button type="button" class="btn btn-info" id="logout"><a href="admin_user.php">Log out</a></button>
            </div>
        </div>
    </div>-->



    <nav class="navbar navbar-expand-lg navbar-success" style="background-color: #e3e3e3;">
        <a class="navbar-brand" href="#" style="margin-left: 3%;">Blood Bank Portal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 15%; padding:0%">
            <ul class="navbar-nav" style="margin-left:35%;">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin-login.php">Admin Login</a>
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
            <div class="title">Blood Collection</div>
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


    // $op=0; $ap=0; $bp=0; $abp=0; $on=0; $an=0; $bn=0; $abn=0;
    if (isset($_POST['sub'])) {
        $name = $_POST['name'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $age = $_POST['age'];
        $bgroup = $_POST['bgroup'];
        $mno = $_POST['mno'];
        $email = $_POST['email'];

        $q = "SELECT * FROM `bbp`.`receiver_reg` WHERE `email`='$email' && `mno`='$mno'";
        $result1 = mysqli_query($con, $q);

        if (!mysqli_fetch_row($result1)) {
            $sql = "INSERT INTO `bbp`.`receiver_reg` (`name`, `lname`, `address`, `city`, `age`, `bgroup`, `quantity`, `email`, `mno`) VALUES ('$name', '$lname', '$address', '$city', '$age', '$bgroup', '1', '$email', '$mno')";
            if ($con->query($sql) == true) {
                echo "<script>alert('Receiver Registration Successful')</script>";
            } else {
                echo "<script>alert('Receiver Registration Failed')</script>";
            }
        } else {
            $result1 = mysqli_query($con, $q);
            $rown = mysqli_fetch_row($result1);
            $quantity = $rown[7];
            $quantity++;
            $q1 = "UPDATE `bbp`.`receiver_reg` SET `quantity`='$quantity' WHERE `email`='$email' && `mno`='$mno'";
            $con->query($q1);
            echo "<script>alert('Collected Successfully')</script>";
        }


        if ($bgroup == 'O+') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='O+'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $op = $row[2];
            if ($op > 0) {
                $op--;
                $sql1 = "UPDATE `bbp`.`stock_list` SET `quantity`='$op' WHERE `bgroup`='$bgroup'";
                $con->query($sql1);
            } else {
                echo "<script>alert('Sorry specified blood group is out of stock')</script>";
            }
        } else if ($bgroup == 'A+') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='A+'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $ap = $row[2];
            if ($ap > 0) {
                $ap--;
                $sql2 = "UPDATE `bbp`.`stock_list` SET `quantity`='$ap' WHERE `bgroup`='$bgroup'";
                $con->query($sql2);
            } else {
                echo "<script>alert('Sorry specified blood group is out of stock')</script>";
            }
        } else if ($bgroup == 'B+') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='B+'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $bp = $row[2];
            if ($bp > 0) {
                $bp--;
                $sql3 = "UPDATE `bbp`.`stock_list` SET `quantity`='$bp' WHERE `bgroup`='$bgroup'";
                $con->query($sql3);
            } else {
                echo "<script>alert('Sorry specified blood group is out of stock')</script>";
            }
        } else if ($bgroup == 'AB+') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='AB+'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $abp = $row[2];
            if ($abp > 0) {
                $abp--;
                $sql4 = "UPDATE `bbp`.`stock_list` SET `quantity`='$abp' WHERE `bgroup`='$bgroup'";
                $con->query($sql4);
            } else {
                echo "<script>alert('Sorry specified blood group is out of stock')</script>";
            }
        } else if ($bgroup == 'O-') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='O-'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $on = $row[2];
            if ($on > 0) {
                $on--;
                $sql5 = "UPDATE `bbp`.`stock_list` SET `quantity`='$on' WHERE `bgroup`='$bgroup'";
                $con->query($sql5);
            } else {
                echo "<script>alert('Sorry specified blood group is out of stock')</script>";
            }
        } else if ($bgroup == 'A-') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='A-'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $an = $row[2];
            if ($an > 0) {
                $an--;
                $sql6 = "UPDATE `bbp`.`stock_list` SET `quantity`='$an' WHERE `bgroup`='$bgroup'";
                $con->query($sql6);
            } else {
                echo "<script>alert('Sorry specified blood group is out of stock')</script>";
            }
        } else if ($bgroup == 'B-') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='B-'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $bn = $row[2];
            if ($bn > 0) {
                $bn--;
                $sql7 = "UPDATE `bbp`.`stock_list` SET `quantity`='$bn' WHERE `bgroup`='$bgroup'";
                $con->query($sql7);
            } else {
                echo "<script>alert('Sorry specified blood group is out of stock')</script>";
            }
        } else if ($bgroup == 'AB-') {
            $q = "SELECT * FROM `bbp`.`stock_list` WHERE bgroup='AB-'";
            $result = mysqli_query($con, $q);
            $row = mysqli_fetch_row($result);
            $abn = $row[2];
            if ($abn > 0) {
                $abn--;
                $sql8 = "UPDATE `bbp`.`stock_list` SET `quantity`='$abn' WHERE `bgroup`='$bgroup'";
                $con->query($sql8);
            } else {
                echo "<script>alert('Sorry specified blood group is out of stock')</script>";
            }
        }




        $con->close();

        // $q=$db->prepare("INSERT INTO registration (name,fname,address,city,age,bgroup,mno,email) VALUES
        // (:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");

        // $q->bindValue('name',$name);
        // $q->bindValue('fname',$fname);
        // $q->bindValue('address',$address);
        // $q->bindValue('city',$city);
        // $q->bindValue('age',$age);
        // $q->bindValue('bgroup',$bgroup);
        // $q->bindValue('mno',$mno);
        // $q->bindValue('email',$email);



        // if ($q->execute()) 
        // {
        //     echo"<script>alert('Donor Registration Successful')</script>";
        // }
        // else
        // {
        //     echo"<script>alert('Donor Registration Failed')</script>";

        // }
    }
    ?>
</body>

</html>
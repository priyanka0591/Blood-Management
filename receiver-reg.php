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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="s11.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Receiver Registration</title>
</head>

<body>

    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h2><a href="home.php" style="text-decoration:none;color: pink;">Blood Bank Management System</a></h2>
            </div>
            <div id="body">
                <br>
                <?php

                ?>
                <style>
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
                            $hash = password_hash($mno, PASSWORD_DEFAULT);
                            $sql = "INSERT INTO `proj`.`receiver_reg` (`name`, `lname`, `address`, `city`, `age`, `bgroup`, `quantity`, `email`, `mno`) VALUES ('$name', '$lname', '$address', '$city', '$age', '$bgroup', '0', '$email', '$hash');";


                            // $result = mysqli_query($con, $sql);
                            if ($con->query($sql)) {
                                echo "<script>alert('Donor Registration Successful')</script>";
                            } else {
                                echo "<script>alert('Donor Registration Failed')</script>";
                            }





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
                    </div>
                </center>
            </div>
            <!-- <div id="footer"><h4 align="center">Copyright@bloodbank</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div> -->

            <div id="footer">
                <button type="button" class="btn btn-info" id="logout"><a href="admin_user.php">Log out</a></button>
            </div>
        </div>
    </div>
</body>

</html>
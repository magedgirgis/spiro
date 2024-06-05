<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $fristname = mysqli_real_escape_string($conn, $_POST['fuser']);
        $lastname = mysqli_real_escape_string($conn, $_POST['luser']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $gender = mysqli_real_escape_string($conn, $_POST['gender']);
        $username = mysqli_real_escape_string($conn, $_POST['usernameInput']);
        $password = mysqli_real_escape_string($conn, $_POST['passwordInput']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpasswordInput']);

        $sql="select * from users where first_name ='$fristname'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);
        
        $sql="select * from users where last_name = '$lastname'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);
        
        $sql="select * from users where email = '$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        $sql="select * from users where phone_number ='$phone_number'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from users where address ='$address'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from users where gender ='$gender'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from users where username ='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        if($count_user == 0 & $count_email==0){
            if($password==$cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (first_name, last_name, email, phone_number, address, gender, username, password) 
                VALUES ('$fristname','$lastname', '$email','$phone_number','$address','$gender', '$username', '$hash')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: login.php");
                }
            }
            else{
                echo '<script>
                    alert("Passwords do not match");
                    window.location.href = "signUp.php";
                </script>';
            }
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Email already exists!!");
                </script>';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Multi Step Form UI Design</title>
    <link rel="stylesheet" href="css/signUpStyle.css">
    <!-- <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <a href="home.php">
        <img src="../img/17r.png" alt="logo" width="35" height="35" />
    </a>
    <div class="container">
        <header>Sign up </header>
        <div class="progress-bar">
            <div class="step">
                <p>Name</p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Contact</p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Address</p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>Submit</p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form name="form" action="signUp.php" method="POST">
                <div class="page slide-page">
                    <div class="title">Basic Info:</div>
                    <div class="field">
                        <div class="label">First Name</div>
                        <input type="text" id="fuser" name="fuser" required>
                    </div>
                    <div class="field">
                        <div class="label">Last Name</div>
                        <input type="text" id="luser" name="luser" required>
                    </div>
                    <p class="error" style="color: red;visibility: hidden;">some fields must be filled correctly</p>
                    <div class="field">
                        <button class="firstNext next">Next</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">Contact Info:</div>
                    <div class="field">
                        <div class="label">Email Address</div>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="field">
                        <div class="label">Phone Number</div>
                        <input type="text" id="phone_number" name="phone_number" required>
                    </div>
                    <p class="error" style="color: red;visibility: hidden;">some fields must be filled correctly</p>
                    <div class="field btns">
                        <button class="prev-1 prev">Previous</button>
                        <button class="next-1 next">Next</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">Address:</div>
                    <div class="field">
                        <div class="label">Address</div>
                        <input type="text" id="address" id="address" name="address" required>
                    </div>
                    <div class="field">
                        <div class="label">Gender</div>
                        <select id="gender" id="gender" name="gender" required>
                <option>Male</option>
                <option>Female</option>
              </select>
                    </div>
                    <p class="error" style="color: red;visibility: hidden;">some fields must be filled correctly</p>
                    <div class="field btns">
                        <button class="prev-2 prev">Previous</button>
                        <button class="next-2 next">Next</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">Login Details:</div>
                    <div class="field">
                        <div class="label">Username</div>
                        <input type="text" id="usernameInput" name="usernameInput" required>
                    </div>
                    <div class="field">
                        <div class="label">Password</div>
                        <input type="password" id="passwordInput"  name="passwordInput" required>
                    </div>

                    <div class="field">
                         <div class="label">confirm Password</div>
                        <input type="password" id="cpasswordInput"  name="cpasswordInput" required>
                    </div>
                    <p class="error" style="color: red;visibility: hidden;">some fields must be filled correctly</p>
                    <div class="field btns">
                        <button class="prev-3 prev">Previous</button>
                        <button type="submit" id="btn" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="js/signUpScript.js"></script>

</body>

</html>
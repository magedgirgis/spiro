<?php
    session_start();
    if(isset($_SESSION['username'])){
        header("Location:  home.php");
    }
?>
<?php
    // $login = false;
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['password'];
        echo $password;
        $sql = "SELECT * from  users where username = '$username' or email = '$username'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($row){  
            echo $count;
            if(password_verify($password, $row["password"])){
                $login=true;
                session_start();
                $sql = "SELECT username from users where username = '$username' or email = '$username'";     
                $r = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_ASSOC);  
                $_SESSION['username']= $r['username'];
                $_SESSION['loggedin'] = true;
                header("Location: home.php");
            }
        } else{  
            echo'<script>
                        alert("Login failed. Invalid username or password!!");
                        window.location.href = "login.php";
                    </script>';
            }}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Animation CSS | Codehal</title>
    <link rel="stylesheet" href="css/loginStyle.css">
</head>
<body>
    <a href="home.php">
        <img src="../img/17r.png" width="200" height="200"/>
    </a>
    <div class="login-light"></div>
    <div class="login-box">
        <form name="form" action="login.php" method="POST">
            <input type="checkbox" class="input-check" id="input-check">
            <label for="input-check" class="toggle">
                <span class="text off">off</span>
                <span class="text on">on</span>
            </label>
            <div class="light"></div>
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="mail"></ion-icon>
                </span>
                <input type="text" id="user" name="user" required>
                <label>Email/username</label>
                <div class="input-line"></div>
            </div>
            <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input name="password" id="pass" type="password" required>
                <label>Password</label>
                <div class="input-line"></div>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Remember me</label>
                <!-- <a href="#">Forgot Password?</a> -->
            </div>
            <button type="submit" id="btn" name="submit">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="signUp.php">Register</a></p>
            </div>
        </form>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
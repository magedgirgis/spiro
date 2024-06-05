<?php
  include ("connection.php");
  if(isset($_POST['submit'])){
    $firstname =  mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname =  mysqli_real_escape_string($conn, $_POST['lastname']);
    $Email =  mysqli_real_escape_string($conn, $_POST['Email']);
    $mobile =  mysqli_real_escape_string($conn, $_POST['mobile']);
    $messsage =  mysqli_real_escape_string($conn, $_POST['messsage']);

    $sql="select * from report where firstname ='$firstname'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql="select * from report where lastname ='$lastname'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql="select * from report where Email ='$Email'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql="select * from report where mobile ='$mobile'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql="select * from report where messsage ='$messsage'";
    $result = mysqli_query($conn, $sql);
    $count_user = mysqli_num_rows($result);

    $sql = "INSERT INTO report (firstname, lastname, Email, mobile, messsage)
    VALUES ('$firstname','$lastname','$Email', '$mobile', '$messsage')";
    $result = mysqli_query($conn, $sql);
    if($result){
      echo '<script>
      alert("Thanks for the note.");
      window.location.href = "home.php";
  </script>';
    }else{

    }
      
    
  }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Contact Us Page</title>
    <link rel="stylesheet" href="css/contactStyle.css" />
  </head>
  <body>
    <div class="contactUs">
      <div class="title">
        <a href="home.php">
          <img src="../img/17r.png" width="170" height="170"/>
      </a>
      </div>
      <div class="box">
        <div class="contact form">
          <h3>Send a Message</h3>
          <form name="form" action="contact.php" method="POST">
            <div class="formBox">
              <div class="row50">
                <div class="inputBox">
                  <span>First Name</span>
                  <input name="firstname" type="text" id="firstname" placeholder="Saeed"  required />
                </div>
                <div class="inputBox">
                  <span>Last Name</span>
                  <input name="lastname" type="text" id="lastname" placeholder="Mobarak"  required/>
                </div>
              </div>
              <div class="row50">
                <div class="inputBox">
                  <span>Email</span>
                  <input name="Email" type="email" placeholder="Saeed mobarak @email.com"  required/>
                </div>
                <div class="inputBox">
                  <span>Mobile</span>
                  <input name="mobile" type="text" id="mobile" placeholder="+201 987 654 321"  required/>
                </div>
              </div>
              <div class="row100 " style="display: flex !important;gap: 15px;" >
                <div class="inputBox" >
                  <span>Messsage</span>
                  <textarea
                    name="messsage"
                    id="message"
                    cols="30"
                    rows="10"
                    placeholder="write your message"
                    required
                  ></textarea>
                </div>
              </div>
              <div class="row100">
                <div class="inputBox">
                  <input type="submit" value="Send" id="btn" name="submit"/>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- info Box -->
        <div class="contact info">
          <h3>Contact Info</h3>
          <div class="infoBox">
            <div class="">
              <span><ion-icon name="location-outline"></ion-icon></span>
              <p>
                Building 1183, Block 6 Sayed Zakaria، St.
                Masaken Sheraton, Cairo  <br />
                EGYPT
              </p>
            </div>
            <div>
              <span><ion-icon name="mail-outline"></ion-icon></span>
              <a href="mailto:something@something.com">info@spirospathis.com</a>
            </div>
            <div class="">
              <span><ion-icon name="call-outline"></ion-icon></span>
              <a href="tel:+01100122001">+01100122001</a>
            </div>
            <ul class="sci">
              <li>
                <a href="https://www.facebook.com/SpiroSpathisEG/"><ion-icon name="logo-facebook"></ion-icon></a>
              </li>
              <li>
                <a href="https://twitter.com/spirospathiseg"><ion-icon name="logo-twitter"></ion-icon></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/spiro-spathis/"><ion-icon name="logo-linkedin"></ion-icon></a>
              </li>
              <li>
                <a href="https://www.instagram.com/spirospathiseg/"><ion-icon name="logo-instagram"></ion-icon></a>
              </li>
            </ul>
          </div>
        </div>
        <!-- MAP -->
        <div class="contact map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1502.5701782158378!2d31.375692291625924!3d30.094189258124793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145817421996e99d%3A0xf065c09f33d2d4e4!2z2LPYqNmK2LHZiNiz2KjYp9iq2LM!5e0!3m2!1sen!2seg!4v1707945582567!5m2!1sen!2seg"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>

    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>

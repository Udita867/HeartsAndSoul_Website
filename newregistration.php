<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Registration</title>
    <link rel="icon" href="Girls holding big empty banner.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>

    body{
        margin:0px;
        
    }

    .main{
        background-image:url("Girls holding big empty banner.jpeg");
        height:400px;
        width:535px;
        margin-left:400px;
        margin-top:30px;
    }
    
    .main2{
        
        margin-left:280px;
        padding-top:230px;
    }

    input{
        width:200px;
        height:25px;
        border-collapse: collapse;
    }

    button{
        width:50px;
        height:30px;
    }


</style>

<body>
    <div class="main">
        <div class="main2">
            <form method="post">
            <label>Username: </label><br>
            <input type="text" name="username" required><br><br>
            <label>Email:</label><br>
            <input type="text" name="email" required ><br><br>
            <label>Phone No.: </label><br>
            <input type="tel" name="phone" required><br><br>
            <label>Address:</label><br>
            <input type="text" name="address" required><br><br>

            <button style="margin-left:65px; font-weight:600; color:dark green; font-size:90%; width:80px;" type="submit" value="submit" name="submit">SUBMIT</button>
            </form>
        </div>
    </div>

<?php


if (isset($_POST["submit"])){

    $servername="localhost";
    $username="root";
    $password="867";
    $dbname="fnp";
  
    $conn=new mysqli($servername,$username,$password,$dbname);
    if ($conn->connect_error){
      die("error".$conn->connect_error);
    }
    
   
    $username=$_POST["username"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $addr=$_POST["address"];

    
   $ss="Insert into CustomerInformation(Username,Email,Address,PhoneNo) values('$username','$email','$addr','$phone')";
   $conn->query($ss);

}


?>

<script>
    $(document).ready(function(){

       

    });
</script>


<div id="footer" style="background-color:rgb(238, 160, 122); font-size:80%; margin-top:200px;">
      <div class="footer-content">
        <div class="footer-section about">
            <h2 style="font-size:160%; color:white; font-family: 'Segoe UI'; padding-left:3px;"><u>About Us</u></h2>
            <p style="font-size:120%; color:white; font-family: 'Segoe UI'; padding-left:3px;">This is our official website where you can purchase a wide variety of gifts online to surprise your loved ones. The platform offers delivery services to many countries, connecting you with the world from the comfort of your own home.</p>
            <div class="contact">
                <span style="color:white; margin:10px; size:120%;"><a style="color:white;" href=""><i style="color:white;" class="fas fa-phone">123-456-7890</i> |</a></span>
                <span style="color:white; margin:10px; size:120%;"><a style="color:white; font-family:'Segoe UI'; size:120%;"><i class="fas fa-envelope"></i><b>info@example.com</b> |</a></span>
                <span style="color:white; margin:10px;"><a href="HNSwebsite.php"><i style="color:white" class="fa-solid fa-house fa-2x"></i></a></span>
                <span style="color:white; margin:10px;"><a href="https://www.instagram.com/udita_raghav_01?igsh=MWZvNGM0azB5eGhwNw=="><i style="color:white" class="fa-brands fa-instagram fa-2x"></i></a></span>
                <br>
                <br>
                <br>
                <br>
                <p style="color:white; margin:10px; size:50%;">  @Designed by Udita Raghav</p>

            </div>
        </div>
       
        
    </div>
   
</div>

</body>
</html>
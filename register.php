<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="icon" href="registration_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
crossorigin="anonymous">
</script>

<style>
    
    body{
    margin:0;
    background-color: rgb(246, 245, 245);
}
   
    .main{
        margin-left:400px;
        height:600px;
        width:600px;
        background-image:url("Free Vector _ Woman holding banners.jpeg");
    }

    .main2{
        margin-top:10px;
        font-size:large;
        font-family: 'Segoe UI';
        color:black;
        margin-left:660px;
    }

    div{
        font-size: 100%;
        font-family: 'Lucida Sans';
    }

    input[type="text"]{
        width:200px;
        height:25px;
        border-collapse: collapse;
    }

    button{
        width:50px;
        height:30px;
    }

    input:focus{
        border-collapse: collapse;
    }

    .sticked{
    position:fixed;
    z-index:999;
    margin-bottom: 50px;
    
}
#uppermost{
    background-color: rgb(252, 111, 144);
    size:cover;
    font-size: 90%;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: 800;
    letter-spacing: 1px;
    line-height: 200%;
}
#uppermost2{ 
   
    background-color:  rgb(252, 111, 144);
    margin-left:775px;
    size:cover;
    font-size: 100%;
    color:white;
    font-style:normal;
    font-weight: 800;
    line-height: 200%;
    display: flex;
}
option{
    background-color: white;
    color:black;
}


   

</style>

<body>


    <div class="main">

    <div style="padding-top:400px; margin-left:230px;">
        <form action="" method="post">
        <label>Username: </label><br>
        <input type="text" name="username"><br><br>
        <label>Email:</label><br>
        <input type="text" name="email" required><br><br>
        <button style="margin-left:65px; font-weight:600; color:black; font-size:100%; width:80px;" type="submit" value="submit" name="submit">SUBMIT</button>
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
    global $email;
    $email=$_POST["email"];

    global $e;
    $e="not found";
    $ss="Select * from CustomerInformation where Username='$username';";
   $res=$conn->query($ss);
   if($res->num_rows>0){
    while ($row=$res->fetch_assoc()){
      $e=$row["Email"];
      
    }
  }


 }
 ?>   

 
<div class="main2"><a href="newregistration.php"><p style="color:red; font-size:95%;"><u><b>New Registration?</b></u></p></a></div>
<div id="rep" style="height:100px; width:500px; padding-left:400px;"><p style="font-size:110%; color:rgb(251, 77, 135); font-weight: 500;" id="status"></p></div>

<script>
     
     let m="<?php echo $e; ?>";
     let n="<?php echo $email; ?>";
     const t=document.getElementById("status");
     if(m==n){
        t.innerHTML="You are already a member.";
     }
     if(m=="not found"){
        t.innerHTML="Please Register.";
     }


</script>

<div id="footer" style="background-color:rgb(249, 142, 167); font-size:80%;">
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
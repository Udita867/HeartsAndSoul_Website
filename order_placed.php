<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPbIGyNdyV4WClD3zMtwTZ2NAXRztEyEAecQ&s" type="image/x-icon">
</head>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
crossorigin="anonymous">
</script>


<style>
    a:link{
      text-decoration: none;
    }


    body{
        margin:0px;
        background-image: url("Background.jpeg");

    }

    .message{
        margin-left:180px;
        margin-top:150px;
        height:400px;
        width:1200px;
        background-color: white;
    }

    .main1{
        text-align: center;
        text-justify: center;
        color:deeppink;
        font-size: 400%;
        font-family: Georgia;
        padding-top:100px;
    }

    .main2{
        height:35px;
        width:300px;
        text-align: center;
        text-justify: center;
        color:white;
        font-size: 150%;
        font-family: Georgia;
        background-color: deeppink;
        margin-top: 100px;
        margin-left: 450px;
        border-radius: 5px;
    }

    .main2:hover{
        color:black;
    }

</style>

<?php 
    
$servername="localhost";
$username="root";
$password="867";
$dbname="fnp";

  $conn=new mysqli($servername,$username,$password,$dbname);
  if ($conn->connect_error){
    die("error".$conn->connect_error);
  }
  
  $quer="UPDATE Items SET ItemCount=0;";
    $conn->query($quer);
  

?>

<body>
    <div class="message">
        <div class="main1">Your Order has been placed.</div>
        <a href="HNSwebsite.php"><div class="main2">Go Back to Main Page</div></a>
    </div>
</body>
</html>
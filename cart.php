<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Your Order</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="https://a0.anyrgb.com/pngimg/542/30/shopping-cart-icon-cashback-website-shopping-cart-digital-marketing-ecommerce-promotion-retail-customer-shopping-online-shopping.png" type="image/x-icon">
</head>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
crossorigin="anonymous">
</script>

<style>

    body{
        margin:0px;
    }

    img{
        height:400px;
        width: 500px;
        padding-left:140px;
    }

    .Itemname{
        padding-left: 5px;
    }

    .mainbody{
        display:grid;
        grid-template-columns: 60% 40%;
        font-size: 100%;
        font-weight: 300;

    }

    .MMain{
        height:auto;
        width:800px;
        border-radius: 20px;
        margin-left:360px;

    }

    #main{
        height:auto;
        width:800px;
        border-color: black;
        border-style: solid;
        border-width: 3px;
        flex-wrap: wrap;
    }
     .Head{
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
        font-family: 'Segoe UI';
        background-color:rgb(254, 152, 169);
        color:white;
        font-weight: 500;
        text-align: center;
        font-size: 130%;
     }
     .headings{
        font-family: 'Segoe UI';
        display:grid;
        grid-template-columns: 50% 50%;
        background-color:rgb(254, 152, 169);
        color:white;
        font-weight: 500;
        text-align: left;
        font-size: 120%;
     }

     .placeorder{
        margin:10px;
        height:30px;
        width:400px;
        font-weight: 500;
        border-radius: 5px;
        border-color: rgb(254, 47, 127);
        font-family: 'Segoe UI';
        font-size: 140%;
        color:white;
        text-align: center;
        background-color: rgb(254, 152, 169);
        
     }

     a:link { 
       text-decoration: none; 
    } 

    .contain{
        padding-left: 200px;

    }

</style>


<body>

<div class="MMain">
    <div>
        <img src="Golden_Flower.jpg.jpeg" style="color:pink;">
    </div>
    <div id="main">
       <div class="Head">YOUR SELECTED ITEMS</div><hr>
       <div class="headings"><div style="padding-left:5px;">Item</div><div>Item(Count)</div></div>
    </div>
    <div class="contain">
        <a href="order_placed.php"><div class="placeorder">PLACE ORDER</div></a>
    </div>
</div>

<div id="footer" style="background-color:rgb(251, 129, 158); font-size:80%;">
      <div class="footer-content">
        <div class="footer-section about">
            <h2 style="font-size:160%; color:white; font-family: 'Segoe UI'; padding-left:3px;"><u>About Us</u></h2>
            <p style="font-size:120%; color:white; font-family: 'Segoe UI'; padding-left:3px;">This is our official website where you can purchase a wide variety of gifts online to surprise your loved ones. The platform offers delivery services to many countries, connecting you with the world from the comfort of your own home.</p>
            <div class="contact">
                <span style="color:white; margin:10px; size:120%;"><a style="color:white;" href=""><i style="color:white;" class="fas fa-phone">123-456-7890</i> |</a></span>
                <span style="color:white; margin:10px; size:120%;"><a style="color:white; font-family:'Segoe UI'; size:120%;"><i class="fas fa-envelope"></i><b>info@example.com</b> |</a></span>
                <span style="color:white; margin:10px;"><a href="#"><i style="color:white" class="fa-solid fa-house fa-2x"></i></a></span>
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
    
<?php

$servername="localhost";
$username="root";
$password="867";
$dbname="fnp";

  $conn=new mysqli($servername,$username,$password,$dbname);
  if ($conn->connect_error){
    die("error".$conn->connect_error);
  }
  

  $sql="Select * from Items where ItemId='A1';";
  $res=$conn->query($sql);
  if($res->num_rows>0){
    while ($row=$res->fetch_assoc()){
      global $i1,$p1;
      $i1=$row["ItemName"];
      $p1=$row["ItemCount"];
    }
  }

  $sql="Select * from Items where ItemId='A2';";
  $res=$conn->query($sql);
  if($res->num_rows>0){
    while ($row=$res->fetch_assoc()){
      global $i2,$p2;
      $i2=$row["ItemName"];
      $p2=$row["ItemCount"];
    }
  }

  $sql="Select * from Items where ItemId='A3';";
  $res=$conn->query($sql);
  if($res->num_rows>0){
    while ($row=$res->fetch_assoc()){
      global $i3,$p3;
      $i3=$row["ItemName"];
      $p3=$row["ItemCount"];
    }
  }

  $sql="Select * from Items where ItemId='A4';";
  $res=$conn->query($sql);
  if($res->num_rows>0){
    while ($row=$res->fetch_assoc()){
      global $i4,$p4;
      $i4=$row["ItemName"];
      $p4=$row["ItemCount"];
    }
  }

  $sql="Select * from Items where ItemId='A5';";
  $res=$conn->query($sql);
  if($res->num_rows>0){
    while ($row=$res->fetch_assoc()){
      global $i5,$p5;
      $i5=$row["ItemName"];
      $p5=$row["ItemCount"];
    }
  }

  $sql="Select * from Items where ItemId='A6';";
  $res=$conn->query($sql);
  if($res->num_rows>0){
    while ($row=$res->fetch_assoc()){
      global $i6,$p6;
      $i6=$row["ItemName"];
      $p6=$row["ItemCount"];
    }
  }


?>

<script>

function hell(a,b){
            const d=document.getElementById("main");
            const m=document.createElement("div");
            m.setAttribute("class","mainbody");
            const n=document.createElement("div");
            n.setAttribute("class","Itemname");
            const c=document.createElement("div");
            const h=document.createElement("hr");
            n.innerHTML=a;
            c.innerHTML=b;
            m.appendChild(n);
            m.appendChild(c);
            m.appendChild(h);
            d.appendChild(m);
        }


    var x="<?php echo $i1; ?>";
    var y="<?php echo $p1; ?>";
    if(y>0){
        hell(x,y);
    }

    var x2="<?php echo $i2; ?>";
    var y2="<?php echo $p2; ?>";
    if(y2>0){
        hell(x2,y2);
    }

    var x3="<?php echo $i3; ?>";
    var y3="<?php echo $p3; ?>";
    if(y3>0){
        hell(x3,y3);
    }

    var x4="<?php echo $i4; ?>";
    var y4="<?php echo $p4; ?>";
    if(y4>0){
        hell(x4,y4);
    }

    var x5="<?php echo $i5; ?>";
    var y5="<?php echo $p5; ?>";
    if(y5>0){
        hell(x5,y5);
    }

    var x6="<?php echo $i6; ?>";
    var y6="<?php echo $p6; ?>";
    if(y6>0){
        hell(x6,y6);
    }
   

</script>




</body>
</html>
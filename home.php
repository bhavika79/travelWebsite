<?php
  require "includes\common.php";
  ?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <title>Tourist Places in Telangana State</title>
   <link rel="stylesheet" type="text/css" href="s1.css">
   <style type="text/css">
     footer{
      padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    bottom: 0;
    width: 100%;
    }
   </style>
</head>
<body>
   

   <div class="navbar navbar-default navbar-fixed">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">Travel</a>
      </div>
      <div class="nav navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
 

 <div class="container">
    <div class="items">
        <a href="1a.php">
          <img src="images/golkonda.jpeg" alt="Golkonda Fort" class="thumbnail">
          <div class="caption">
            <h2>Golkonda Fort</h2>
          </div>
        </a>
    </div>
    <div class="items">
        <a href="1b.php">
          <img src="images/papikondalu.jpg" alt="Papikondalu" class="thumbnail">
          <div class="caption">
            <h2>Papikondalu</h2>
          </div>
        </a>
    </div>
    <div class="items">
        <a href="1c.php">
          <img src="images/warangal.jpg" alt="Warangal Fort" class="thumbnail">
          <div class="caption">
            <h2>Warangal Fort</h2>
          </div>
        </a>
    </div>
 </div>

 <div class="container">
    <div class="items">
       <a href="1d.php">
          <img src="images/laknavaram.png" alt="Laknavaram Lake" class="thumbnail">
          <div class="caption">
            <h2>Laknavaram Lake</h2>
          </div>
       </a>
    </div>
    <div class="items">
       <a href="1e.php">
          <img src="images/nagarjunasagar.jfif" alt="Nagarjunasagar Dam" class="thumbnail">
          <div class="caption">
            <h2>Nagarjunasagar Dam</h2>
          </div>
       </a>
    </div>
    <div class="items">
       <a href="1f.php">
          <img src="images/ananthagiri.jpg" alt="Ananthagiri Hills" class="thumbnail">
          <div class="caption">
            <h2>Ananthagiri Hills</h2>
          </div>
       </a>
    </div>
 </div>

 <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4>Information</h4>
          <a href="contact.php">Contact Us</a>
        </div>
       
        <div class="col-md-6">
          <h4>Contact Us</h4>
          <p>Contact:+91-123-000000</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>




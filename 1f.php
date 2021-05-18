<!DOCTYPE html>
<html>
<head>
  <title>index page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <style>
  #cont{
      text-align: justify;
     font-size: 20px;
     color:black;
     font-style: Arial;
    }
  body{
   background-color: LightGray;
   }
  /*.header{
   background-color: #8bc34a;
   color: White;
   border-color: Black;
   min-height: 50px;
   border: 1px solid transparent;
   }
  .inner-header{
  width:90%;
  margin:auto;
 }
  .logo{
   float:left;
   height:50px;
   padding: 15px;
   font-size: 20px;
   color: White;
   font-weight:700;
 }
  .header-link{
   float:right;
   height: 50px;
   padding: 15px;
   font-size: 16px;
   font-weight:700;
  } */
  .container{
      width: 90%;
      margin: auto;
    }
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

  <div>
    <center>
      <h2>ANANTHAGIRI HILLS</h2>
      <img src="images/logoa.jpg" alt="ananthagiri hills" width="900" height="400" border="2">
    </center>
  </div><br><br>
  <div class="container" id="cont">
      <p>
        Ananthagiri Hills is located 10 km from Vikarabad, Ranga Reddy district, Telangana, India. The hills are the main water source for Osmansagar and Himayathsagar. It is considered as one of the dense forests in Telangana region. Ananthagiri has a famous temple located in this forested region, which is also the birthplace of Musi River. It is situated at a distance of about 90 km from Hyderabad City and a popular destination for trekking and for those who love adventure. It is also considered one of the earliest human habitat areas in South India. Ancient caves, medieval fort like structures and ancient temple shows the history of the area.It is a much sought after place, which is covered, by red soil and ideal for some adventure sports. Visitors rate it as one of most beautiful places for a weekend get away from Hyderabad. The road is in good condition, which takes you into the dense forests with beautiful trees and streams all along the way. Near the lighthouse if you take a 2 km diversion, you can reach the topmost point in the Vikarabad region, which offers an excellent view point. A trip to Vikarabad on a cloudy day with a little drizzle is simply an unforgettable experience and it is a poor man’s Ooty in summer.
      </p>
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
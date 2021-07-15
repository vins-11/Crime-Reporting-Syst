<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
    <style>
        body
        {
            background:url(aboutus.jpg);
        }

        .containers
        {
            width:550px;
            height:100%;
            margin-left:10px;
            padding-top: 30px;
        }

        .pic
        {
            box-shadow: 6px 6px 7px #888888;
            width:300px;
            height:300px;
            position: relative;
            overflow: hidden;
            margin-top:100px;
            margin-left:135px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .pic:before
        {
            content: '';
            margin-top:-63px;
            margin-left:-80px;
            position: absolute;
            width: 450px;
            height: 450px;
            background: url(home1.jpeg) center center;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .pic:hover , .box1:hover , .box2:hover , .social1:hover , .social2:hover , .social3:hover 
        {
            box-shadow: 3px 3px 7px #888888;
            cursor:pointer;
        }

        .box1
        {
            box-shadow: 6px 6px 7px #888888;
            width:100px;
            height:100px;
            position: relative;
            overflow: hidden;
            margin-top:-124px;
            margin-left:16px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .box1:before
        {
            content: '';
            margin-top:-25px;
            margin-left:-31px;
            position: absolute;
            width: 200px;
            height: 200px;
            background: url(home1.jpeg) center center;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .box2
        {
            box-shadow: 6px 6px 7px #888888;
            position: relative;
            overflow: hidden;
            width:194px;
            height:99px;
            margin-top:14px;
            margin-left:78px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .box2:before
        {
        
            content: '';
            margin-top:-74px;
            margin-left:-31px;
            position: absolute;
            width: 300px;
            height: 300px;
            background: url(2766372.jpg) center center;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .social1
        {
            box-shadow: 6px 6px 7px #888888;
            width:80px;
            height:80px;
            background-color:#3b5998;
            margin-top:-57px;
            margin-left:305px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .social1 > i
        {
            font-size:60px;
            margin-top:13px;
            margin-left:20px;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            color:#ffffff;
        }

        .social2
        {
            box-shadow: 6px 6px 7px #888888;
            width:80px;
            height:80px;
            background-color:#C73B6F;
            margin-top:-142px;
            margin-left:370px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .social2 > i
        {
            font-size:60px;
            margin-top:8px;
            margin-left:13px;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            color:#ffffff;
        }

        .social3
        {
            box-shadow: 6px 6px 7px #888888;
            width:80px;
            height:80px;
            background-color:#000000;
            margin-top:-143px;
            margin-left:435px;
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .social3 > i
        {
            font-size:60px;
            margin-top:9px;
            margin-left:9px;
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            color:#ffffff;
        }

        .content
        {
            height:100%;
            width:500px;
        }

        p
        {
            font-family: 'Open Sans Condensed', sans-serif;
        }

        h2
        {
            font-family: 'Dancing Script', cursive;
            color: white;
        }

        .contentHead
        {
            font-family: 'Open Sans Condensed', sans-serif;
            font-size:60px;
            font-weight:500;
            text-decoration:underline;
            padding-top: 30px;
            color: white;
        }

        sup
        {
            font-family: 'Open Sans Condensed', sans-serif;
            font-style: italic;
            font-size:smaller;
        }

        span
        {
            color:pink;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userlogin.php">User Login  <i class="fa fa-user"></i></a></li>
        <li><a href="official_login.php">Official Login  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
 <div class="row">
<div class="containers col-lg-6 col-md-6">
  
  <div class="pic"></div>
  
  <div class="box1"></div>
  <div class="box2"></div>
  
  <!-- <div class="social1">
    <i class="fa fa-facebook" aria-hidden="true"></i> 
  </div>
  <div class="social2">
  <i class="fa fa-dribbble" aria-hidden="true"></i>
  </div> -->
  <!-- <div class="social3">
    <i class="fa fa-codepen" aria-hidden="true"></i>
  </div> -->
</div>

<div class="content col-md-offset-6 col-lg-offset-6">
  <center><h1 class="contentHead">ABOUT US</h1></center>
  
  <h2>Hello, i'm here....<br/><br/>
    For helping you regarding reporting complaint to the police to the get help for solving the situation or Crime registerd. i'm trying to very simple way for the victim to registerd the complaints fast and easily.
    <br/><br/>
    Firstly victims uses Registerd form and then fill it Login form throw this Website we can cover many types of complains like theft, Robbery, pick pocket, Rape, etc.
    </br></br>
    
  </h2>
</div>
</div>   

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
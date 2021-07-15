<!DOCTYPE html>
<html>
<head>
    
	<title>Crime Portal</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
    background-size: cover;
    background-image: url(home1.jpeg);
    /* background-color: lightpink; */
    background-position: center; 
}
#div1 {
  font-size:18px;
}

body,
html {
    width: 100%;
    height: 100%;
    font-family: "Lato";
    color: white;
}

h1 {
  font-weight: 700;
  font-size: 5em;
}


.content{
  padding-top: 10%;
  text-align: center;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                 0px 8px 13px rgba(0,0,0,0.1),
                 0px 18px 23px rgba(0,0,0,0.1);
}

hr {
    width: 250px;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0,0,0,0.2);
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
      <a class="navbar-brand" href="index.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="feedbackform.php">Feedback <i id="div1" class="fa"></i></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userlogin.php">User Login  <i class="fa fa-user"></i></a></li>
        <li><a href="official_login.php">Official Login  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="content">
 				<h1>Have a Complaint?<br>or<br>New User?</h1>
 				<h3>Register Below &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
 				<hr>
          <a href="registration.php" class="btn btn-default btn-lg" role="button" aria-pressed="true">Sign Up!</a>
 			</div>
 		</div>
 	</div>
 </div>

 <div>
  
 </div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script>
  function smile() {
    var a;
    a = document.getElementById("div1");
    a.innerHTML = "&#xf118;";
    setTimeout(function () {
        a.innerHTML = "&#xf11a;";
      }, 500);
    setTimeout(function () {
        a.innerHTML = "&#xf119;";
      }, 1000);
    setTimeout(function () {
        a.innerHTML = "&#xf11a;";
      }, 1500);
  }
  smile();
  setInterval(smile, 2000);
</script>   
</body>
</html>
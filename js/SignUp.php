
<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="C:\Users\Raul\Documents\HTML\BOOTSTRAP\css\bootstrap.min.css">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css\signup.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Purrfect Match</a>
    <!-- this is used to design the button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- container under which all the nav items to be shown when collapased -->
    <div class="collapse navbar-collapse" id="navBar">
      <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="C:\Users\Raul\Documents\HTML\PurrfectMatch\Purrfectmatch.html">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="about.html">ABOUT</a></li>
        <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
      </ul>
      <!-- contains items to the right -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="Signup.html"><i class="fa fa-user-plus"></i> SIGN UP</a></li>
        <li class="nav-item"><a class="nav-link"href="login.html"><i class="fa fa-user"></i> LOGIN</a></li>
      </ul>

      
    </div>
  </div>
  
 </nav> 
<form>
<div class="jumbotron">

  <div id="credentials">
    <label for="Fname">First Name
    </label>
      <input id="fname" type="text" class="form-control" placeholder="First name">
    <label for="lname">Last Name
    </label>
      <input id="lname" type="text" class="form-control" placeholder="Last name">
  
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
  </div>
  
      <button id= "submit" type="submit" class="btn btn-primary">Sign in</button>

</div>
</form>











  

<script type="text/javascript" src="js/login.js"></script>
 <script type="text/javascript" src="C:\Users\Raul\Documents\HTML\BOOTSTRAP\js\bootstrap.min.js"></script>
</body>
</html>
<?php  
$firstname = '';
$lastname = '';
$email = '';
$errors = array(); 
//connect to DB

$db = mysqli_connect('localhost','root','','users');
//if submit button clicked
if (isset($_POST['submit'])) {
  $firstname = mysql_real_escape_string($_POST['fname']);
  $lastname = mysql_real_escape_string($_POST['lname']);
  $email = mysql_real_escape_string($_POST['email']);
  $password1 = mysql_real_escape_string($_POST['password1']);
  $password2 = mysql_real_escape_string($_POST['password2']);

  //ensure form fields are filled properly
  if (empty($First Name)) {
    array_push($errors,"firstname is required");
  }
  if (empty($Last Name)) {
    array_push($errors,"lastname is required");
  }
  if (empty($Email)) {
    array_push($errors,"email is required");
  }
  if (empty($Password1)) {
    array_push($errors,"password is required");
  }
  if ($password1 != $password2 ) {
    array_push($errors,"Passwords do not match");
  }

  //if no errors, save to // DB
  if (count($errors) == 0) {
    $password = md5($password1)
    $sql = "INSERT INTO user (First Name,Last Name,Email,Password1) 
    VALUES ('$firstname','$lastname','$email', '$password1')";
   mysqli_query($db,$sql);
   $_SESSION["Email"] = $Email;
   $_SESSION['success']= "you are now logged in "
   header("location: dogs.html");

  }

}

//logout 
ifisset($_GET["logout"]){
  session_destroy();
  unset($_SESSION["Email"]);
  header("location:dogs.html");
  
}


?>

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 


// Grab User submitted information


// Connect to the database
$db = mysqli_connect("localhost","root","**********","anreply");
// Make sure we connected successfully
if(! $db)
{
    die('Connection Failed'.mysqli_error());
}
$error="";
// Select the database to use
 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $pass = mysqli_real_escape_string($db,$_POST['password']); 

$sql = "SELECT Email, Password FROM users WHERE Email = '$email' and Password = '$pass'";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         
         $_SESSION['login_user'] = $email;
         
         header("location: msg.php");
      }else {
          
          header("location: login.php");
      }}
?>
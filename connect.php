
<?php
$p_fname=$_POST['p_fname'];
$p_age=$_POST['p_age'];
$p_contact=$_POST['p_contact'];
$p_gender=$_POST['p_gender'];
$email=$_POST['email'];
$password=$_POST['password'];
if (!empty($p_fname) && !empty($email)  && !empty($p_age) && !empty($p_contact) && !empty($p_gender) && !empty($password) )
{

// Create connection
$conn = new mysqli('localhost','root','','railway');

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From passengers Where email = ? Limit 1";
  $INSERT = "INSERT Into passengers (p_fname, p_age, p_contact, p_gender, email, password) values(?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("siisss", $p_fname,$p_age, $p_contact, $p_gender, $email, $password);
      $stmt->execute();
      echo "<script type='text/javascript'>alert('Successfully Registered');
      window.location = 'index.php';</script>";
     } else {
      echo "<script type='text/javascript'>alert('Someone already registered using this mail');
      window.location = 'reg.php';</script>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
  echo "<script type='text/javascript'>alert('All fields are required');
  window.location = 'reg.php';</script>";
 die();
}
?>
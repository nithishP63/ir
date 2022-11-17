<?php
$email=$_POST['email'];
$password=$_POST['password'];
if ( !empty($email)&& !empty($password) )
{

	$conn = mysqli_connect("localhost","root","","railway");

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
$sql = $conn->prepare("SELECT * FROM passengers WHERE email = ?;");
$sql->bind_param("s", $email);
$sql->execute();

$sql_result = $sql->get_result();
if($sql_result->num_rows > 0){
  $data = $sql_result->fetch_assoc();
  if($data['password']===$password){
    echo "<script type='text/javascript'>alert('Logged in successfully');
    window.location = 'first.php';</script>";
  }
  else{
    echo "<script type='text/javascript'>alert('Wrong Username or Password');
    window.location = 'index.php';</script>";
  }

  }
  else{
    echo "<script type='text/javascript'>alert('Wrong Username or Password');
    window.location = 'index.php';</script>";
  }
}
}
else{
  echo "<script type='text/javascript'>window.location = 'reg.php';</script>";
}
?>
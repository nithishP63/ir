<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$mob=$_POST['mobile'];
$gender=$_POST['gen'];
$email=$_POST['mail'];
$pw=$_POST['pwd'];
$cpw=$_POST['cpwd'];

  $conn = new mysqli('localhost','root','','railway');
  if($conn->connect_error){
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  }
  else{
    $sql = "INSERT INTO passengers (p_fname, p_lname, p_age, p_contact, p_gender, email, password) VALUES ('$fname', '$lname', '$age', '$mob', '$gender', '$email', '$pw');";
    if(mysqli_query($conn, $sql))
    {  
      $message = "You have been successfully registered";
      header('location: http//localhost/cloud/log.php');
      exit();
    }
    else
    {  
      $message = "Could not insert record"; 
    }
      echo "<script type='text/javascript'>alert('$message');</script>";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>IRCTC</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="register.css">
    <meta charset="utf-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header class="header">
      <div class="icon"><img src="icon.png">
      <div class="text">IRCTC</div></div>
      <nav class="navigation">
        <div class="links"><a href="http://localhost/cloud/log.php">Home</a></div>
        <div class="links"><a href="http://127.0.0.1:5500/abt.html">About</a></div>
        <div class="links"><a href="http://127.0.0.1:5500/cont.html">Contact</a></div>
      </nav>
    </header>
    <div class="background">
      <img src="th.jpg">
      <main class="container">
      <FORM name="register" method="post" action="reg.php" onsubmit="check()">

          <table>
            <tr>
              <td colspan="2" align="center"><h2>New Users,Register Here!</h2></td>
            </tr>
            <tr>
              <th align="right">Username : </th>
              <th align="left"><input type="text" id="add" name="fname"></th>
            </tr>
            <tr>
              <th align="right">Name : </th>
              <th align="left"><input type="text" id="name" name="lname"></th>
            </tr>
            <tr>
              <th align="right">Age : </th>
              <th align="left"><input type="text" id="age" name="age"></th>
            </tr>
            <tr>
              <th align="right">Gender : </th>
              <td align="left"><input type="radio" id="gender1" name="gen" value="male">Male
                <input type="radio" id="gender2" name="gen" value="female">Female</td>
            </tr>
            <tr>
              <th align="right">Email : </th>
              <th align="left"><input type="email" id="mail" name="mail"></th>
            </tr>
            <tr>
              <th align="right">Mobile Number : </th>
              <th align="left"><input type="text" id="num" name="mobile""></th>
            </tr>
            <tr>
              <th align="right">Password : </th>
              <th align="left"><input type="text" id="pwd" name="pwd"></th>
            </tr>
            <tr>
              <th align="right">Confirm Password : </th>
              <th align="left"><input type="text" id="cpwd" name="cpwd"></th>
            </tr>
            <tr>
              <th colspan="2" align="center"> <div><INPUT TYPE="submit" value="Login" id="login" class="button"></div></th>
            </tr>
          </table>
        </form>
      </main>
    </div>

    
    <script>
     
      function check(){
        let un = document.getElementById("name").value;
        let pw = document.getElementById("pwd").value;
        let cpw = document.getElementById("cpwd").value;
        let a = document.getElementById("age").value;
        let ad = document.getElementById("add").value;
        let n = document.getElementById("num").value;
        let em = document.getElementById("mail").value;

        var mob = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
        
        if(ad == ""){
          alert("Username must be filled out");
        }
        else if(un == ""){
          alert("Name must be filled out");
        }
        else if(a == ""){
          alert("Age must be filled out");
        }
        else if(!document.getElementById("gender1").checked){
          if(!document.getElementById("gender2").checked){
          alert("Gender must be filled out");
        }
        }
        else if(em == ""){
          alert("Email must be filled out");
        }
        else if(n == ""){
          alert("Number must be filled properly");
        }
        else if(mob.test(n)==false){
          alert("Number must be filled properly");
        }
        else if(pw == ""){
          alert("password must be filled out");
        }
        else if(cpw == ""){
            alert("Confirm password must be filled properly");
        }
        else if(cpw!=pw){
            alert("Confirm password must be filled properly");
        }
        else{
          window.location.href ="http//localhost/cloud/log.php";
        }
      }
      
    </script>
  </body>
</html>

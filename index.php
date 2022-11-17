
<!DOCTYPE html>
<html>
  <head>
    <title>IRCTC</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="login.css">
    <meta charset="utf-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
      #bt1{
        position: absolute;
        margin-top:-32px;
      }
      #bt2{
        margin-left: 120px;
      }
    </style>
  </head>
  <body>
    <header class="header">
      <div class="icon"><img src="icon.png">
      <div class="text">IRCTC</div></div>
      <nav class="navigation">
        <div class="links"><a href="index.php">Home</a></div>
        <div class="links"><a href="abt.php">About</a></div>
        <div class="links"><a href="cont.php">Contact</a></div>
      </nav>
    </header>
    <div class="background">
      <img src="bg2.jpg">
      <main class="container">
        <form name="login" action="verify.php" method="post">
        <div class="first-row">
          <h3>Login</h3>
        </div>
        <div class="second-row">
            <label>Username : </label>
            <input type="text" id="name" name="email" placeholder="Enter your Email ID">
        </div>
        <div class="third-row">
          <label>Password : </label>
          <input type="password" id="pwd" name="password" >
      </div>
        <div class="fourth-row">
          <div><a href="reg.php" ><button class = "button" id="bt2">New User</button></a></div>
          </div>
          </form>

          <div><button class="button" onclick="check()" id="bt1">Login</button></div>    
       
      </main>
    </div>

    
    <script>
      function check(){
        let un = document.getElementById("name").value;
        let pw = document.getElementById("pwd").value;
    
        if(un == ""){
          alert("Name must be filled out");
        }
        else if(pw == ""){
          alert("password must be filled out");
        }
        else{
          window.location.href = "first.php";
        }
        
      }
      
    </script>
  </body>
</html>
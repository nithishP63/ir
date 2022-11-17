
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
        <div class="links"><a href="index.php">Home</a></div>
        <div class="links"><a href="abt.php">About</a></div>
        <div class="links"><a href="cont.php">Contact</a></div>
      </nav>
    </header>
    <div class="background">
      <img src="bg7.jpg">
      <main class="container">
      <FORM name="register"  action="connect.php" method="POST" >

          <table>
            <tr>
              <td colspan="2" align="center"><h2>New Users,Register Here!</h2></td>
            </tr>
            <tr>
              <th align="right">Username : </th>
              <th align="left"><input type="text" id="add" name="p_fname" placeholder="Enter your Username" required=""></th>
            </tr>
            <tr>
              <th align="right">Age : </th>
              <th align="left"><input type="text" id="age" name="p_age" placeholder="Enter your Age" required=""></th>
            </tr>
            <tr>
              <th align="right">Gender : </th>
              <td align="left"><input type="radio" id="gender1" name="p_gender" value="male">Male
                <input type="radio" id="gender2" name="p_gender" value="female">Female</td>
            </tr>
            <tr>
              <th align="right">Email : </th>
              <th align="left"><input type="email" id="mail" name="email" placeholder="Enter your Email ID" required=""></th>
            </tr>
            <tr>
              <th align="right">Mobile Number : </th>
              <th align="left"><input type="text" id="num" name="p_contact" placeholder="Enter your Mobile Number" required=""></th>
            </tr>
            <tr>
              <th align="right">Password : </th>
              <th align="left"><input type="text" id="pwd" name="password" placeholder="Enter your new password" required=""></th>
            </tr>
            <tr>
              <th align="right">Confirm Password : </th>
              <th align="left"><input type="text" id="cpwd" name="cpwd" placeholder="Re-enter Password" required=""></th>
            </tr>
            <tr>
              <th colspan="2" align="center"> <div><INPUT TYPE="submit" value="Login" id="login" class="button" onclick="check()"></div></th>
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
          window.location.href ="log.php";
        }
      }
      
    </script>
  </body>
</html>
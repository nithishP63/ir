<!DOCTYPE html>
<html>
  <head>
    <title>IRCTC</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="items.css">
    <meta charset="utf-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header class="header">
      <div class="icon"><img src="icon.png">
      <div class="txt">IRCTC</div></div>
      <nav class="navigation">
        <div class="links"><a href="index.php">Home</a></div>
        <div class="links"><a href="abt.php">About</a></div>
        <div class="links"><a href="cont.php">Contact</a></div>
      </nav>
    </header>
    <div class="background">
      <img src="bg4.jpg">
    <section class="shop-list">
      <div class="container">
        <div><img src="th2.jpg"></div>
        <div><b>Bullet Train</b></div>
        <div><b>Ticket Fare: </b>Rs.1500 </div>
        <div><a href="pay.php" ><button class = "button" onclick="car1()">Select Train</button></a></div>
      </div>
      <div class="container">
        <div><img src="th3.jpg"></div>
        <div><b>Passenger Train</b></div>
        <div><b>Ticket Fare: </b>Rs.1000 </div>
        <div><a href="pay.php" ><button class = "button" onclick="car2()">Select Train</button></a></div>
      </div>
      <div class="container">
        <div><img src="th4.jpg"></div>
        <div><b>Local Train</b></div>
        <div><b>Ticket Fare: </b>Rs.900 </div>
        <div><a href="pay.php" ><button class = "button" onclick="car3()">Select Train</button></a></div>
      </div>
      <div class="container">
        <div><img src="th6.jpg"></div>
        <div><b>Express Train</b></div>
        <div><b>Ticket Fare: </b>Rs.1200 </div>
        <div><a href="pay.php" ><button class = "button" onclick="car4()">Select Train</button></a></div>
      </div>
      <div class="container">
        <div><img src="th7.jpg"></div>
        <div><b>Luxury Train</b></div>
        <div><b>Ticket Fare: </b>Rs.2000 </div>
        <div><a href="pay.php" ><button class = "button" onclick="car5()">Select Train</button></a></div>
      </div>
      <div class="container">
        <div><img src="th8.jpeg"></div>
        <div><b>Metro Rail</b></div>
        <div><b>Ticket Fare: </b>Rs.9000 </div>
        <div><a href="pay.php" ><button class = "button" onclick="car6()">Select Train</button></a></div>
      </div>
    </section>
    </div>
    <script>
      
      function car1(){
        var rent = 1500;
        localStorage.setItem("rent",rent);
      }
      function car2(){
        var rent = 1000;
        localStorage.setItem("rent",rent);
      }
      function car3(){
        var rent = 900;
        localStorage.setItem("rent",rent);
      }
      function car4(){
        var rent = 1200;
        localStorage.setItem("rent",rent);
      }
      function car5(){
        var rent = 2000;
        localStorage.setItem("rent",rent);
      }
      function car6(){
        var rent = 900;
        localStorage.setItem("rent",rent);
      }
    </script>
  
  </body>
    </html>

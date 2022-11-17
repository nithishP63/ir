<!DOCTYPE html>
<html>
  <head>
    <title>IRCTC</title>
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="payment.css">
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
    <section class="payment">
      <div class="bill">
        <table>
          <tr>
            <th colspan="2" align="center">&emsp;&emsp;&emsp;<span class="bil">BILL</span></th>
          </tr>
          <tr>
            <th align="right">Ticket Fare : </th>
            <td align="left">&nbsp;&nbsp;&nbsp;Rs. <span id="rent"></span></td>
          </tr>
          <tr>
            <th align="right">Number of Tickets : </th>
            <td align="left">&nbsp;&nbsp;&nbsp;<span id="demo"></span> Tickets</td>
          </tr>
          <tr>
            <th align="right">Total Amount : </th>
            <th align="left">&nbsp;&nbsp;&nbsp;Rs. <span id="calculation"></span></th>
          </tr>
        </table>
      </div>
      <div class="option">
        <h4 class="bil">Choose your payment option</h4>
        <div class="choose">
          <input type="radio" name="payment">Debit Card<br>
          <input type="radio" name="payment">Credit Card<br>
          <input type="radio" name="payment">UPI<br>
          <input type="radio" name="payment">Offline Transaction<br>
        </div>
      </div>
      <div class="submit">
        <a href="first.php"><button>Cancel Payment</button></a>
        <a href="#"><button onclick="license()">Make Payment</button></a>
      </div>
    </section>
    </div>
    <script>
      let no = localStorage.getItem("num");
      let rt = localStorage.getItem("rent");
      let cal= no * rt;
      document.getElementById("demo").innerHTML = no;
      document.getElementById("rent").innerHTML = rt;
      document.getElementById("calculation").innerHTML = cal;

      function license(){
        
          window.location.href = "congrats.php";
        
      }
    </script>
  </body>
</html>

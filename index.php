<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 

      <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" 
      crossorigin="anonymous"
  >
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" 
    crossorigin="anonymous">
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="style.css">
    <title>Basic Banking System</title>
  </head>

  <body>
  <?php include 'navbar.php'; ?>
  <section class="header">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h3 class="text-center" style = "font-size: 30px; padding: 6px;">Welcome to the Spark Bank</h3>
          <p class="text-center" style = "font-size: 14px">
            Banks borrow money by accepting funds deposited on current accounts,
            by accepting term deposits, and by issuing debt securities such as
            banknotes and bonds. Banks lend money by making advances to
            customers on current accounts, by making installment loans, and by
            investing in marketable debt securities and other forms of money
            lending.
          </p>
        </div>
        <div class="col-6 text-center">
          <img src="images\bank img.jpg" alt="">
        </div>
      </div>
    </div> 
  </section>
  <br><br>
<div class="container" id="about">
      <div class="row">
        <div class="col-6">
          <img src="images/logo.png" alt="sparks logo">
        </div>
        <div class="col-6">
          <span>
            <h2>
              <b>About Us</b>
            </h2>
          </span>
          <hr>
          <p>
            Spark Bank is a leading private sector bank. The Bank's consolidated total assets stood at
            Rs 14.76 trillion at july 2021. Spark Bank currently has a network of 5,288 branches and 15,158
            ATM's across India.
          </p>
          <span>
            <h2>
              <b>History</b>
            </h2>
          </span>
          <hr>
          <p>
            Spark Bank was originally promoted in 1994 by Sparks limited, an Indian financial institution, and was its
            wholly-owned subsidary.
          </p>
        </div>
      </div>
    </div>
    <br><br>
    <div class="container">
    <div class="row">
      <div class="col-4">
        <img src="images\moneytransfer1.jpg" alt="transfer money"><br><br>
        <button class = "btn btn-success">Transfer Money</button>
      </div>
      <div class="col-4">
        <img src="images\img.jpg" alt="history"><br><br>
        <a href="transactionhistory.php" class="text-dark">
          <button class = "btn btn-success">Transaction History</button>
        </a>
      </div>
      <div class="col-4">
        <img src="images\user.jpg" alt="customers"><br><br>
        <a href="createuser.php" class="text-dark">
          <button class = "btn btn-success">Create User</button>
        </a>
      </div>
    </div>
    <br>
  </div>
  <br><br>
    <footer>
    <div class="footer" id="footer">
      <div class="container">
        <h3 class="text-center">Content</h3>
        <br>
        <div class="row">
          <div class="col-4">
            <img src="images/logo.png" alt="">
            <br><br>
            <h4>The Sparks Bank</h4>
          </div>
          <div class="col-4">
            <h5 class="text-dark">Follow Us</h5>
              <br>
              <a href="#">
                <i class="fa fa-lg fa-facebook"></i>&nbsp;
              </a>
              <a href="#">
                <i class="fa fa-lg fa-twitter-square"></i>&nbsp;
              </a>
              <a href="#">
                <i class="fa fa-lg fa-instagram"></i>&nbsp;
              </a>
              <a href="#">
                <i class="fa fa-lg fa-linkedin"></i>&nbsp;
              </a>
              <br><br>
              <h4>Address</h4>
              <a href="#">
                <i class="fa fa-lg fa-address-card-o" aria-hidden="true">
                 Nandura 
                </i>&nbsp;
              </a>
          </div>
          <div class="col-4">
            <h5>Useful Links</h5>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-light" href="#top">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="createuser.php">Create User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="transfermoney.php">Transfer Money</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="transactionhistory.php">Transaction History</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <br>
    <div class = "text-center">
    <span>Copyright ©️ 2021,All right reserved Vaishnvai Naphade</span>
  </div>
    </div>
  </footer>
</body>
</html>
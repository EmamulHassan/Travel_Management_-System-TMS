<?php
ob_start();
include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- data table css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"> 
    <!-- css files -->
    <link rel="stylesheet" href="css/style.css">


    <title>Order Confirm</title>
  </head>
  <body>

    <header>

      <!-- navbar start -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" id="navbar">
        <div class="container">
          <a class="logo" href="index.php">
                <img src="images/logo.png" style="min-width: 50px; height: 30px" alt="logo">
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link disabled" href="#cardholder">Book a Travel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedbackwrite.php">Feedback</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="trackOrder.php">Track Your Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/index.php">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar end -->

    </header>

      <!-- Order Confirm infomation start -->
      <div class="container" style="padding: 20px">

      <h2>Your Order has Been Confirmed. Send the Following Amount to the Number below via BKash.</h2><br>
      <h2><img src="images/bkash.png" alt="bkash">Bkash No: <u>01987654321</u></h2><br>

      <h2 style="padding-bottom: 20px">Order Details: </h2>

      <!-- table starts -->
            <table>
              <tr>
                <!-- <th>No.</th> -->
                <th>OrderID</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Date of Order</th>
                <th>Preferred Time</th>
                <th>Trip Location</th>
                <th>Price(BDT)</th>
              </tr>
              
              

            </table>
            <!-- table ends -->

      <form name="otpconfirm" method="POST"  style="padding-top: 20px"> 


        <label for="otp"><b>Enter TrxID: </b></label>
              <input type="int" id="otp" name="otp" placeholder="Enter the transaction id..."><br>

      </form>
    
          <button type="submit" name="submit" onclick="validateFormotp()">Submit</button>

    </div>


    
      <!-- Order Confirm infomation end -->


      <!-- footer start -->
      <footer class="bg-dark text-center text-white" id="footer" style="position: fixed; width: 100%; bottom: 0">
        <!-- Grid container -->
        <!-- <div class="container pt-4 pb-2">
          <div class="col-auto">
            <p class="pt-2"><b>Please Write a Review if you Enjoyed Our Service.</b></p>
            <a href="feedbackwrite.php"><button type="submit" class="btn btn-outline-light mb-4"> Give Feedback </button></a>
          </div>
        </div>

        <div class="container pb-2">
          <div class="col-auto">
            <p class="pt-2"><b>Check Our Feedbacks from the Visitors around the World.</b></p>
            <button type="submit" class="btn btn-outline-light mb-4"> Check Feedbacks </button>
          </div>
        </div> -->

        <section class="mb-4 pt-4">
            <h3>Contact Info.</h3><hr>
            <p>Location: Bashundhara Dhaka</p>
            <p>Email: <a href="mailto:bookfast@gmail.com" style="text-decoration: none; color: white"><u>bookfast@gmail.com</u></a></p>
            <p>Phone: 01987654321</p>
          </section>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2021 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">BookFast.com</a>
        </div>

      </footer>
      <!-- footer end -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/mainotp.js"></script>  
<?php 
ob_end_flush();
 ?>
  </body>
</html>
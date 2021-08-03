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

    <title>Feedback</title>
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
              <li class="nav-item">
                <a class="nav-link" href="booktrip.php">Book a Travel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contact us</a>
              </li>
              <li class="nav-item active">
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


    <!-- feedback form start -->

    <h1 style="text-align : center; margin : 50px 0px">Write Feedback</h1>

    <div class="container feedback-container">
      <div class="row" style="padding-bottom: 20px">
        <form action="" method="post">
            <label for="name">Name: </label>
            <input type="text" id="name" name="name" placeholder="Your name.." required/>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email.."/>

            <label for="orderID">Order ID</label>
            <input type="text" id="orderID" name="orderID" placeholder="Your Order ID.."/>

            <label for="service">Please Select Service: </label>
            <select id="service" name="service" required>
              <option value="">Select Travel Location</option>
              <option value="United States">United States</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="France">France</option>
            </select><br><br>

            <label for="Feedback">Write Feedback</label>
            <textarea id="Feedback" name="feedback" required placeholder="Write something.." style="height: 400px"></textarea>

            <button class="btn btn-success" id="submit" name="submit">Submit</button>
        </form>
      </div>

      <?php
            if(isset($_POST['submit'])) 
            {
                $name           = $_POST['name'];
                $email          = $_POST['email'];
                $service        = $_POST['service'];
                $feedback       = $_POST['feedback'];
               
                
                
               
               
               $query = "INSERT INTO feedbackwrite(name, email, service, feedback) VALUES('$name', '$email', '$service', '$feedback')"; 

               $feedbackconfirm = mysqli_query($connect, $query);

                if ($feedbackconfirm)
                {
                    header("Location: index.php");
                    
                }
            } 

        ?>

    </div>


      <!-- footer start -->
      <footer class="bg-dark text-center text-white" id="footer">
        <!-- Grid container -->
    
        <div class="container pt-4 pb-2">
          <div class="col-auto">
            <p class="pt-2"><b>Check Our Feedbacks from the Visitors around the World.</b></p>
            <a href="feedbackread.php"><button type="submit" class="btn btn-outline-light mb-4"> Check Feedbacks </button></a>
          </div>
        </div>

        <section class="mb-4">
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

    <?php 
    ob_end_flush();
     ?>
  </body>
</html>
<?php
ob_start();
include "../db.php";
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
    <link rel="stylesheet" href="../css/style.css">

    <title>Manage Orders</title>
  </head>
  <body>

    <header>

      <!-- navbar start -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" id="navbar">
        <div class="container">
          <a class="logo" href="index.php">
                <img src="../images/logo.png" style="min-width: 50px; height: 30px" alt="logo">
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="adminconfirmOrder.php">Manage Orders
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminarchivedOrders.php">Completed Orders</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="index.php">Sign Out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar end -->

    </header>

    <!-- confirm order table start -->

    <section>

        <h2 style="text-align: center; padding: 20px;">Manage Orders</h2>

        <div class="container">
            <!-- table starts -->
            <table>
              <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Date of Order</th>
                <th>Check in Time</th>
                <th>RoomType - Price(BDT)</th>
                <th>Action</th>
              </tr>
              
              <?php 

                    //read query (read sql command) to read all data from users table
                    $query = "SELECT * FROM roombook";

                    // Pass the SQL Command to the Database
                    $orders = mysqli_query($connect, $query);

                    // variable for sl no.
                    $i = 1;

                    // Receive all the Data From Users Table using a Loop
                    while ($row = mysqli_fetch_assoc($orders)) {
                        $id             = $row['id'];
                        $name           = $row['name'];
                        $phone          = $row['phone'];
                        $email          = $row['email'];
                        $dateorder      = $row['dateorder'];
                        $checkinTime    = $row['checkinTime'];
                        $price       	  = $row['price'];


                        ?>
                        <tr>
                          <th scope="row"><?php echo $i; ?></th>
                          <td><?php echo $name; ?></td>
                          <td><?php echo $phone; ?></td>
                          <td><?php echo $email; ?></td>
                          <td><?php echo $dateorder; ?></td>
                          <td><?php echo $checkinTime; ?></td>
                          <td><?php echo $price; ?></td>
                          <td><a href="adminconfirmOrder.php?id=<?php echo $id; ?>" type="submit">Confirm</a></td>
                        </tr>

                    <?php
                    $i++;
                    }

                    ?>

            </table>
            <!-- table ends -->
            <?php 
            if (isset($_GET['id'])) {
                
                $orderId = $_GET['id'];
                $query = "SELECT * FROM roombook WHERE id = '$orderId' ";

                $getInfo = mysqli_query($connect, $query);

                while ($row = mysqli_fetch_assoc($getInfo)) {
                    
                    $name       	= $row['name'];
                    $phone      	= $row['phone'];
                    $email      	= $row['email'];
                    $dateorder  	= $row['dateorder'];
                    $checkinTime	= $row['checkinTime'];
                    $price   		= $row['price'];

                    $query = "INSERT INTO archivedorder(id, name, phone, email, dateorder, checkinTime, price) VALUES('$orderId', '$name', '$phone', '$email', '$dateorder', '$checkinTime', '$price')"; 

                    $orderArchived = mysqli_query($connect, $query);
                    if ($orderArchived) 
                    {
                        $query = "DELETE FROM roombook WHERE id= '$orderId'";
                        $deleteOrder = mysqli_query($connect, $query);
                        header('Location: adminconfirmOrder.php');
                    } else 
                    {
                        die('Operation failed' . mysqli_error($connect));
                    }
                }
            } 
            ?>
            
            <a href="adminarchivedOrders.php"><button>Completed Orders</button></a>


        </div>
    </section>

    

    <!-- confirm order table end -->

    


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
            <p>Email: <a href="mailto:bookfest@gmail.com" style="text-decoration: none; color: white"><u>bookfest@gmail.com</u></a></p>
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
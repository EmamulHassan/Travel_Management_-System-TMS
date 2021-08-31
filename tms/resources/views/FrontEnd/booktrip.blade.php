

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
    <link rel="stylesheet" href="{{asset('FrontEnd/css/style.css')}}">


    <title>Order Information</title>
  </head>
  <body>

    <header>

      <!-- navbar start -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" id="navbar">
        <div class="container">
          <a class="logo" href="{{route('homepage')}}">
                <img src="{{asset('FrontEnd/images/logo .png')}}" style="min-width: 50px; height: 30px" alt="logo">
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route('homepage')}}">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link disabled" href="{{route('booktrip')}}">Book a Travel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedbackwrite.php">Feedback</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('trackOrder')}}">Track Your Order</a>
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

      <!-- book infomation start -->
      <h2 style="text-align: center; padding: 20px;">Enter Purchase Information</h2>


    <div class="container">

      <form action=" {{route('store')}} " method="POST"  >
        @csrf

          <p style="margin-bottom: 10px;">Please Enter Booking Informations.</p>
          <hr>

          <label id="textview" for="name"><b>Name: </b></label>
          <input type="text" id="name" name="name" placeholder="Input Your Name..." ><br>


          <label for="phone"><b>Phone No: </b></label>
          <input type="phone" id="phone" name="phone" placeholder="Enter Your Phone Number..."><br>


          <label for="email"><b>Email(Optional): </b></label>
          <input type="email" id="email" name="email" placeholder="Enter Your Email..."><br><br>


          <label for="dateofOrder"><b>Select Date: </b></label>
          <input type="date" id="dateorder" name="dateorder"><br><br>

          <label for="checkinTime"><b>Preferred Flight Time: </b></label>
            <select id="checkinTime" name="checkinTime">
              <option value="selectcheckinTime">Select a Time</option>
              <option value="02.00am">02.00am</option>
              <option value="04.00am">04.00am</option>
              <option value="06.00am">06.00am</option>
              <option value="08.00am">08.00am</option>
              <option value="10.00am">10.00am</option>
              <option value="12.00pm">12.00pm</option>
              <option value="02.00pm">02.00pm</option>
              <option value="04.00pm">04.00pm</option>
              <option value="06.00pm">06.00pm</option>
              <option value="08.00pm">08.00pm</option>
              <option value="10.00pm">10.00pm</option>
              <option value="12.00am">12.00am</option>
            </select><br><br>

          <label for="trip"><b>Please Select the Trip Location: </b></label>
            <select id="room" name="trip">
              <option value="selecttrip">Select Trip Location</option>
              <option value="Single Room - 6000BDT">United States - 60000/-</option>
              <option value="Deluxe Room - 8000BDT">United Kingdom - 70000/-</option>
              <option value="Double Room - 10000BDT">France - 80000/-</option>
            </select><br><br>


        <button class="btn btn-primary" >Confirm</button>






          <!-- <input type="submit" id="submit" name="submit" value="Submit"> -->


      </form>



      </div>
      <!-- book infomation end -->


      <!-- footer start -->
      <footer class="bg-dark text-center text-white" id="footer">
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

  </body>
</html>

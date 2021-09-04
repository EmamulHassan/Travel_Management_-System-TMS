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

    <title>Homepage</title>
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
              <li class="nav-item active">
                <a class="nav-link" href="{{route('homepage')}}">Home
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('booktrip')}}">Book a Travel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('feedback')}}">Feedback</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('trackOrder')}}">Track Your Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.dashboard')}}">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar end -->

    </header>

      <!-- banner start -->
      <!-- <marquee behavior="slide" direction="up" scrollamount="7" style="font-size:50px; color:#0058e693 ">TripFest</marquee>
      <marquee behavior="slide" direction="down" scrollamount="7"style="font-size:30px">Your One Stop <span style="color:#0058e693">Companion</span></marquee>
      <marquee behavior="slide" direction="down" scrollamount="7" style="font-size:30px">Choosing Your Next <span  style="color -->

    <div style="height: 70vh; padding-left: 10%; padding-top:10%; background-color:#faf9f6; background-attachment:fixed; line-height:1.6; background-image: url('{{asset('FrontEnd/images/bann.jpg')}}'); background-repeat: no-repeat; background-size: 100% 100%">
      <marquee behavior="slide" direction="up" scrollamount="25">
        <h1 style="font-size:50px; color: white">BookFast.</h1>
        <h3 style="font-size:40px; color: skyblue">Your One Stop <span style="color: white">Companion.</span></h3>
        <h3 style="font-size:40px; color: skyblue">Choosing Your Next <span  style="color: white">Destination.</span></h3>
      </marquee>
    </div>
      <!-- banner end -->

      <!-- carasoul start -->
      <div class="bd-example" id="services">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('FrontEnd/images/car1.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Lorem.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('FrontEnd/images/car2.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Lorem.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="{{asset('FrontEnd/images/car3.jpg')}}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Lorem.</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!-- carasoul end -->

      <!-- card start -->
      <div class="cardholder" id="cardholder">
      <h1 style="text-align : center; margin : 50px 0px">Choose a Trip</h1>

          <div class="row">
            <div class="col-lg-4 mb-4">
            <div class="card">
              <img src="{{asset('FrontEnd/images/us.png')}}" alt="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><b>United States</b></h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <p class="card-text"><b>Starts from: </b> 60000BDT/ Person</p>
               <a href="{{route('place.us')}}" class="btn btn-outline-success btn-sm">See Details!</a>
              </div>
             </div>
            </div>

          <div class="col-lg-4 mb-4">
          <div class="card">
              <img src="{{asset('FrontEnd/images/uk.png')}}" alt="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><b>United Kingdom</b></h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <p class="card-text"><b>Starts from: </b> 70000BDT/ Person</p>
               <a href="{{route('place.us')}}" class="btn btn-outline-success btn-sm">See Details!</a>
              </div>
              </div>
            </div>

            <div class="col-lg-4 mb-4">
            <div class="card">
              <img src="{{asset('FrontEnd/images/uk.png')}}" alt="" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><b>France</b></h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <p class="card-text"><b>Starts from: </b> 80000BDT/ Person</p>
               <a href="{{route('place.us')}}" class="btn btn-outline-success btn-sm">See Details!</a>
              </div>
             </div>
            </div>
          </div>

      </div>
      <!-- card end -->

      <!-- feedback start -->

      <!-- feedback end -->


      <!-- footer start -->
      <footer class="bg-dark text-center text-white" id="footer">
        <!-- Grid container -->
        <div class="container pt-4 pb-2">
          <div class="col-auto">
            <p class="pt-2"><b>Please Write a Review if you Enjoyed Our Service.</b></p>
            <a href="{{route('feedback')}}"><button type="submit" class="btn btn-outline-light mb-4"> Give Feedback </button></a>
          </div>
        </div>

        <div class="container pb-2">
          <div class="col-auto">
            <p class="pt-2"><b>Check Our Feedbacks from the Visitors around the World.</b></p>
            <a href="{{route('feedbackread')}}"><button type="submit" class="btn btn-outline-light mb-4"> Check Feedbacks </button></a>
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
          <a class="text-white" href="BookFast.com">BookFast.com</a>
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
  </body>
</html>

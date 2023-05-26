<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS only -->
  <?php 
  require('links.php');
  ?>
  <title>hotel booking-Home</title>
</head>

<body>
 <?php 
 include 'nav.php';
 ?>

  <!-- Carousel nav-->
  <div id="demo" class="carousel slide mx-3" data-bs-ride="carousel" id="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="carousel/IMG_15372.png" alt="Los Angeles" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="carousel/IMG_40905.png" alt="Chicago" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="carousel/IMG_55677.png" alt="New York" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="carousel/IMG_62045.png" alt="New York" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="carousel/IMG_93127.png" alt="New York" class="d-block w-100">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <!--ckeck booking avability-->
  <div class="container pt-3 pb-1 bg-white shadow p-3 mb-5 bg-body rounded" id="booking">
    <div class="row">
      <h5 class="pb-3">Check Booking Avaibality</h5>
      <form class="form-group">
        <div class="col-3">
          <label class="form-label">Check-in</label><br>
          <div class="input-group mb-3">
            <input type="date" class="form-control" placeholder="dd-mm-yyyy" aria-label="Username">
          </div>

        </div>
        <div class="col-3">
          <label class="form-label">Check-out</label><br>
          <div class="input-group mb-3">
            <input type="date" class="form-control" placeholder="dd-mm-yyyy" aria-label="Username">
          </div>

        </div>
        <div class="col-3">
          <label class="form-label">Adult</label><br>
          <select class="form-select" aria-label="Default select example">
            <option selected>Choose</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-3">
          <label class="form-label">Children</label><br>
          <select class="form-select" aria-label="Default select example">
            <option selected>open this select n</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </form>
    </div>
  </div>
 <!--our Rooms-->
  <div class="container pb-2">
    <h4 class="text-center fs-2 justify-content-evenly pb-5">OUR ROOMS</h4>
    <div class="row justify-content-between">
      <div class="col-md-3 shadow p-3 mb-5 bg-body rounded">
        <img src="rooms/IMG_11892.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title pt-4">Simple Room Name</h5>
          <p class="card-text">₹200 per night</p>
        </div>
        <div class="row pt-3">
          <h5>Fratures</h5>
          <div class="col-12">
            <span class="me-2 bg-light">2 rooms</span>
            <span class="me-2 bg-light">1 bothroom</span>
            <span class="me-2 bg-light">4 sofa</span>
            <span class="me-2 bg-light">1 balcony</span>
          </div>
        </div>
        <div class="row pt-3">
          <h5>Facility</h5>
          <div class="col-12">
            <span class="me-2 bg-light">wifi</span>
            <span class="me-2 bg-light">television</span>
            <span class="me-2 bg-light">AC</span>
            <span class="me-2 bg-light">Room Heater</span>
          </div>
        </div>
        <div class="row pt-3">
          <h5>Reating</h5>
          <div class="col-12">
            <span>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="row py-3">
            <div class="col-12 d-flex px-4 justify-content-between">
              <button type="button" class="btn btn-success">Book Now</button>
              <button type="button" class="btn btn-outline-dark">More details</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 shadow p-3 mb-5 bg-body rounded">
        <img src="rooms/IMG_42663.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title pt-4">Simple Room Name</h5>
          <p class="card-text">₹200 per night</p>
        </div>
        <div class="row pt-3">
          <h5>Fratures</h5>
          <div class="col-12">
            <span class="me-2 bg-light">2 rooms</span>
            <span class="me-2 bg-light">1 bothroom</span>
            <span class="me-2 bg-light">4 sofa</span>
            <span class="me-2 bg-light">1 balcony</span>
          </div>
        </div>
        <div class="row pt-3">
          <h5>Facility</h5>
          <div class="col-12">
            <span class="me-2 bg-light">wifi</span>
            <span class="me-2 bg-light">television</span>
            <span class="me-2 bg-light">AC</span>
            <span class="me-2 bg-light">Room Heater</span>
          </div>
        </div>
        <div class="row pt-3">
          <h5>Reating</h5>
          <div class="col-12">
            <span>
              <i class="bi bi-star-fill text-warning text-warning"></i>
              <i class="bi bi-star-fill text-warning text-warning"></i>
              <i class="bi bi-star-fill text-warning text-warning"></i>
              <i class="bi bi-star-fill text-warning text-warning"></i>
            </span>
          </div>
          <div class="row py-3">
            <div class="col-12 d-flex px-4 justify-content-between">
              <button type="button" class="btn btn-success">Book Now</button>
              <button type="button" class="btn btn-outline-dark">More details</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 shadow p-3 mb-5 bg-body rounded">
        <img src="rooms/IMG_65019.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title pt-4">Simple Room Name</h5>
          <p class="card-text">₹200 per night</p>
        </div>
        <div class="row pt-3">
          <h5>Fratures</h5>
          <div class="col-12">
            <span class="me-2 bg-light">2 rooms</span>
            <span class="me-2 bg-light">1 bothroom</span>
            <span class="me-2 bg-light">4 sofa</span>
            <span class="me-2 bg-light">1 balcony</span>
          </div>
        </div>
        <div class="row pt-3">
          <h5>Facility</h5>
          <div class="col-12">
            <span class="me-2 bg-light">wifi</span>
            <span class="me-2 bg-light">television</span>
            <span class="me-2 bg-light">AC</span>
            <span class="me-2 bg-light">Room Heater</span>
          </div>
        </div>
        <div class="row pt-3">
          <h5>Reating</h5>
          <div class="col-12">
            <span>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning text-warning text-warning"></i>
            </span>
          </div>
          <div class="row py-3">
            <div class="col-12 d-flex px-4 justify-content-between">
              <button type="button" class="btn btn-success">Book Now</button>
              <button type="button" class="btn btn-outline-dark">More details</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 justify-content-center d-flex">
        <button type="button" class="btn btn-outline-dark">More room....</button>
      </div>
    </div>
  </div>

<!--room facilites-->
  <div class="container my-5">
    <h4 class="text-center fs-2 justify-content-evenly pb-5">Room Facilites</h4>
    <div class="row d-flex justify-content-between">
      <div class="col-md-2 shadow p-3 mb-5 bg-body rounded text-center">
        <i class="bi bi-wifi fs-1"></i>
        <p class="">wifi</p>
      </div>
      <div class="col-md-2 shadow p-3 mb-5 bg-body rounded text-center">
        <i class="bi bi-wifi fs-1"></i>
        <p class="">wifi</p>
      </div>
      <div class="col-md-2 shadow p-3 mb-5 bg-body rounded text-center">
        <i class="bi bi-wifi fs-1"></i>
        <p class="">wifi</p>
      </div>
      <div class="col-md-2 shadow p-3 mb-5 bg-body rounded text-center">
        <i class="bi bi-wifi fs-1"></i>
        <p class="">wifi</p>
      </div>
      <div class="col-md-2 shadow p-3 mb-5 bg-body rounded text-center">
        <i class="bi bi-wifi fs-1"></i>
        <p class="">wifi</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 justify-content-center d-flex">
        <button type="button" class="btn btn-outline-dark">More Facility....</button>
      </div>
    </div>
  </div>

  <!-- slider 3d -->


   <!--reach us-->
  <div class="container">
    <h4 class="text-center fs-2 justify-content-evenly">Reach Us</h4>
    <div class="row d-flex justify-content-between">
      <div class="col-md-8 p-2 shadow p-3 mb-5 bg-body rounded">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3664.8049776577213!2d77.4113711147747!3d23.286534984820044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c69350f4b67cd%3A0xd65c44c1bceb7ee0!2sShiv%20shakti%20nagar!5e0!3m2!1sen!2sin!4v1664199827895!5m2!1sen!2sin"
          width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-md-3 text-start">
        <div class="row">
          <div class="col-12 shadow p-3 mb-5 bg-body rounded pb-4">
            <h3>Call us</h3>
            <i class="bi bi-telephone-fill me-1 text-primary"></i><span>+9131681086</span><br>
            <i class="bi bi-telephone-fill me-1 text-primary"></i><span>+8827256809</span>
          </div>
          <div class="col-12 shadow mb-5 pb-3 bg-body rounded">
            <h3>Follow us</h3>
            <div class="">
            <i class="bi bi-twitter me-1 text-primary"></i><span>Twiter</span><br>
            </div>
            <div class="my-2">
            <i class="bi bi-instagram me-1 text-danger"></i><span>instagram</span><br>
            </div>
            <i class="bi bi-facebook me-1 text-primary"></i><span>facebook</span>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php 
require('footer.php');
?>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
    <!--internal script-->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });

  </script>
</body>

</html>
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
  <style>
    .pop:hover {
      border-top-color: aqua !important;
      cursor: pointer;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
  <title>hotel booking-facilities</title>
</head>

<body>
  <?php 
 include 'nav.php';
 ?>

  <div class="container my-5 pt-5" id="facilites">
    <!-- <span class=" fs-2  text-dark border-bottom border-dark border-1">Room Facilites</span> -->
      <div class="col input-group mb-3 d-flex justify-content-center">
        <span class="fs-3 fw-bold border-3 border-bottom border-dark">Facilites</span>
      </div>
      <div class="row mt-lg-4">
        <div class="col-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light bg-white around shadow">
            <div class="container-fluid flex-lg-column align-items-stretch">
              <h4 class="mt-2">filters</h4>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filters"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse flex-lg-column" id="filters">
                
                <div class="p-2 col-12">
                  <div class="bg-color-white rounded mb-3 p-2 border">
                    <h5 class="fw-bold">check avaibility</h5>
                    <div class="mb-3">
                      <label class="form-label">check-in</label>
                      <input type="date" class="form-control" placeholder="dd-mm-yyyy">
                    </div>
                    <div class="mb-3">
                      <label class="form-label">check-out</label>
                      <input type="date" class="form-control" placeholder="dd-mm-yyyy">
                    </div>
                  </div>
                </div>

                <div class="p-2 col-12">
                  <div class="bg-color-white rounded mb-3 p-2 border">
                    <h5 class="fw-bold">facilites</h5>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                  </div>
                </div>

                <div class="p-2 col-12">
                  <div class="bg-color-white rounded mb-3 p-2 border">
                    <h5 class="fw-bold">Gruest</h5>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label">Adults</label>
                          <input type="number" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label">Children</label>
                          <input type="number" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          
              </div>
            </div>
          </nav>
        </div>
        <div class="col-lg-9">
          <div class="">
          <div class="row shadow around">
            <div class="col-lg-5">
                <img src="rooms/IMG_11892.png" class="card-img-top py-2">
            </div>
            <div class="col-lg-7">
              <h4 class="">simple rooms name</h4>
                <div class="row">
                  <div class="col-lg-8">
                    <div class="row">
                      <h6>Fratures</h6>
                      <div class="col-12">
                        <span class="me-2 bg-light">2 rooms</span>
                        <span class="me-2 bg-light">1 bothroom</span>
                        <span class="me-2 bg-light">4 sofa</span>
                        <span class="me-2 bg-light">1 balcony</span>
                      </div>
                    </div>
                    <div class="row pt-2">
                      <h6>Facility</h6>
                      <div class="col-12">
                        <span class="me-2 bg-light">wifi</span>
                        <span class="me-2 bg-light">television</span>
                        <span class="me-2 bg-light">AC</span>
                        <span class="me-2 bg-light">Room Heater</span>
                      </div>
                    </div>
                    <div class="row pt-2">
                      <h6>Gruest</h6>
                      <div class="col-12">
                        <span class="me-2 bg-light">5 Adults</span>
                        <span class="me-2 bg-light">3 Childrens</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                        <h5>₹200 per night</h5>
                        <button type="button" class="btn btn-success px-4 my-2" id="roombtn">Book Now</button>
                        <button type="button" class="btn btn-outline-dark px-3" id="roombtn">More details</button>
                  </div>
                </div>
            </div>
          </div>
          
          <div class="my-4">
            <div class="row around shadow">
            <div class="col-lg-5">
                <img src="rooms/IMG_11892.png" class="card-img-top py-2">
            </div>
            <div class="col-lg-7">
              <h4 class="">simple rooms name</h4>
                <div class="row">
                  <div class="col-lg-8">
                    <div class="row">
                      <h6>Fratures</h6>
                      <div class="col-12">
                        <span class="me-2 bg-light">2 rooms</span>
                        <span class="me-2 bg-light">1 bothroom</span>
                        <span class="me-2 bg-light">4 sofa</span>
                        <span class="me-2 bg-light">1 balcony</span>
                      </div>
                    </div>
                    <div class="row pt-2">
                      <h6>Facility</h6>
                      <div class="col-12">
                        <span class="me-2 bg-light">wifi</span>
                        <span class="me-2 bg-light">television</span>
                        <span class="me-2 bg-light">AC</span>
                        <span class="me-2 bg-light">Room Heater</span>
                      </div>
                    </div>
                    <div class="row pt-2">
                      <h6>Gruest</h6>
                      <div class="col-12">
                        <span class="me-2 bg-light">5 Adults</span>
                        <span class="me-2 bg-light">3 Childrens</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                        <h5>₹200 per night</h5>
                        <button type="button" class="btn btn-success px-4 my-2" id="roombtn">Book Now</button>
                        <button type="button" class="btn btn-outline-dark px-3" id="roombtn">More details</button>
                  </div>
                </div>
            </div>
          </div>

          <div class="my-4">
            <div class="row around shadow">
            <div class="col-lg-5">
                <img src="rooms/IMG_11892.png" class="card-img-top py-2">
            </div>
            <div class="col-lg-7">
              <h4 class="">simple rooms name</h4>
                <div class="row">
                  <div class="col-lg-8">
                    <div class="row">
                      <h6>Fratures</h6>
                      <div class="col-12">
                        <span class="me-2 bg-light">2 rooms</span>
                        <span class="me-2 bg-light">1 bothroom</span>
                        <span class="me-2 bg-light">4 sofa</span>
                        <span class="me-2 bg-light">1 balcony</span>
                      </div>
                    </div>
                    <div class="row pt-2">
                      <h6>Facility</h6>
                      <div class="col-12">
                        <span class="me-2 bg-light">wifi</span>
                        <span class="me-2 bg-light">television</span>
                        <span class="me-2 bg-light">AC</span>
                        <span class="me-2 bg-light">Room Heater</span>
                      </div>
                    </div>
                    <div class="row pt-2">
                      <h6>Gruest</h6>
                      <div class="col-12">
                        <span class="me-2 bg-light">5 Adults</span>
                        <span class="me-2 bg-light">3 Childrens</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                        <h5>₹200 per night</h5>
                        <button type="button" class="btn btn-success px-4 my-2" id="roombtn">Book Now</button>
                        <button type="button" class="btn btn-outline-dark px-3" id="roombtn">More details</button>
                  </div>
                </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
      </div>
  </div>
<?php 
require('footer.php');
?>


</body>

</html>
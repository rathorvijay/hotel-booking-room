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
    .pop:hover{
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

  <div class="container mt-5 pt-5" id="facilites">
    <!-- <span class=" fs-2  text-dark border-bottom border-dark border-1">Room Facilites</span> -->
    <div class="col input-group mb-3 d-flex justify-content-center">
      <span class="fs-3 fw-bold border-3 border-bottom border-dark">Facilites</span>
    </div>
    <div class="row justify-content-around pt-5">
      <div class="col-md-3 shadow p-3 mb-5 bg-body rounded border-top border-4 border-dark pop">
        <i class="bi bi-wifi fs-2 me-2"></i>
        <span class="fs-3">wifi</span>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quae fuga impedit, blanditiis sapiente sed,
          aperiam consequatur qui accusantium dolorum aut perferendis voluptatibus?
        </p>
      </div>
      <div class="col-md-3 shadow p-3 mb-5 bg-body rounded border-top border-4 border-dark pop">
        <h4>Water purification system</h4>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quae fuga impedit, blanditiis sapiente sed,
          aperiam consequatur qui accusantium dolorum aut perferendis voluptatibus?
        </p>
      </div>
      <div class="col-md-3 shadow p-3 mb-5 bg-body rounded border-top border-4 border-dark pop">
        <h4>Car parking</h4>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quae fuga impedit, blanditiis sapiente sed,
          aperiam consequatur qui accusantium dolorum aut perferendis voluptatibus?
        </p>
      </div>
      <div class="row justify-content-around">
        <div class="col-md-3 shadow p-3 mb-5 bg-body rounded border-top border-4 border-dark pop">
          <h4>24 Hour security</h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quae fuga impedit, blanditiis sapiente sed,
            aperiam consequatur qui accusantium dolorum aut perferendis voluptatibus?
          </p>
        </div>
        <div class="col-md-3 shadow p-3 mb-5 bg-body rounded border-top border-4 border-dark pop">
          <h4>Sunset boat trip</h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quae fuga impedit, blanditiis sapiente sed,
            aperiam consequatur qui accusantium dolorum aut perferendis voluptatibus?
          </p>
        </div>
        <div class="col-md-3 shadow p-3 mb-5 bg-body rounded border-top border-4 border-dark pop">
          <h4>Poolside bar</h4>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum quae fuga impedit, blanditiis sapiente sed,
            aperiam consequatur qui accusantium dolorum aut perferendis voluptatibus?
          </p>
        </div>
       
      </div>
    </div>
  </div>

  <?php 
require('footer.php');
?>


</body>

</html>
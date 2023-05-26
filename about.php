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
            <span class="fs-3 fw-bold border-3 border-bottom border-dark">ABOUT US</span>
        </div>
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto asperiores, animi id a sapiente,
                    recusandae amet <br>optio doloremque earum iure quis culpa quidem quas. Dolores nulla culpa eligendi
                    quae. Impedit!</h>
            </div>
            <div class="row  justify-content-between align-items-center pd-lg-5">
                <div class="col-md-5 about order-md-1 order-2">
                    <h3 class="">Lorem ipsum dolor sit amet.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt quam optio provident quo minus
                        numquam corrupti nobis eius quasi! Neque voluptatum molestias itaque? Soluta necessitatibus
                        vitae quasi quisquam, iste optio totam iusto, tempora delectus debitis natus quo consequatur.
                        Dolores, eius!</p>
                </div>
                <div class="col-md-5 order-md-2 order-1">
                    <img src="about/IMG_17352.jpg" alt="not present" width="520" height="350">
                </div>
            </div>
        </div>
    </div>

    <!--room facilites-->
    <div class="container mt-5">
        <div class="row d-flex justify-content-between">
            <div class="col-md-2 shadow p-3 mb-5 bg-body rounded text-center  border-top border-4 border-dark pop">
                <i class="bi bi-wifi fs-1"></i>
                <p class="">100+ ROOM</p>
            </div>
            <div class="col-md-2 shadow p-3 mb-5 bg-body rounded text-center  border-top border-4 border-dark pop">
                <i class="bi bi-wifi fs-1"></i>
                <p class="">200+ CUSTOMER</p>
            </div>
            <div class="col-md-2 shadow p-3 mb-5 bg-body rounded text-center  border-top border-4 border-dark pop">
                <i class="bi bi-wifi fs-1"></i>
                <p class="">40+ REVIEW</p>
            </div>
            <div class="col-md-2 shadow p-3 mb-5 bg-body rounded text-center  border-top border-4 border-dark pop">
                <i class="bi bi-wifi fs-1"></i>
                <p class="">300+ STAFFS</p>
            </div>
            <div class="col-md-2 shadow p-3 mb-5 bg-body rounded text-center  border-top border-4 border-dark pop">
                <i class="bi bi-wifi fs-1"></i>
                <p class="">300+ SERVISES</p>
            </div>
        </div>
    </div>

    <?php 
    require('footer.php');
    ?>
</body>

</html>
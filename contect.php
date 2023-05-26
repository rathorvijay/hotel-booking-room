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
    <title>hotel booking-contect</title>
</head>

<body>
    <?php 
 include 'nav.php';
 ?>

    <div class="container my-5 pt-5" id="facilites">
        <!-- <span class=" fs-2  text-dark border-bottom border-dark border-1">Room Facilites</span> -->
        <div class="col input-group mb-lg-3 d-flex justify-content-center">
            <span class="fs-3 fw-bold border-3 border-bottom border-dark">CONTECT US</span>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center mb-5">
                <h>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto asperiores, animi id a sapiente,
                    recusandae amet <br>optio doloremque earum iure quis culpa quidem quas. Dolores nulla culpa eligendi
                    quae. Impedit!</h>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-lg-6 shadow p-3 mb-5 bg-body rounded">
                    <div class="m-2">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3664.8049776577213!2d77.4113711147747!3d23.286534984820044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c69350f4b67cd%3A0xd65c44c1bceb7ee0!2sShiv%20shakti%20nagar!5e0!3m2!1sen!2sin!4v1664199827895!5m2!1sen!2sin"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <h4 class="mt-3">Address</h4>
                        <a href="" class="text-decoration-none text-dark">shiv shakti nagar,Bhopal,M.P.</a>
                    
                        <h4 class="mt-3">Call us</h4>
                        <i class="bi bi-telephone-fill me-1"></i><span>+9131681086</span><br>
                        <i class="bi bi-telephone-fill me-1"></i><span>+8827256809</span>

                        <h4 class="mt-3">Email</h4>
                        <a href="mailto:vijayrathor856@gmail.com" class="text-decoration-none">V.j.hotel56@.gmail.com</a>
                    
                        <h4 class="mt-3">Follow us</h4>
                         <a href="" class="fs-4 me-2"><i class="bi bi-twitter me-1"></i></a>
                         <a href="" class="fs-4 text-danger me-2"><i class="bi bi-instagram me-1"></i></a>
                         <a href="" class="fs-4"><i class="bi bi-facebook me-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 shadow p-3 mb-5 bg-body rounded">
                    <div class="m-2">
                        <form>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">subject</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Message</label>
                                <textarea class="form-control" aria-label="With textarea"></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <button class="btn btn-primary bg-success px-5" type="submit">Send</button>
                            </div>
                        </form>
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
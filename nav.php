<!--navigation bar-->
<nav class="navbar navbar-expand-sm navbar-dark bg-light text-black fixed-top shadow-sm  rounded border-3">
    <div class="container-fluid">
      <h3 class="navbar-brand text-black fw-bold mx-el-5 fs-3">V.j.Hotal</h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon bg-black"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link text-black " href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black " href="room.php">Room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black " href="facilities.php">Facility</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black " href="contect.php">Contect</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black " href="about.php">About</a>
          </li>
        </ul>
        <div class="d-flex">
          <!-- <button class="btn btn-primary text-black" type="button">Search</button> -->
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3 bg-success text-white" data-bs-toggle="modal"
            data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal"
            data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Modal login-->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center" id="exampleModalLabel"><i
                class="bi bi-person-circle fs-2 me-3"></i>User login</h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-4">
              <label class="form-label">password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex alig-item-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">Login</button>
              <a href="#" class="text-secondary text-decoation-none">forgot password?</a>
            </div>
          </div>
          <form>
      </div>
    </div>
  </div>

  <!-- Modal Register-->
  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center fs-4" id="exampleModalLabel"><i
                class="bi bi-person-lines-fill fs-2 me-3"></i>User Register</h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ">
            <p class="text-center text-danger">Note: your details must match with your id (Addar card/passport/driving lience etc) that will be required during check in</p>
            <div class="row">
              <div class="col-md-6">
                <div class="mb-3">
                  <label  class="form-label">Name</label>
                  <input type="email" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label class="form-label">phone number</label>
                  <input type="email" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label class="form-label">Address</label>
                  <input type="email" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label class="form-label">pincode</label>
                  <input type="email" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label class="form-label">password</label>
                  <input type="email" class="form-control"  aria-describedby="emailHelp">
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label  class="form-label">last name</label>
                  <input type="text" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label class="form-label">email</label>
                  <input type="email" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label class="form-label">picture</label>
                  <input type="file" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label class="form-label">Date of birth</label>
                  <input type="date" class="form-control" aria-describedby="emailHelp" placeholder="dd-mm-yyyy">
                </div>
                <div class="mb-3">
                  <label class="form-label">confirm password</label>
                  <input type="password" class="form-control"  aria-describedby="emailHelp">
                </div>
              </div>
              <div class="text-center mb-2">
                <button type="submit" class="btn btn-dark shadow-none">Registration</button>
              </div>
            </div>
          </div>
          <form>
      </div>
    </div>
  </div>
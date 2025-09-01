<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <h1 id="site_title"class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Casa Dela Rosa</h1>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="rooms.php">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="facilities.php">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>          
      </ul>
      <div class="d-flex">
        <button type="button" id="loginBtn" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#LoginModal">
           Login
        </button>
         <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
           Register
         </button>
       </div>
    </div>
  </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
             <i class="bi bi-person-circle fs-3 me-2"></i> User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" name="email" class="form-control shadow-none" required>
          </div>
          <div class="mb-4">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control shadow-none" required>
          </div>
          <div class="d-flex align-items-center justify-content-between mb-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Login</button>
            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>
          <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
          <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" required>
          <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
          <input type="password" name="confirm_password" class="form-control mb-2" placeholder="Confirm Password" required>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn custom-bg text-white">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>



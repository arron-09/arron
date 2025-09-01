<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa Dela Rosa - CONTACT</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>
  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    HOW CAN WE HELP YOU?
  </p>
</div>

<div class="container mt-4">
  <div class="row">
    <div class="col-12 px-4">
      <div class="bg-white rounded shadow p-4 d-flex flex-wrap align-items-center justify-content-between gap-4">
        
        <!-- Facebook -->
        <div>
          <i class="bi bi-facebook me-2"></i>
          <a href="https://www.facebook.com/profile.php?id=100075545007945" target="_blank" class="text-decoration-none text-dark">
            Casa Dela Rosa
          </a>
        </div>

        <!-- Gmail -->
        <div>
          <i class="fas fa-envelope me-2"></i>
          <a href="mailto:casa.delarosa88@gmail.com" class="text-decoration-none text-dark">
            casa.delarosa88@gmail.com
          </a>
        </div>

        <!-- Phone -->
        <div>
          <i class="bi bi-telephone-fill me-2"></i>
          <a href="tel:+639171665024" class="text-decoration-none text-dark">
            +63 917 166 5024 
          </a>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10 px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>Send a message</h5>
          <div class="mb-3">
            <label class="form-label fw-semibold">Name</label>
            <input type="text" class="form-control shadow-none">           
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control shadow-none">           
          </div>
          <!--<div class="mb-3">
            <label class="form-label fw-semibold">Subject</label>
            <input type="text" class="form-control shadow-none">           
          </div>-->
          <div class="mb-3">
            <label class="form-label fw-semibold">Message</label>
            <textarea class="form-control shadow-none" rows="5"style="resize: none;"></textarea>           
          </div>
          <button type="submit" class="btn text-white shadow-none custom-bg">SEND</button>
        </form>  
      </div>
    </div>
  </div>
</div>


 
<?php require('inc/footer.php');?>

</body>
</html>
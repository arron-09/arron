<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa Dela Rosa - HOME</title>
    <link  rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <?php require('inc/links.php');?>
    
      
      <style>
     .availability-form{
       margin-top: -50px;
       z-index: 2;
       position: relative;
     }

     @media screen and (max-width: 575px) {
        .availability-form{
          margin-top: 25px;
          padding: 0 35px;
        }
     }

  </style>
</head>
<body class="bg-light">

  <?php require('inc/header.php');?>

 <div class="container-fluid px-lg-4 mt-4">
   <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="picture/1.jpg" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="picture/2.jpg" class="w-100 d-block">
      </div>
      </div>
    </div>
  </div>
 </div>

 <!---check availability form-->
 <div class="container availability-form">
    <div class="row">
      <div class="col-lg12 bg-white shadow p-4 rounded">
        <h5 class="mb-4">Check Booking Availability</h5>
        <form>
          <div class="row align-items-end">
           <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-in</label>
              <input type="date" class="form-control shadow-none">
           </div> 
           <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Check-out</label>
              <input type="date" class="form-control shadow-none">
           </div>
           <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500;">Adult</label>
              <select class="form-select shadow none">              
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="3">5</option>
              </select> 
           </div> 
           <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500;">Children</label>
              <select class="form-select shadow none">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="3">4</option>
                <option value="3">5</option>
              </select> 
           </div> 
           <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
           </div>
          </div>
        </form>
        <script>
          const rooms = [
  {
    name: "Emiliana",
    adults: 5,
    children: 4,
    img: "Rooms image/emiliana.jpg"
  },
  {
    name: "Eliseo",
    adults: 2,
    children: 2,
    img: "Rooms image/Eliseo.jpg"
  },
  {
    name: "Elena",
    adults: 1,
    children: 1,
    img: "Rooms image/Elena.jpg"
  },
  {
    name: "Vivencia",
    adults: 2,
    children: 3,
    img: "Rooms image/Vivencia.jpg"
  },
  {
    name: "Diosdado",
    adults: 1,
    children: 3,
    img: "Rooms image/Diosdado.jpg"
  },
  {
    name: "Gaudencio",
    adults: 3,
    children: 4,
    img: "Rooms image/Gaudencio.jpg"
  },
  {
    name: "Gregoria",
    adults: 1,
    children: 3,
    img: "Rooms image/Gregoria.jpg"
  }
];

document.querySelector('.availability-form form').addEventListener('submit', function(e) {
  e.preventDefault();

  // Get selected values
  const selects = this.querySelectorAll('select.form-select');
  const adults = parseInt(selects[0].value);
  const children = parseInt(selects[1].value);

  // Hide all room cards first
  document.querySelectorAll('.card.border-0.shadow').forEach(card => {
    card.parentElement.style.display = 'none';
  });

  // Show only matching rooms
  let found = false;
  rooms.forEach(room => {
    if (room.adults >= adults && room.children >= children) {
      // Find the card by image src
      const img = document.querySelector(`.card-img-top[src="${room.img}"]`);
      if (img) {
        img.closest('.col-lg-4, .col-md-6').style.display = '';
        found = true;
      }
    }
  });

  // Show a message if no rooms match
  let noRoomsMsg = document.getElementById('no-rooms-msg');
  if (!found) {
    if (!noRoomsMsg) {
      noRoomsMsg = document.createElement('div');
      noRoomsMsg.id = 'no-rooms-msg';
      noRoomsMsg.className = 'alert alert-warning mt-4';
      noRoomsMsg.innerText = 'No rooms found matching your selection.';
      document.querySelector('.container .row').prepend(noRoomsMsg); // fixed selector
    }
  } else if (noRoomsMsg) {
    noRoomsMsg.remove();
  }
});

// Optional: Reset filter to show all rooms when page loads
window.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.card.border-0.shadow').forEach(card => {
    card.parentElement.style.display = '';
  });
  const noRoomsMsg = document.getElementById('no-rooms-msg');
  if (noRoomsMsg) noRoomsMsg.remove();
});
        </script>
      </div>
    </div>
 </div>

 <!-- rooms -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

<div class="contanier">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
         <img src="Rooms image/emiliana.jpg" class="card-img-top">    
         <div class="card-body">
            <h5>Emiliana</h5>
            <h6 class="mb-4">₱200 per night</h6>
            <div class="features mb-4">
             <h6 class="mb-1">Features</h6>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Single Bed
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Bath Room
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Air Condition Room and window
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               With Mirror and table
             </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               Wifi
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Television
             </span>
            
            </div>
             <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               5 Adults
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               4 Children
             </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
              
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>          
       </div>     
    </div>
    <div class="col-lg-4 col-md-6 my-3">     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
         <img src="Rooms image/Eliseo.jpg" class="card-img-top">    
         <div class="card-body">
            <h5>Eliseo</h5>
            <h6 class="mb-4">₱200 per night</h6>
            <div class="features mb-4">
             <h6 class="mb-1">Features</h6>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Single Bed
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Bath Room
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Air Condition Room and window
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               With Mirror and table
             </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               Wifi
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Television
             </span>
            </div>
             <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               2 Adults
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               2 Children
             </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
              
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>          
       </div>     
    </div>
    <div class="col-lg-4 col-md-6 my-3">     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
         <img src="Rooms image/Elena.jpg" class="card-img-top">    
         <div class="card-body">
            <h5>Elena</h5>
            <h6 class="mb-4">₱200 per night</h6>
            <div class="features mb-4">
             <h6 class="mb-1">Features</h6>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Single Bed
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Bath Room
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Air Condition Room and window
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               With Mirror and table
             </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               Wifi
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Television
             </span>
            </div>
             <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Adults
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Children
             </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
              
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>          
       </div>     
    </div>
    <div class="col-lg-4 col-md-6 my-3">     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
         <img src="Rooms image/Vivencia.jpg" class="card-img-top">    
         <div class="card-body">
            <h5>Vivencia</h5>
            <h6 class="mb-4">₱200 per night</h6>
            <div class="features mb-4">
             <h6 class="mb-1">Features</h6>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Single Bed
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Bath Room
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Air Condition Room and window
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               With Mirror and table
             </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               Wifi
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Television
             </span>
            </div>
             <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               2 Adults
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               3 Children
             </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
              
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>          
       </div>     
    </div>
    <div class="col-lg-4 col-md-6 my-3">     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
         <img src="Rooms image/Diosdado.jpg" class="card-img-top">    
         <div class="card-body">
            <h5>Diosdado</h5>
            <h6 class="mb-4">₱200 per night</h6>
            <div class="features mb-4">
             <h6 class="mb-1">Features</h6>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Single Bed
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Bath Room
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Air Condition Room and window
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               With Mirror and table
             </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               Wifi
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Television
             </span>
            </div>
             <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Adults
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               3 Children
             </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
              
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>          
       </div>     
    </div>
    <div class="col-lg-4 col-md-6 my-3">     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
         <img src="Rooms image/Gaudencio.jpg" class="card-img-top">    
         <div class="card-body">
            <h5>Gaudencio</h5>
            <h6 class="mb-4">₱200 per night</h6>
            <div class="features mb-4">
             <h6 class="mb-1">Features</h6>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Single Bed
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Bath Room
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Air Condition Room and window
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               With Mirror and table
             </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               Wifi
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Television
             </span>
            </div>
             <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               3 Adults
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               4 Children
             </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
              
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>          
       </div>     
    </div>
    <div class="col-lg-4 col-md-6 my-3">     
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
         <img src="Rooms image/Gregoria.jpg" class="card-img-top">    
         <div class="card-body">
            <h5>Gregoria</h5>
            <h6 class="mb-4">₱200 per night</h6>
            <div class="features mb-4">
             <h6 class="mb-1">Features</h6>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Single Bed
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Bath Room
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Air Condition Room and window
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               With Mirror and table
             </span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               Wifi
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               Television
             </span>
            </div>
             <div class="guest mb-4">
              <h6 class="mb-1">Guest</h6>
              <span class="badge rounded-pill bg-light text-dark text-wrap">
               1 Adults
             </span>
             <span class="badge rounded-pill bg-light text-dark text-wrap">
               4 Children
             </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1">Rating</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
              
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white shadow-none custom-bg">Book Now</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>          
       </div>     
    </div>
    

    <div class="col-lg-12 text-center mt-5">
      <a href="#"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
    </div>
  </div>
    </div>

    <h2 class="mt 5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

  <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="bookingForm">
        <div class="modal-header">
          <h5 class="modal-title" id="bookingModalLabel">Room Booking</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control shadow-none" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="number" name="phone" class="form-control shadow-none" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Room Name</label>
            <input type="text" name="room" class="form-control shadow-none" id="bookingRoomName" readonly required>
          </div>
          <div class="mb-3 text-center">
            <label class="form-label">Payment via GCash</label>
            <div>
              <img src="gcash_qr.png" alt="GCash QR Code" style="width:150px; height:150px;">
            </div>
            <div class="mt-2">
              <strong>GCash Number:</strong> <span id="gcashNumber">0917 123 4567</span>
            </div>
            <div class="mt-2">
              <input type="text" name="gcash_ref" class="form-control shadow-none" placeholder="Enter GCash Reference Number" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn custom-bg text-white">Submit Booking</button>
        </div>
      </form>
    </div>
  </div>
</div>
    
<!--Our Facilities-->
     <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <image src="features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <image src="features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <image src="features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <image src="features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <image src="features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
        </div>    
      </div>
     </div>

     <!--Our feedback-->
     <h2 class="mt 5 pt-4 mb-4 text-center fw-bold h-font">FEEDBACKS</h2>

     <div class="container mt-5">
      <div class="swiper swiper-feedback">
    <div class="swiper-wrapper mb-5">
      
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User1</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User2</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User3</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User4</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User5</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User6</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User7</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User8</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User9</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User10</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User11</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
      <div class="swiper-slide bg-light rounded shadow p-4">
        <div class="profile d-flex align-items-center mb-3">
          <image src="features/person-fill.svg"width="30px">
          <h6 class="m-0 ms-2"> User12</h6>
        </div>
        <p>
         Maganda at malinis ang room na nabook namin at mababait ang mga hotel staff
         at maganda ang service nila
        </p>
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
     <div class="col-lg-12 text-center mb-5">
          <a href="#"class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
  </div>
     

  <!--Reach us-->

  <h2 class="mt 5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

  <div class="container">
   <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d495784.8973123665!2d120.34588587343751!3d13.879833800000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd0b7597e20641%3A0x1273b8357fefe5de!2sCasa%20Dela%20Rosa!5e0!3m2!1sen!2sph!4v1751776412111!5m2!1sen!2sph" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>Address</h5>
        <a href="https://maps.app.goo.gl/37g99ymywCw62ESD8" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
         <i class="bi bi-geo-alt-fill"></i> 10 Calle Jose W. Diokno, Taal, 4208 Batangas
        </a>
    </div>
    <div class="col-lg-4 col-md-4">
     <div class="bg-white p-4 rounded mb-4">
      <h5>Call us</h5>
      <a href="Tel: +63 12345678910" class="d-inline-block md-2 text-decoration-none text-dark">
       <i class="bi bi-telephone-fill"></i> +63 917 166 5024
      </a>
     </div>
     <div class="bg-white p-4 rounded mb-4">
       <h5>Follow us</h5>
       <a href="#" class="d-inline-block mb-3">
        <span class="badge bg-light text-dark fs-6 p-2">
         <i class="bi bi-facebook"></i> Facebook
       </span>
     </a>
      <br>
      <a href="https://www.facebook.com/profile.php?id=100075545007945" target="_blank" class="d-inline-block text-decoration-none text-dark">
          Casa Dela Rosa
      </a>
     </div>
    </div>
   </div>
  </div>
</div>

 <?php require('inc/footer.php');?>

  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
   var swiper = new Swiper(".swiper-container", {
     spaceBetween: 30,
     effect: "fade",
     loop:true,
     autoplay:{
       delay: 3500,
      disableOnInteraction: false, 
     }
   });

   var swiper = new Swiper(".swiper-feedback", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView:"3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
</script>

<script>
let pendingRoomName = null;

// Book Now button handler
document.querySelectorAll('.btn.custom-bg').forEach(function(btn) {
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    const roomName = btn.closest('.card').querySelector('h5').innerText;
    if (!isLoggedIn()) {
      pendingRoomName = roomName; // Save room name for after login
      var loginModal = new bootstrap.Modal(document.getElementById('LoginModal'));
      loginModal.show();
    } else {
      document.getElementById('bookingRoomName').value = roomName;
      var bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'));
      bookingModal.show();
    }
  });
});

function showLogoutBtn() {
  const loginBtn = document.getElementById('loginBtn');
  if (loginBtn) {
    loginBtn.textContent = 'Logout';
    loginBtn.removeAttribute('data-bs-toggle');
    loginBtn.removeAttribute('data-bs-target');
    loginBtn.onclick = function() {
      localStorage.removeItem('userLoggedIn');
      alert('Logged out!');
      showLoginBtn();
      location.reload();
    };
  }
}

function showLoginBtn() {
  const loginBtn = document.getElementById('loginBtn');
  if (loginBtn) {
    loginBtn.textContent = 'Login';
    loginBtn.setAttribute('data-bs-toggle', 'modal');
    loginBtn.setAttribute('data-bs-target', '#LoginModal');
    loginBtn.onclick = null;
  }
}

// On page load, set correct button
window.addEventListener('DOMContentLoaded', function() {
  if (isLoggedIn()) {
    showLogoutBtn();
  } else {
    showLoginBtn();
  }
});

// LOGIN handler
document.querySelector('#LoginModal form').addEventListener('submit', function(e) {
  e.preventDefault();
  const email = this.querySelector('input[name="email"]').value;
  const password = this.querySelector('input[name="password"]').value;
  fetch('admin/ajax/login.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`
  })
  .then(res => res.text())
  .then(data => {
    if(data.trim() === "success"){
      setLoggedIn();
      bootstrap.Modal.getInstance(document.getElementById('LoginModal')).hide();
      alert("Login successful!");
      showLogoutBtn();
    }else{
      alert("Invalid email or password.");
    }
  });
});

function isLoggedIn() {
  return localStorage.getItem('userLoggedIn') === 'true';
}
function setLoggedIn() {
  localStorage.setItem('userLoggedIn', 'true');
}

// Handle booking form submission
document.getElementById('bookingForm').addEventListener('submit', function(e) {
  e.preventDefault();
  alert('Booking submitted!\nWe will verify your GCash payment and contact you soon.');
  bootstrap.Modal.getInstance(document.getElementById('bookingModal')).hide();
  this.reset();
});
</script>

<script>
function get_general() {
  let site_title = document.getElementById('site_title');
  let site_about = document.getElementById('site_about');
  let footer_site_title = document.getElementById('footer_site_title');
  let footer_site_about = document.getElementById('footer_site_about');
  let xhr = new XMLHttpRequest();
  xhr.open("POST","admin/ajax/settings_crud.php",true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onload = function(){
    let general_data = JSON.parse(this.responseText);
    if(site_title) site_title.innerText = general_data.site_title;
    if(site_about) site_about.innerText = general_data.site_about;
    if(footer_site_title) footer_site_title.innerText = general_data.site_title;
    if(footer_site_about) footer_site_about.innerText = general_data.site_about;
  };
  xhr.send('get_general');
}
window.addEventListener('DOMContentLoaded', get_general);
</script>

<!-- Login Modal (palitan mo ito sa index.php mo) -->
<div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="LoginModalLabel">User Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control shadow-none" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control shadow-none" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn custom-bg text-white">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>
</script>

<script>
document.querySelector('#registerModal form').addEventListener('submit', function(e) {
  e.preventDefault();
  const form = this;
  const name = form.querySelector('input[name="name"]').value.trim();
  const email = form.querySelector('input[name="email"]').value.trim();
  const phone = form.querySelector('input[name="phone"]').value.trim();
  const password = form.querySelector('input[name="password"]').value;
  const confirmPassword = form.querySelector('input[name="confirm_password"]').value;

  if (!name || !email || !phone || !password || !confirmPassword) {
    alert("Please fill all fields.");
    return;
  }
  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    return;
  }

  fetch('admin/ajax/register.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
    body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&phone=${encodeURIComponent(phone)}&password=${encodeURIComponent(password)}&confirm_password=${encodeURIComponent(confirmPassword)}`
  })
  .then(res => res.text())
  .then(data => {
    if(data.trim() === "success"){
      alert("Registration successful!");
      bootstrap.Modal.getInstance(document.getElementById('registerModal')).hide();
      form.reset();
    }else if(data.trim() === "exists"){
      alert("Email already registered.");
    }else if(data.trim() === "password_mismatch"){
      alert("Passwords do not match.");
    }else{
      alert("Registration failed.");
    }
  });
});
</script>

</body>
</html>


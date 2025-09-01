<?php
  require('inc/essentials.php');
  adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
 
<?php require('inc/header.php'); ?>

<div class="contanier_fluid" id="main-content">
   <div class="row">
     <div class="col-lg-10 ms-auto p-4 overflow-hidden">
       <h3 class="mb-4">SETTINGS</h3>
       
       
       <!-- General settings section-->

        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">General Settings</h5>
             <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
               <i class="bi bi-pencil-square"></i>Edit
             </button>
            </div>
            <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
            <p class="card-text" id="site_title"></p>
            <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
            <p class="card-text" id="site_about"></p> 
          </div>
        </div>

        <!-- General settings modal-->

        <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form id="general_s_form">
             <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">General Settings</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-bold">Site Title</label>
                    <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none">  
                </div>
                 <div class="mb-3">
                    <label class="form-label fw-bold">About us</label>
                    <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6"></textarea> 
                 </div>
              </div>
                <div class="modal-footer">
                  <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                  <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                </div>
              </div>

            </form>
            
          </div>
        </div>

        <!--Management team section -->

        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">Management Team</h5>
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                <i class="bi bi-plus-square"></i>Add
              </button> 
            </div>

            <div class="row" id="team-data"> 
            </div>

          </div>
        </div>
        <!-- Management team modal-->

         <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form id="team_s_form">
             <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Team Member</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-bold">Name</label>
                    <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none">  
                </div>
                 <div class="mb-3">
                    <label class="form-label fw-bold">Picture</label>
                    <input type="file" name="member_picture" id="member_picture_inp" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none">  
                 </div>
              </div>
                <div class="modal-footer">
                  <button type="button" onclick=""class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                  <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                </div>
              </div>

            </form>
            
          </div>
        </div>

        
        
        <!-- Shutdown section-->
        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">Shutdown Website</h5>
              <div class="form-check form-switch">
                <form>
                 <input onchange="upd_shutdown(this.checked)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                </form>
              </div>
            </div>
            <p class="card-text">
              No customers will be allowed to book hotel room, when shutdown mode is turned on.
            </p> 
          </div>
        </div>

        <!-- Contact deatils section-->
       <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">Contacts Settings</h5>
             <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
               <i class="bi bi-pencil-square"></i>Edit
             </button>
            </div>
            <div class="row">
             <div class="col-lg-6">
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                  <p class="card-text" id="address"></p>
                </div> 
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                  <p class="card-text" id="gmap"></p>
                </div> 
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Phone Number</h6>
                  <p class="card-text mb-1">
                    <i class="bi bi-telephone-fill"></i>
                    <span id="pn1"></span>
                  </p>
                </div> 
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Email</h6>
                  <p class="card-text" id="email"></p>
                </div> 
             </div>
              <div class="col-lg-6">
                 <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                  <p class="card-text mb-1">
                    <i class="bi bi-facebook me-1"></i>
                    <span id="fb"></span>
                  </p>
                </div>
                 <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                  <iframe id="iframe" class="border p-2 w-100" loadings="lazy"></iframe>
                </div>
              </div>
            </div>
            
            
          </div>
      </div>

         <!-- Contacts details modal-->

        <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <form id="contacts_s_form">
             <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Contacts Settings</h5>
                </div>
                <div class="modal-body">
                  <div class="container-fluid p-0">
                    <div class="row">
                    <div class="col-md-6">
                      <div class="mb-3">
                        <label class="form-label fw-bold">Address</label>
                        <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>  
                      </div>
                      <div class="mb-3">
                        <label class="form-label fw-bold">Google Map Link</label>
                        <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>  
                      </div>
                      <div class="mb-3">
                        <label class="form-label fw-bold">Phone Number (with country code)</label>
                         <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none">
                         </div> 
                        <div class="mb-3">
                          <label class="form-label fw-bold">Email</label>
                          <input type="text" name="email" id="email_inp" class="form-control shadow-none" required>  
                        </div>
                       </div>
                    </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                        <label class="form-label fw-bold">Social Links</label>
                         <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                            <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                         </div>
                         <div class="mb-3">
                            <label class="form-label fw-bold">iFrame Src</label>
                            <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>  
                         </div> 
                        
                      </div>
                    </div>
                  </div>
              </div>
                <div class="modal-footer">
                  <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                  <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                </div>
              </div>

            </form>
            
          </div>
        </div>

        
        

     </div>
   </div>
 </div>


 <?php require('inc/scripts.php'); ?>
 <script>
  let general_data, contacts_data;
  let shutdown_toggle, general_s_form, site_title_inp, site_about_inp, contacts_s_form;
  let team_s_form, member_name_inp, member_picture_inp;

  window.onload = function() {
    // Assign DOM elements after DOM is loaded (global scope)
    shutdown_toggle = document.getElementById('shutdown-toggle');
    general_s_form = document.getElementById('general_s_form');
    site_title_inp = document.getElementById('site_title_inp');
    site_about_inp = document.getElementById('site_about_inp');
    contacts_s_form = document.getElementById('contacts_s_form');
    team_s_form = document.getElementById('team_s_form');
    member_name_inp = document.getElementById('member_name_inp');
    member_picture_inp = document.getElementById('member_picture_inp');

    get_general();
    get_contacts();
    get_members();

    // Add event listeners after DOM is loaded
    if (general_s_form) {
      general_s_form.addEventListener('submit', function(e){
        e.preventDefault();
        upd_general(site_title_inp.value, site_about_inp.value);
      });
    }

    if (contacts_s_form) {
      contacts_s_form.addEventListener('submit', function(e){
        e.preventDefault();
        upd_contacts();
      });
    }

    if (team_s_form) {
      team_s_form.addEventListener('submit',function(e){
        e.preventDefault();
        add_member();
      });
    }
  };

  function get_general() {
    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');
    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
      general_data = JSON.parse(this.responseText);

      site_title.innerText = general_data.site_title;
      site_about.innerText = general_data.site_about;

      site_title_inp.value = general_data.site_title;
      site_about_inp.value = general_data.site_about;

      shutdown_toggle.checked = general_data.shutdown == 1;
    };

    xhr.send('get_general');
  }

  function upd_general(site_title_val, site_about_val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
      var myModal = document.getElementById("general-s");
      if (myModal) {
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
      }
      get_general();
     
    };

    xhr.send('site_title=' + encodeURIComponent(site_title_val) + '&site_about=' + encodeURIComponent(site_about_val) + '&upd_general');
  }

  function upd_shutdown(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    let shutdown_val = val ? 1 : 0;
    xhr.onload = function () {
      get_general();
      
    };
    xhr.send('upd_shutdown=' + shutdown_val);
  }

  function get_contacts() {
    let iframe = document.getElementById('iframe');
    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
      contacts_data = JSON.parse(this.responseText);

      document.getElementById('address').innerText = contacts_data.address;
      document.getElementById('gmap').innerText = contacts_data.gmap;
      document.getElementById('pn1').innerText = contacts_data.pn1;
      document.getElementById('email').innerText = contacts_data.email;
      document.getElementById('fb').innerText = contacts_data.fb;
      iframe.src = contacts_data.iframe;
      contacts_inp(contacts_data);
    };

    xhr.send('get_contacts');
  }

  function contacts_inp(data) {
    document.getElementById('address_inp').value = data.address;
    document.getElementById('gmap_inp').value = data.gmap;
    document.getElementById('pn1_inp').value = data.pn1;
    document.getElementById('email_inp').value = data.email;
    document.getElementById('fb_inp').value = data.fb;
    document.getElementById('iframe_inp').value = data.iframe;
  }

  function upd_contacts() {
    let index = ['address','gmap','pn1','email','fb','iframe'];
    let contacts_inp_id = ['address_inp','gmap_inp','pn1_inp','email_inp','fb_inp','iframe_inp'];
    let data_str = "";

    for(let i = 0; i < index.length; i++){
      data_str += index[i] + "=" + encodeURIComponent(document.getElementById(contacts_inp_id[i]).value) + "&";
    }
    data_str += "upd_contacts";

    let xhr = new XMLHttpRequest();
    xhr.open("POST","ajax/settings_crud.php",true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function(){
      var myModal = document.getElementById("contacts-s");
      if (myModal) {
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
      }
      get_contacts();
      
    };

    xhr.send(data_str);
  }

  function add_member()
  {
    let data = new FormData();
    data.append('name', member_name_inp.value);
    data.append('picture', member_picture_inp.files[0]);
    data.append('add_member','');

     let xhr = new XMLHttpRequest();
     xhr.open("POST", "ajax/settings_crud.php", true);
    

    xhr.onload = function () {
      var myModal = document.getElementById("team-s");
      var modal = bootstrap.Modal.getInstance(myModal);
      modal.hide();

      if(this.responseText == 'inv_img'){
        alert('ONLY JPG AND PNG images are allowed!');
      }
      else if(this.responseText == 'inv_size'){
        alert('Image should be less than 2MB!');
      }
      else if(this.responseText == 'upd_failed'){
        alert('Image upload failed. Server Down!');
      }
      else {
        alert('New member added!');
      }
      member_name_inp.value = '';
      member_picture_inp.value = '';
    }

    xhr.send(data);
  }

  function get_members()
  {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
      document.getElementById('team-data').innerHTML = this.responseText;
    };

    xhr.send('get_members');
  }
  

</script>

</body>
</html>
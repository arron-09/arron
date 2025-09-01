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
    <title>Admin Panel - Dashboard</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
 
<?php require('inc/header.php'); ?>


<div class="contanier_fluid" id="main-content">
   <div class="row">
     <div class="col-lg-10 ms-auto p-4 overflow-hidden">
       <h3 class="mb-4">Booking History</h3>
       <div class="table-responsive">
         <table class="table table-bordered table-striped">
           <thead>
             <tr>
               <th>#</th>
               <th>User Name</th>
               <th>Email</th>
               <th>Phone</th>
               <th>Room</th>
               <th>Check-in</th>
               <th>Check-out</th>
               <th>Status</th>
             </tr>
           </thead>
           <tbody>
             <?php
             // Example query, adjust table/column names as needed
            
             ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>
</div>


 <?php require('inc/scripts.php'); ?>
</body>
</html>
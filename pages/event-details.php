<?php

if(isset($_GET['event_id'])){
  $id = $_GET['event_id'];
}

  session_start();
  $getEmail = $_SESSION['email'];
  $getUser = $_SESSION['username'];
  $getStatus = $_SESSION['loginStatus'];
  $getCategory = $_SESSION['category'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="../css/bootsrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/custom/style-details.css" rel="stylesheet" />
    <link href="../css/custom/style.css" rel="stylesheet" />
  </head>
  <body>

  <?php
  
    require_once '../public/navbar.php';
    require_once '../public/connectDB.php';
    require_once '../public/event-func.php';
    mainNavBarPages($connect);
  
  ?>

    <?php setEventDetails($connect,$id); ?>

    <footer class="bg-dark text-white py-3 text-center">
      <p>&copy; 2024 UniTicket. All Rights Reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

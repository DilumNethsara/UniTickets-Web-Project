<?php
  session_start();
  $getEmail = $_SESSION['email'];
  $getUser = $_SESSION['username'];
  $getStatus = $_SESSION['loginStatus'];
  $getCategory = $_SESSION['category'];
  $getUid = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="../css/bootsrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/custom/style-user-dashboard.css" rel="stylesheet" />
  </head>
  <body>
  <?php
        
        require_once '../public/navbar.php';
        require_once '../public/user-dashboard-func.php';

        dashboard_navBar();
      
      ?>

        <div class="main-content">
          <button class="menu-toggle" onclick="toggleSidebar()">☰ Menu</button>
          
          <div class="history-container">
            <h1>Booking History</h1>
      
            <?php viewHistory($connect,$getUid); ?>
      
        <script>
          function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("active");
          }
        </script>

        <script src="js/custom/script-custom.js"></script>
      </body>
</html>

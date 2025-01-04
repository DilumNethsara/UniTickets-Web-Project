<?php
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
    <link href="../css/custom/style-user-dashboard.css" rel="stylesheet" />
  </head>
  <body>
  <?php
        
        require_once 'navbar.php';

        dashboard_navBar();
      
      ?>

        <div class="main-content">
          <button class="menu-toggle" onclick="toggleSidebar()">☰ Menu</button>
          
          <div class="history-container">
            <h1>Booking History</h1>
      
            <div class="history-list">
              <div class="history-item">
                <div class="item-details">
                  <h4>Movie: Passport (Sinhala)</h4>
                  <p><strong>Date:</strong> 2024-11-25</p>
                  <p><strong>Time:</strong> 04:00 PM</p>
                  <p><strong>Theater:</strong> Willmax - Anuradhapura</p>
                  <p><strong>Seat:</strong> ODC | 011</p>
                </div>
                <div class="item-status">
                  <p>
                    <strong>Status:</strong> <span class="status-paid">Paid</span>
                  </p>
                  <p><strong>Amount:</strong> Rs. 642.00</p>
                </div>
              </div>
      

              <div class="history-item">
                <div class="item-details">
                  <h4>Event: Tech Conference 2024</h4>
                  <p><strong>Date:</strong> 2024-12-05</p>
                  <p><strong>Time:</strong> 10:00 AM</p>
                  <p><strong>Venue:</strong> University Auditorium</p>
                  <p><strong>Seat:</strong> Row B | Seat 12</p>
                </div>
                <div class="item-status">
                  <p>
                    <strong>Status:</strong>
                    <span class="status-pending">Pending</span>
                  </p>
                  <p><strong>Amount:</strong> Rs. 1200.00</p>
                </div>
              </div>
            </div>
          </div>
           

        <script>
          function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("active");
          }
        </script>

        <script src="js/custom/script-custom.js"></script>
      </body>
</html>

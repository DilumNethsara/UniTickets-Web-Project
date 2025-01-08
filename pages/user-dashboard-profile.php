<?php
  session_start();
  $getEmail = $_SESSION['email'];
  $getUser = $_SESSION['username'];
  $getStatus = $_SESSION['loginStatus'];
  $getCategory = $_SESSION['category'];
  $getId = $_SESSION['uniId'];
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
      <div class="settings-container">
        <h1>Account Settings</h1>

        <div class="settings-section">
          <h2>Profile Information</h2>
          <form action="user-dashboard-profile.php" method="post">
            <label for="name">User Name:</label>
            <input
              type="text"
              id="name"
              name="name"
              value=""
              required
            />

            <label for="email">Email:</label>
            <input
              type="email"
              id="email"
              name="email"
              value=""
              required
            />

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" value="" required/>

            <label>Are you an University Student? <a href="">Verify</a></label>

            <button type="submit" class="btn-save" name="svUserDetails">Save Changes</button>

            <?php updateUserDetails($connect,$getUid); ?>

          </form>
        </div>

        <div class="settings-section">
          <h2>Change Password</h2>
          <form action="user-dashboard-profile.php" method="post">
            <label for="current-password">Current Password:</label>
            <input
              type="password"
              id="current-password"
              name="current-password"
              required
            />

            <label for="new-password">New Password:</label>
            <input
              type="password"
              id="new-password"
              name="new-password"
              required
            />

            <label for="confirm-password">Confirm New Password:</label>
            <input
              type="password"
              id="confirm-password"
              name="confirm-password"
              required
            />

            <button type="submit" class="btn-save" name="updatePw">Update Password</button>
            <?php updatePassword($connect,$getUid); ?>
          </form>
        </div>

        <div class="settings-section">
          <h2>Payment Methods</h2>
          <form action="user-dashboard-profile.php" method="post">
            <label for="card-name">Name on Card:</label>
            <input
              type="text"
              id="card-name"
              name="card-name"
              placeholder="e.g., John Doe"
              required
            />

            <label for="card-number">Card Number:</label>
            <input
              type="text"
              id="card-number"
              name="card-number"
              placeholder="e.g., 1234 5678 9012 3456"
              maxlength="19"
              required
            />

            <label for="expiry-date">Expiry Date:</label>
            <input type="month" id="expiry-date" name="expiry-date" required />

            <label for="cvv">CVV:</label>
            <input
              type="password"
              id="cvv"
              name="cvv"
              placeholder="e.g., 123"
              maxlength="3"
              required
            />

            <button type="submit" class="btn-save" name="addCard">Add Card</button>
            <?php addCard($connect,$getUid); ?>
          </form>
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

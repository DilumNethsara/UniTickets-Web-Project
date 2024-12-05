<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="css/bootsrap/bootstrap.min.css" rel="stylesheet" />
    <link href="css/custom/style-user-dashboard.css" rel="stylesheet" />
  </head>
  <body>
        <div class="sidebar" id="sidebar">
          <h2>Dashboard</h2>
          <ul>
            <li><a href="user-dashboard-profile.php">Account Settings</a></li>
            <li><a href="dashboard-booking-history.php">My Bookings</a></li>
            <li><a href="dashboard-contact.php">Contact Admin</a></li>
            <li><a href="#logout">Logout</a></li>
          </ul>
        </div>

        <div class="main-content">
          <button class="menu-toggle" onclick="toggleSidebar()">☰ Menu</button>
          
          <div class="contact-container">
            <h1>Contact Admin</h1>
            <form id="contact-form">
                <label for="user-name">Your Name:</label>
                <input type="text" id="user-name" name="user-name" placeholder="Enter your name" required>
    
                <label for="user-email">Your Email:</label>
                <input type="email" id="user-email" name="user-email" placeholder="Enter your email" required>
    
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Enter the subject" required>
    
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
    
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
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

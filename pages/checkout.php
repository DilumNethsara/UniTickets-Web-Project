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
    <title>Booking Summary</title>
    <link rel="stylesheet" href="../css/custom/style-checkout.css" />
    <link rel="stylesheet" href="../css/custom/style.css" />
    <link rel="stylesheet" href="../css/bootsrap/bootstrap.min.css" />
  </head>
  <body style="background-color: #2b2d38">
    <div class="container">

      <div class="movie-details">
        <h2>MOVIE</h2>
        <p>Passport (Sinhala)</p>
        <h2>DATE</h2>
        <p>2024-11-25</p>
        <h2>TIME</h2>
        <p>04:00 PM</p>
        <h2>THEATER</h2>
        <p>Willmax - Anuradhapura</p>
        <p>
            <div>
                <button style="border-radius: 5px;">-</button>
                <label style="margin-left: 5px; margin-right: 5px;">0</label>
                <button style="border-radius: 5px;">+</button>
            </div>
        </p>
        <button class="book-now btn btn-secondary">Book Now</button>
      </div>

      <div class="booking-summary">
        <h2>Booking Summary</h2>
        <p>Title <span class="amount">2 x LKR 5000.00</span></p>
        <hr />
        <p>
          <strong>Sub Total:</strong> <span class="amount">LKR 10 000.00</span>
        </p>
        <p class="payable">
          <strong>Amount:</strong> <span>LKR 10 000.00</span>
        </p>
      </div>
  </div>
  </body>
</html>

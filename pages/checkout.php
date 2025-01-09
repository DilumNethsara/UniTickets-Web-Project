<?php

if(isset($_GET['event_id'])){
  $id = $_GET['event_id'];
}

  session_start();
  $getEmail = $_SESSION['email'];
  $getUser = $_SESSION['username'];
  $getStatus = $_SESSION['loginStatus'];
  $getCategory = $_SESSION['category'];

  require_once '../public/connectDB.php';
  require_once '../public/checkout-func.php';

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
        <h2>EVENT</h2>
        <p><?php echo getTitle($connect,$id); ?></p>
        <?php echo getDateTime($connect,$id); ?>
        <h2>VENUE</h2>
        <p><?php echo getUni($connect,$id); ?></p>
        <form>
        <p>
            <div>
            <label for="ticket_count">Number of Tickets: </label>
            <input type="number" id="ticket_count" name="ticket_count" required max="5" min="1">
    <br><br>

    
            </div>
        </p>
        <button class="book-now btn btn-secondary" name="book_now">Book Now</button>
          
      </div>

      <div class="booking-summary">
        <h2>Booking Summary</h2>
        <p>Title <span class="amount1"><?php echo getTitle($connect,$id); ?></span></p>
        <hr />

        <p class="payable">
          <strong>Amount:</strong> <span class="amount"><?php echo getAmount($connect,$id); ?></span>
        </p>

        <script>
          
          const ticketPrice = <?php echo getAmount($connect,$id); ?>; 

          const ticketCountInput = document.getElementById('ticket_count');
          const amountSpan = document.querySelector('.amount');

          ticketCountInput.addEventListener('input', function() {
              const ticketCount = parseInt(ticketCountInput.value) || 0;
              const totalAmount = ticketCount * ticketPrice;
              amountSpan.textContent = 'LKR ' + totalAmount.toLocaleString() + '.00';
          });
    </script>

        </form>
      </div>
  </div>
  </body>
</html>

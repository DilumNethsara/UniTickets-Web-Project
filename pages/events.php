<?php

  if(isset($_GET['uni_id'])){
    $id = $_GET['uni_id'];
  }
  session_start();
  $getEmail = $_SESSION['email'];
  $getUser = $_SESSION['username'];
  $getStatus = $_SESSION['loginStatus'];
  $getCategory = $_SESSION['category'];
  //$getName = $_SESSION['uniName'];
  $getId = $_SESSION['uniId'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="../css/bootsrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/custom/style.css" rel="stylesheet" />
  </head>
  <body>

  <?php
  
    require_once '../public/navbar.php';
    require_once '../public/connectDB.php';
    require_once "../public/event-func.php";

    fixNavPages($getStatus,$getEmail,$getUser,$getCategory,$connect);
  
  ?>

    <h2 class="event-header"><?php getUniName($connect,$id); ?></h2>
    <section id="events">
      <div
        class="container text-center d-flex justify-content-center"
        style="margin-bottom: 40px"
      >
        <div class="row">
          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="../img/slide/1.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Waiwarna</h5>
                <p class="card-text">
                  23th November 2024<br />University of Sri Jayawardhanapura<br />Auditorium
                </p>
                <a href="event-details.php" class="btn btn-primary">Book Now >></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="../img/slide/2.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Sathsara Anurawa</h5>
                <p class="card-text">
                  15th August 2023<br />University of Peradeniya<br />Auditorium
                </p>
                <a href="#" class="btn btn-primary">Book Now >></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="../img/slide/4.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Sathsara Anurawa</h5>
                <p class="card-text">
                  13th December 2024<br />University of Peradeniya<br />Auditorium
                </p>
                <a href="#" class="btn btn-primary">Book Now >></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem">
              <img src="../img/slide/4.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Sathsara Anurawa</h5>
                <p class="card-text">
                  13th December 2024<br />University of Peradeniya<br />Auditorium
                </p>
                <a href="#" class="btn btn-primary">Book Now >></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="bg-dark text-white py-3 text-center">
      <p>&copy; 2024 UniTicket. All Rights Reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

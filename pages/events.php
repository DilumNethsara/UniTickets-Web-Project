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
  
    require_once 'navbar.php';
    mainNavBarSub();
  
  ?>

    <h2 class="event-header">University of Vavuniya</h2>
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
  </body>
</html>

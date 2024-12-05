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
    <nav class="navbar navbar-expand-lg nav bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="../img/logo.png" class="logo"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link nav-txt" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle nav-txt"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Universities
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li class="dropdown-item">
                  <h6 class="mb-0">University of Vavuniya</h6>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li class="dropdown-item">
                  <h6 class="mb-0">University of Colombo</h6>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li class="dropdown-item">
                  <h6 class="mb-0">University of Peradeniya</h6>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li class="dropdown-item">
                  <h6 class="mb-0">University of Jaffna</h6>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li class="dropdown-item">
                  <h6 class="mb-0">University of Moratuwa</h6>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-txt" href="#events">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-txt" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-txt login" href="login.html">Login</a>
            </li>
            <li class="nav-item">
              <button class="sign-up nav-txt">
                <a href="signup.html"> Sign Up</a>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>

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

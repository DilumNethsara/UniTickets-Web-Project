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
    <nav class="navbar navbar-expand-lg nav bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="img/logo.png" class="logo"
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

    <div class="container text-center">
      <div class="row">
        <div class="col">
          <div class="container text-center">
            <div class="row">
              <div class="col">
                <h2 class="event-title">WAIWARNA</h2>
              </div>

              <div class="container">
                <table class="table text-center">
                  <tbody>
                    <tr>
                      <th scope="row">Date</th>
                      <td>December 15, 2024</td>
                    </tr>
                    <tr>
                      <th scope="row">Time</th>
                      <td>7.00 PM</td>
                    </tr>
                    <tr>
                      <th scope="row">Location</th>
                      <td>Main Auditorium, University Campus</td>
                    </tr>
                    <tr>
                      <th scope="row">Prices</th>
                      <td>
                        LKR 5000.00<br />
                        LKR 2500.00<br />
                        LKR 1000.00
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="text-center">
                <h3>About the Event</h3>
                <p>
                  Join us for an exciting evening of music and fun! This event
                  features top artists and performers, with proceeds going to a
                  charitable cause.
                </p>
              </div>
              <div class="ticket-section"></div>
            </div>
          </div>
        </div>
        <div class="col">
          <div style="margin: 30px">
            <img
              src="img/slide/1.jpg"
              class="card-img-top"
              alt="..."
              style="width: 20rem; border-radius: 10px"
            />
          </div>
          <div style="margin: 20px">
            <a href="" class="btn btn-secondary" style="width: 20rem"
              >BOOK NOW!</a
            >
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-dark text-white py-3 text-center">
      <p>&copy; 2024 UniTicket. All Rights Reserved.</p>
    </footer>
  </body>
</html>

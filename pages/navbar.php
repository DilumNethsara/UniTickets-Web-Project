<?php

function mainNavBarPages(){
    echo '<nav class="navbar navbar-expand-lg nav bg-dark">
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
                    <a href="events.php"><h6 class="mb-0">University of Vavuniya</h6><a>
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
                <a class="nav-link nav-txt login" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <button class="sign-up nav-txt">
                  <a href="signup.php"> Sign Up</a>
                </button>
              </li>
            </ul>
          </div>
        </div>
      </nav>';
}

function mainNavBarLogged(){
  echo '<nav class="navbar navbar-expand-lg nav">
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
                    <a href="events.php"><h6 class="mb-0">University of Vavuniya</h6><a>
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
                <div class="d-flex justify-content-start">
                  <div class="dropdown">
                      <div class="profile-icon dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../img/profile.png" style="width: 40px; margin: 10px;"> 
                      </div>
      
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                          <li class="user-details">User name</li>
                          <li> </li>
                          <li class="user-details" style="font-size: 12px; margin-bottom: 10px;">User category</li>
                          <li><a class="dropdown-item" href="user-dashboard-profile.php">Dashboard</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Log out</a></li>
                      </ul>
                  </div>
              </div>  

                      
                              
              </li>
              
            </ul>
          </div>
        </div>
      </nav>';
}

function mainNavBarLoggedPages(){
  echo '<nav class="navbar navbar-expand-lg nav">
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
                    <a href="events.php"><h6 class="mb-0">University of Vavuniya</h6><a>
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
                <div class="d-flex justify-content-start">
                  <div class="dropdown">
                      <div class="profile-icon dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../img/profile.png" style="width: 40px; margin: 10px;"> 
                      </div>
      
                      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                          <li class="user-details">User name</li>
                          <li> </li>
                          <li class="user-details" style="font-size: 12px; margin-bottom: 10px;">User category</li>
                          <li><a class="dropdown-item" href="user-dashboard-profile.php">Dashboard</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Log out</a></li>
                      </ul>
                  </div>
              </div>  

                      
                              
              </li>
              
            </ul>
          </div>
        </div>
      </nav>';
}

function mainNavBar(){
  echo '<nav class="navbar navbar-expand-lg nav">
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
                  <a href="events.php"><h6 class="mb-0">University of Vavuniya</h6><a>
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
              <a class="nav-link nav-txt login" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <button class="sign-up nav-txt">
                <a href="signup.php"> Sign Up</a>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>';
}


function dashboard_navBar(){
  echo '<div class="sidebar" id="sidebar">
          <h2>Dashboard</h2>
          <ul>
            <li><a href="user-dashboard-profile.php">Account Settings</a></li>
            <li><a href="dashboard-booking-history.php">My Bookings</a></li>
            <li><a href="dashboard-contact.php">Contact Admin</a></li>
            <li><a href="#logout">Logout</a></li>
          </ul>
        </div>';
}


?>
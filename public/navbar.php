<?php

require_once "connectDB.php";
require_once "func.php";

function mainNavBarPages($connect){
    ?><nav class="navbar navbar-expand-lg nav bg-dark">
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
                <a class="nav-link nav-txt" href="index.php">Home</a>
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
                <?php 
                  getUni($connect); 
                  ?>
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
      </nav>
      <?php
}

function mainNavBarLogged($email,$username,$category,$connect){

                            if(isset($_POST['logout'])){
                              $_SESSION['loginStatus']=false;
                              header('Location: index.php');
                            }

  ?><nav class="navbar navbar-expand-lg nav">
        <div class="container">
          <a class="navbar-brand" href="index.php"
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
                  <?php 
                  getUni($connect); 
                  ?>
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
                          <li class="user-details"><?php echo $username; ?></li>
                          <li> </li>
                          <li class="user-details" style="font-size: 12px; margin-bottom: 10px;"><?php echo $category; ?></li>

                          <?php
                          
                            if($category=='user'){?>
                              <li><a class="dropdown-item" href="user-dashboard-profile.php">Dashboard</a></li><?php
                            }elseif($category=='admin'){
                              ?>
                              <li><a class="dropdown-item" href="manage-events.php">Admin Dashboard</a></li>
                              <?php
                            }
                          
                          ?>
                          <li><hr class="dropdown-divider"></li>
                          <li>
                            <form action="index.php" method="post">
                              <input class="logoutbtn" type="submit" value="Logout" name="logout"/>
                            </form>
                          </li>
                      </ul>
                  </div>
              </div>                  
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <?php
}

function mainNavBarLoggedPages($email,$username,$category,$connect){
        if(isset($_POST['logout'])){
           $_SESSION['loginStatus']=false;
            header('Location: index.php');
        }?>
    <nav class="navbar navbar-expand-lg nav bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php"
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
                <?php 
                  getUni($connect); 
                  ?>
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
                          <li class="user-details"><?php echo $username; ?></li>
                          <li> </li>
                          <li class="user-details" style="font-size: 12px; margin-bottom: 10px;"><?php echo $category; ?></li>

                          <?php
                          
                            if($category=='user'){?>
                              <li><a class="dropdown-item" href="user-dashboard-profile.php">Dashboard</a></li><?php
                            }elseif($category=='admin'){
                              ?>
                              <li><a class="dropdown-item" href="manage-events.php">Admin Dashboard</a></li>
                              <?php
                            }
                          
                          ?>
                          <li><hr class="dropdown-divider"></li>
                          <li>
                            <form action="index.php" method="post">
                              <input class="logoutbtn" type="submit" value="Logout" name="logout"/>
                            </form>
                          </li>
                      </ul>
                  </div>
              </div>                
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <?php
}

function mainNavBar($connect){
  ?>
  <nav class="navbar navbar-expand-lg nav">
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
              <?php 
                  getUni($connect); 
                  ?>
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
    </nav>
    
    <?php
}


function dashboard_navBar(){
  ?>
  <div class="sidebar" id="sidebar">
          <h2>Dashboard</h2>
          <ul>
            <li><a href="user-dashboard-profile.php">Account Settings</a></li>
            <li><a href="dashboard-booking-history.php">My Bookings</a></li>
            <li><a href="dashboard-contact.php">Contact Admin</a></li>
            <li><a href="index.php">Main Menu</a></li>
          </ul>
        </div>
        <?php
}

function admin_dashboard_navBar(){
  ?><div class="sidebar" id="sidebar">
          <h2>Dashboard</h2>
          <ul>
            <li><a href="#">Manage events</a></li>
            <li><a href="index.php">Main Menu</a></li>
          </ul>
        </div>
  <?php
}

function fixNavBars($status,$email,$username,$category,$connect){
  if($status==true){
    mainNavBarLogged($email,$username,$category,$connect);
  }else{
    mainNavBar($connect);
  }
}

function fixNavPages($status,$email,$username,$category,$connect){
  if($status==true){
    mainNavBarLoggedPages($email,$username,$category,$connect);
  }else{
    mainNavBarPages($connect);
  }
}

function getUni($connect){
  $sql = "SELECT name,university_id FROM universities";
  $arr = GetData($connect,$sql);

  foreach ($arr as $value) {
    $getName = $value['name'];
    $getId = $value['university_id'];
    ?>
    <li class="dropdown-item">
    <a href="events.php?uni_id=<?php echo $getId; ?>"> 
      <h6 class='mb-0'>
      <?php
         echo $getName;
         ?></h6><a>
      </li>
      <li><hr class="dropdown-divider" /></li>
  <?php

  }

}

?>
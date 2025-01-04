<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../css/bootsrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/custom/style-login-signup.css" rel="stylesheet" />
    <title>Login form</title>
  </head>
  <style>
    body {
      background-size: cover;
      background-position: center;
      background-image: url("../img/background.png");
    }
  </style>
  <body>
    <form class="mx-auto" action="login.php" method="post">
      <h2 class="text-center">Login</h2>
      <div>
        <label for="Inputusername" class="form-label">E-mail</label>
        <input
          type="email"
          class="form-control"
          placeholder="E-mai"
          style="background-color: #e8e9eb"
          name="email"
        />
      </div>
      <div class="InputPassword">
        <label for="InputPassword" class="form-label">Password</label>
        <input
          type="password"
          class="form-control"
          placeholder="password"
          style="background-color: #e8e9eb"
          name="password"
        />
      </div>
      <div class="remember-forget" style="margin: 10px">
        <label
          ><input type="checkbox" style="margin-right: 10px" />Remember me
        </label>
        <a href="#">Forget password?</a>
      </div>
      <input
        type="submit"
        class="btn btn-primary mt-4 btn"
        style="background-image: url(../img/background.png)"
        name="login"/>
      <div class="register-link">
      <?php 
      require_once "../public/func.php";
      require_once "../public/connectDB.php";

      login($connect);
      ?>
        <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
      </div>
    </form>
  </body>
</html>

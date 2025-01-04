<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../css/bootsrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/custom/style-login-signup.css" rel="stylesheet" />
    <title>Sign Up form</title>
  </head>
  <style>
    body {
      background-size: cover;
      background-position: center;
      background-image: url("../img/background.png");
    }
  </style>
  <body>
    <form class="mx-auto" action="signup.php" method="post">
      <h2 class="text-center">Sign Up</h2>
      <div>
        <label for="Inputusername" class="form-label">Username</label>
        <input
        name="username"
          type="text"
          class="form-control"
          placeholder="Username"
          style="background-color: #e8e9eb"
        />
      </div>

      <div>
        <label for="Inputusername" class="form-label" style="margin-top: 10px"
          >E-mail</label
        >
        <input
          type="email"
          class="form-control"
          placeholder="E-mail"
          style="background-color: #e8e9eb"
          name="email"
        />
      </div>

      <div class="InputPassword">
        <label for="InputPassword" class="form-label" style="margin-top: 10px">Password</label>
        <input type="password"
          class="form-control"
          placeholder="password"
          style="background-color: #e8e9eb"
          name="password"/>
      </div>

      <div class="InputPassword">
        <label for="InputPassword" class="form-label" style="margin-top: 10px">Confirm Password</label>
        <input type="password"
          class="form-control"
          placeholder="confirm password"
          style="background-color: #e8e9eb"
          name="confirmPassword"/>
      </div>

      <input
        type="submit"
        class="btn btn-primary mt-4 btn"
        style="background-image: url(../img/background.png)"
        value="SignUp"
        name="submit"
      />

      <?php 
      require_once "../public/func.php";
      require_once "../public/connectDB.php";

      signup($connect);
      ?>

      <div class="register-link">
        <p>You already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../css/bootsrap/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/custom/style-login.css" rel="stylesheet" />
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
    <form class="mx-auto">
      <h2 class="text-center">Sign Up</h2>
      <div>
        <label for="Inputusername" class="form-label">Username</label>
        <input
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
        />
      </div>

      <div class="InputPassword">
        <label for="InputPassword" class="form-label" style="margin-top: 10px"
          >Password</label
        >
        <input
          type="password"
          class="form-control"
          placeholder="password"
          style="background-color: #e8e9eb"
        />
      </div>
      <button
        type="submit"
        class="btn btn-primary mt-4 btn"
        style="background-image: url(../img/background.png)"
      >
        <b>Sign Up</b>
      </button>
      <div class="register-link">
        <p>You already have an account? <a href="login.php">Login</a></p>
      </div>
    </form>
  </body>
</html>

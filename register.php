<?php include("./includes/header.php") ?>
<?php include("./includes/navbar.php") ?>

<div class="container col-sm-12 mt-2">
  <form action="<?php $_SERVER["REQUEST_URI"] ?>" method="post" class="container col-sm-4">
    <div class="col text-center">
      <h1>Register</h1>
    </div>
    <div class="form-group">
      <label class="form-label" for="email">Name</label>
      <input class="form-control" type="text" name="name" id="name"><br>
    </div>
    <div class="form-group">
      <label class="form-label" for="email">Email</label>
      <input class="form-control" type="email" name="email" id="email"><br>
    </div>
    <div class="form-group">
      <label class="form-label" for="password">Password</label>
      <input class="form-control" type="password" name="password" id="password"><br>
    </div>
    <div class="col text-center">
      <button class="btn btn-primary mx-auto" type="submit" name="submit" value="submit">Register</button>
    </div>
  </form>
  <div class="col text-center mt-4">
    <p>Alredy have a account <a href="login.php">Login</a></p>
  </div>
</div>

<?php include("./includes/footer.php") ?>
<?php include("./save_register.php") ?>




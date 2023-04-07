<?php include("./includes/header.php") ?>
<?php include("./includes/navbar.php") ?>
<?php
  session_start();
?>
<div class="container py-5">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Información de usuario</h5>
          <p class="card-text">Nombre: <?php echo $_SESSION["name"] ?></p>
          <p class="card-text">Email: <?php echo $_SESSION["email"] ?></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("./includes/footer.php") ?>

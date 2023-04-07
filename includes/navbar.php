<nav class="navbar navbar-dark bg-primary">
  <div>
    <a class="navbar-brand" href="#">Mi sitio web</a>
    <a class="navbar-brand" href="home.php">Inicio</a>
  </div>
  <?php
  echo "<form method='post' action='" . $_SERVER['REQUEST_URI'] . "'><button class='btn btn-danger m-2' name='logout' value='logout'>Logout</button></form>";

  if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: home.php");
  }

  ?>
</nav>

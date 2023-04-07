<?php 
  include("db.php")
?>

<?php

if (isset($_POST["submit"])) {
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

  if (empty($email) || empty($password)) {
    $mensaje = "Ingresaste datos incorrectos. Por favor, vuelve a intentarlo.";
    echo '<script>mostrarToast();</script>';
  }
  
  //Verificar el email
  $queryMail = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn,$queryMail);
  if (!$result) {
    die("Query failed");
  };
  while ($row = mysqli_fetch_assoc($result)) {
    //Verificar el passowrd y desecnriptarlo
    $result = password_verify($password,$row["password"]);
    if (!$result) {
      echo "Password incorrect";
    } else {
      session_start();
      $_SESSION["name"] = $row["name"];
      $_SESSION["email"] = $row["email"];
      setcookie("login",true,time() + 60 * 60 * 24, "/");
      header("Location: profile.php");

    }
  };

}

?>

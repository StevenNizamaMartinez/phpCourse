<?php
  include("db.php")
  ?>

<?php

if (isset($_POST["submit"])) {
  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
  if (empty($name) || empty($password) || empty($email)) {
    echo "Llena todos los campos";
    return;
  } else {
    //VAMOS A ENCRIPTAR LA CONTRASEÑA
    $passwordEncrypted = password_hash($password, PASSWORD_BCRYPT);
    $query = "INSERT INTO users (name, email, password) VALUES ('$name','$email','$passwordEncrypted')";
    $result = mysqli_query($conn,$query);
    if (!$result) {
      echo "Query Failed";
      return;
    } else {
      session_start();
      $_SESSION["name"] = $name;
      $_SESSION["email"] = $email;
      header("Location: profile.php");
    }
  }
};

?>

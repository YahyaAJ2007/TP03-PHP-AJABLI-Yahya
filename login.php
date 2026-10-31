<?php
session_start();
if(isset($_POST["login"])){
    $_SESSION["login"] = $_POST["login"];
    header("Location: profil.php");
    exit;
}
?>
<form action="" method="POST">
    <label>Login :</label>    
    <input type="text" name="login" required>
    <input type="submit" value="Login">
</form>        
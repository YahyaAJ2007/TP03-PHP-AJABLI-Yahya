<?php
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
?>
<strong>Bienvenue </strong> <?php echo htmlspecialchars($_SESSION['login']);?><br><br>
<a href="deconnexion.php">Déconnecter</a>
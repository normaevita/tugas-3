<?php
session_start();

if (
    !isset($_SESSION['user_login']) || (isset($_SESSION['user_login']) && $_SESSION['user_login'] !='member')
) {
    header('location:./../login.php');
    exit();
}
?>
<h2>Hallo Admin <?= $_SESSION['nama'];
                ?> Apakabar ?</h2>

<a href="./../logout.php">Logout</a>
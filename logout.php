<?php require "header.php" ?>

<?php
session_start();
session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
?>
<?php require "footer.php"?>
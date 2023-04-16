<?php session_start() ?>
<?php require "header.php" ?>

<?php
session_unset();
    session_destroy();
    {echo "<br><br><br>"; }
?>
<h1>You have successfully logged out!<h1>
<?php require "footer.php"?>
<?php require "header.php" ?>
<?php session_start() ?>
<div style="top: 250px; left:400px; position: fixed">
    <?php 
     if ($_SESSION["emailType"] == "new-account") {echo "<h1>new account<h1>"; }
     if ($_SESSION["emailType"] == "lost-password") {echo "<h1>lost password<h1>"; }
    ?>
    </div>
 
</body>
</html>

<?php require "footer.php"?>
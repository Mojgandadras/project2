<?php require "header.php" ?>
    <div style="top: 500px; position: fixed">
    <?php 
     if ($_POST ['email'] == "new-account") {echo "new account"; }
     if ($_POST ['email'] == "lost-password") {echo "lost password"; }
    ?>
    </div>
    
<p> make an email</p>
 
</body>
</html>

<?php require "footer.php"?>
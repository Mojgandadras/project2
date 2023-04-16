<?php require "header.php" ?>
<a href="logout.php" id="logout">Log Out</a>
<div style="top: 150px; position: fixed">
    <?php 
     if ($_POST['role'] =="admin") {echo  "Hello Admin <br> here is your options: <h2><a href='new-account.php'>New account</a><br><a href='isnt-working.php'>isnt-working</a>  </h2> ";
     }

     if ($_POST['role'] =="manager") {echo "Hello Manager<br> here is your options: <br> <h2><a href='lost-password.php'>Lost password</a><br><a href='isnt-working.php'>isnt-working</a> </h2>  ";
     }

     if ($_POST['role'] =="ceo") {echo "Hello CEO <br> here is your options: <br> <h2><a href='need-help.php'>Need Help</a><br><a href='isnt-working.php'>isnt-working</a> <br> <a href='lost-password.php'>lost password</a></h2>  ";
     }
    
    ?>
</div>
<?php require "footer.php"?>

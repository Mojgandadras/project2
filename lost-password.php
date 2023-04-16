<?php require "header.php" ?>
<?php session_start() ?>
<?php $_SESSION["emailType"] = "lost-password"; ?>
<form action="send-email.php" method="post">

<input type="text" name="email" placeholder="e-mail">
<button type="submit">Submit</button>


 <p>lost password</p>
 
</body>
</html>

<?php require "footer.php"?>
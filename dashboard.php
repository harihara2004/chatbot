<?php
//include auth_session.php file on all user panel pages
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chatbot - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user chatbot.</p>
        <p><a href='index1.php?option=chatbot'>Chatbot</a></p>
    </div>
</body>
</html>
<?php
session_start();
echo $_SESSION['username'];
echo "<br/>";
echo $_SESSION['email'];
/*Un set the Session Data */
unset($_SESSION['email']);
session_destroy();
?>
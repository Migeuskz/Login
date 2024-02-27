<?php
    session_start();
    session_destroy();
    header( "location: ../login.php" );  // Redirecting to home page after logout

?>
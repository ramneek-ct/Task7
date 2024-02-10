<?php
    session_start();
    echo "logout";
    session_unset();
    session_destroy();


    // setcookie("cookie", true, time()-86400, "/");
?>
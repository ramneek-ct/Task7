<?php
    session_start();
    echo "logout";
    session_unset();
    session_destroy();

?>
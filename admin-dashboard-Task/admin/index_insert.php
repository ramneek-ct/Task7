<?php
include "admindash-db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['userid'];
    $password = $_POST['password'];

    $access = false;

    $entered_data = "SELECT first_name, last_name, pass FROM admin_data";
    $get_data = mysqli_query($conn, $entered_data);

    if (mysqli_num_rows($get_data) > 0) {
        while ($row = mysqli_fetch_assoc($get_data)) {
            $userid = $row['first_name'] . $row['last_name'];
            $pass = $row['pass'];

            if (($user == $userid) && ($password == $pass)) {
                $access = true;
                
            }
        }

        if ($access) {
            echo "1";
        } else {
            echo "Access Denied!";
        }
    }
}
?>

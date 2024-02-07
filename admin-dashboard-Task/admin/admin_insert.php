<?php
include 'admindash-db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    $counter = 0;
    if($pass == $cpass ){
        $select = "SELECT * FROM admin_data";
        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_assoc($result)){
                if($fname == $row['first_name'] && $lname == $row['last_name']){
                    $sql = "UPDATE admin_data SET first_name = '$fname', middle_name = '$mname', last_name = '$lname', pass = '$pass' WHERE first_name = '{$row['first_name']}' AND last_name = '{$row['last_name']}'";
                    $run_sql = mysqli_query($conn, $sql);
                    $counter++;
                    echo "Record exists already!";
                }
            }
        } else {
            echo "No record found!";
        }

        if ($counter == 0){
            $insert = "INSERT INTO admin_data (first_name, middle_name, last_name, pass) VALUES ('$fname','$mname','$lname','$pass')";
            if(mysqli_query($conn, $insert)){
                echo "New admin account created!";
            } else {
                echo "Error...";
            }
        }
    } else {
        echo "Check password!";
    }
}
?>

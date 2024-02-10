<?php
session_start();
include "admin\admindash-db.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title> Display Page </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">
</head>
<body>
    <div class="page-container">
        <?php
        if (isset($_SESSION["username"])){
            echo "Hello! ".$_SESSION["username"];
        }

        $sql = "SELECT h_image, heading, paragraph FROM content_data";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<br><br>";
                echo "<h1>".$row['heading']."</h1><br>";
                echo "<p>".$row['paragraph']."</p>";
                echo "<br>";
                echo "<img src='admin/assets/uploads/" . $row['h_image'] . " ' alt='image' style='height: 100px; width: 100px;'>";
            }
        } else {
            echo "Not supported";
        }
        ?>
    </div>
</body>
</html>

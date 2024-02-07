<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admin_info";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname );
    
    // if (!$conn) {
    //   die("Connection failed: " . mysqli_connect_error());
    // }

    // $sql = " CREATE DATABASE admin_info";
    // if(mysqli_query($conn,$sql))
    // {
    //     echo "Database created!";
    // }

    // $sql = "CREATE TABLE admin_data (
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     first_name VARCHAR(30) NOT NULL,
    //     middle_name VARCHAR(30),
    //     last_name VARCHAR(30) NOT NULL,
    //     pass VARCHAR(8) NOT NULL
    // )";

    // if(mysqli_query($conn,$sql))
    // {
    //     echo "Table created!";
    // }else {
    //     echo "Error creating table: " . mysqli_error($conn);
    //   }

  //   $sql = "CREATE TABLE content_data (
  //     id INT AUTO_INCREMENT PRIMARY KEY,
  //     h_image VARCHAR(255) ,
  //     heading VARCHAR(30) NOT NULL,
  //     paragraph VARCHAR(30) NOT NULL
  //  )";

  //  if(mysqli_query($conn,$sql))
  //  {
  //      echo "Table created!";
  //  }else {
  //      echo "Error creating table: " . mysqli_error($conn);
  //    }

  //    mysqli_close($conn);
?>

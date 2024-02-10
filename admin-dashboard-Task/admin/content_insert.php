<?php
    include 'admindash-db.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $heading = $_POST['heading'];
        $paragraph = $_POST['paragraph'];
        $image_name = $_POST['image_name'];

        // Updates image name without reloading
        $img_name = ['img' => $image_name];
        header('Content-Type: application/json');
        echo json_encode($img_name);

        $image = '';
        if (isset($_FILES['image'])) {
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, "assets/uploads/" . $image);
        }

        $check = "SELECT * FROM content_data";
        $run_check = mysqli_query($conn,$check);


        if(mysqli_num_rows($run_check) > 0){
            $row = mysqli_fetch_assoc($run_check);
            $id = $row['id'];
            if(!empty($image)){
                $update = "UPDATE content_data SET h_image = '$image', heading = '$heading', paragraph = '$paragraph' WHERE id = $id";
                mysqli_query($conn,$update);
                echo "Record Updated!";
            }else{
                $sql = "UPDATE content_data SET heading ='$heading', paragraph = '$paragraph' WHERE id = $id";
                mysqli_query($conn, $sql);
                echo "Record Updated";
            }
        }else{
            $insert = "INSERT INTO content_data (h_image, heading, paragraph) VALUES ('$image', '$heading', '$paragraph')";
            mysqli_query($conn,$insert);
            echo "Record Saved!";
        }
    }
?>
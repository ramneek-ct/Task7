<?php
    include 'admindash-db.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Input </title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="assets/js/index.js"></script>
</head>
<body>

    <?php
        $sql = "SELECT h_image, heading, paragraph FROM content_data";
        $execute = mysqli_query($conn,$sql);

        if(mysqli_num_rows($execute)>0){
            $row = mysqli_fetch_assoc($execute);
        }
    ?>
    <form id="content" method="post" action="#" enctype="multipart/form-data"><br>
        <label for="img_file">Enter header image: </label><br><br>
        <input type="file" id="img_file" name="img_file"  value="<?php echo $row['h_image'];?>" required><br><br>

        <label for="heading">Enter heading: </label>
        <input type="text" id="heading" name="heading" value="<?php echo $row['heading']; ?>" ><br><br>
        
        <label for="paragraph">Enter paragraph: </label>
        <input type="text" id="paragraph" name="paragraph" value= "<?php echo $row['paragraph']; ?>" ><br><br>

        <input type="submit" value="Enter" class="enter"><br><br>
</form>
</body>
</hmtl>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <script src="assets/js/index.js"></script>
</head>
<body>
    <form id="admin" method="post" action="#"> 
        <label for="first_name"> First Name: </label>
        <input type="text" id="first_name" name="first_name"><br><br>

        <label for="middle_name"> Middle Name: </label>
        <input type="text" id="middle_name" name="middle_name"><br><br>

        <label for="last_name"> Last Name: </label>
        <input type="text" id="last_name" name="last_name"><br><br>

        <label for="pwd"> Password: </label>
        <input type="text" id="pwd" name="pwd"><br><br>

        <label for="cpwd"> Confirm Password: </label>
        <input type="text" id="cpwd" name="cpwd"><br><br>

        <input type="submit" value="Create" class="create">
</body>
</html>

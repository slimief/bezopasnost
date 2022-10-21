<?php
   include('connect.php');
   
    session_start();
    if (!$_SESSION['da']) {
        header('Location: /');
    }
    $connect = mysqli_connect('localhost', 'root', 'root', 'laba3php');
    $sql = mysqli_query($connect, "SELECT * FROM users");
    $row = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    text-align: center;
    width: 800px;
}
label {
    display: inline-block;
    text-align: center;
    font-size: 25px;
    width: 70px;
    height: 10px;
    font-family: 'Times New Roman';
}
input {
    border: 2px solid black;
    font-size: 25px;
    font-family: 'Times New Roman';
    width:300px;
    height: 50px;
    margin-left:10px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 3px solid black;
    width: 500px;
    background: white;
}
div.form-element {
    margin-top: 20px;
    margin-bottom: 20px;
}
a {
    padding: 10px;
    font-size: 25px;
    font-family: 'Times New Roman';
    font-weight: 100;
    background: white;
    color: black;
}

</style>

<body>
    <a href = "logout.php?do=logout">gtygh</a>
    

    
</body>
</html>
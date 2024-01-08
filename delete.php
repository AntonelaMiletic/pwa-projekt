<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
include 'connect.php';
include 'header.html';
if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $query = "DELETE FROM clanci WHERE id=$id";
    $result = mysqli_query($dbc, $query);
}

define('UPLPATH', 'img/');
    if(isset($_POST['update'])){
    $photo = $_FILES['photo']['name'];
    $title=$_POST['title'];
    $about=$_POST['about'];
    $content=$_POST['content'];
    $category=$_POST['category'];
    if(isset($_POST['archive'])){
     $archive=1;
    }else{
     $archive=0;
    }
    $target = 'img/'.$photo;
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target);
    $id=$_POST['id'];
    $query = "UPDATE clanci SET title='$title', about='$about', content='$content',
    photo='$photo', category='$category', archive='$archive' WHERE id=$id ";
    $result = mysqli_query($dbc, $query);
    }

    include 'footer.html';

?>
</body>
</html>
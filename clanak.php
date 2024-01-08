<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Document</title>
</head>
<header>
<body>
<?php
include 'connect.php';
include 'header.html';
define('UPLPATH', 'img/');

$query = "SELECT * FROM clanci WHERE id=$_GET[id]";
$result = mysqli_query($dbc, $query);

while($row=mysqli_fetch_array($result)){
echo "<section role='main'>
<div class='row'>
    <h2 class='category'>
        <span>$row[category]</span>
    </h2>
    <h1 class='title'>$row[title]</h1>
    <p>AUTOR:</p>
    <p>OBJAVLJENO: 
        <span>$row[date]</span>
    </p>
</div>
    
<div class='slika'>
    <img width=100% src='img/$row[photo]'>
</div>

<div class='about'>
    <p>$row[about]</p>
</div>

<div class='sadrzaj'>
    <p>$row[content]</p>
</div>

</section>";
}
include 'footer.html';
?>
</body>
</html>
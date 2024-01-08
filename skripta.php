<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <title>Document</title>
</head>
<body>
<?php
include 'connect.php';
include 'header.html';
$photo = $_FILES['photo']['name'];
$servername="localhost";
$username="root";
$password="";
$basename="vjezba_3";
$date = date("Y-m-d H:i:s");
$dbc=mysqli_connect($servername, $username, $password, $basename) or
die ('Greška'.mysqli_error());
echo "<section role='main'>
    <div class='row'>
        <p class='category'>
            $_POST[category]
        </p>
        <h1 class='title'>
            $_POST[title]
        </h1>
        <p>AUTOR:</p>
        <p>OBJAVLJENO: $date</p>
    </div>";

echo "<section class='slika'>
    
    <img src='img/$photo'>
 </section>

 <section class='about'>
    <p>$_POST[about]</p>
 </section>

 <section class='sadrzaj'>
    <p>$_POST[content]</p>
</section>
</section>";

if(isset($_POST['archive'])){
    $archive=1;
}
else{
    $archive=0;
}

$query = "INSERT INTO clanci(category, title, photo, about, content, `archive`, autor, `date`)
VALUES ('$_POST[category]', '$_POST[title]', '$photo', '$_POST[about]', '$_POST[content]', $archive, 'lala', '$date')";
$result = mysqli_query($dbc, $query) or die('Error querying database.'.myqli_error());
$target = 'img/' . $photo;
move_uploaded_file($_FILES['photo']['tmp_name'], $target);
mysqli_close($dbc);

include 'footer.html';
?>
</body>
</html>
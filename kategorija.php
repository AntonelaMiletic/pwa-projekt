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
define('UPLPATH', 'img/');

$category=$_GET['id'];
$query = "SELECT * FROM clanci WHERE category='$category'";
$result = mysqli_query($dbc, $query);

echo '<div class="sve">';
echo '<h2>'.$category.'</h2>';
echo '<section>';
while($row=mysqli_fetch_array($result)){
    if($row['archive'] == 0) {
 echo '<article>';
 echo'<div class="article">';
 echo '<div class="sport_img">';
 echo '<img src="' . UPLPATH . $row['photo'] . '"';
 echo '</div>';
 echo '<div class="media_body">';
 echo '<h4 class="title">';
 echo '<a href="clanak.php?id='.$row['id'].'">';
 echo $row['title'];
 echo '</a></h4>';
 echo '</div></div>';
 echo '</article>';
    }
}
echo '</section>';
echo '</div>';
include 'footer.html';
?>
</body>
</html>
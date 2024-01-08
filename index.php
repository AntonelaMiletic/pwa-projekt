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
?>
<div class="sve">
<h2>Politique</h2>
<section class="politika">
<?php
$query = "SELECT * FROM clanci WHERE archive=0 AND category='Politika' LIMIT 3";
$result = mysqli_query($dbc, $query);
 $i=0;
 while($row = mysqli_fetch_array($result)) {
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
 }?>
</section>

<h2>Sport</h2>
<section class="sport">
<?php
$query = "SELECT * FROM clanci WHERE archive=0 AND category='Sport' LIMIT 3";
$result = mysqli_query($dbc, $query);
 $i=0;
 while($row = mysqli_fetch_array($result)) {
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
 }?>
</section>
</div>
<?php
include 'footer.html';
?>
</body>
</html>
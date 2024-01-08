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
session_start();
include 'connect.php';
include 'header.html';
define('UPLPATH', 'img/');

if ((isset($_SESSION['username'])) && $_SESSION['level'] == 1) {
    $query = "SELECT * FROM clanci";
    $result = mysqli_query($dbc, $query);
    while($row = mysqli_fetch_array($result)) {
        echo '<form enctype="multipart/form-data" action="delete.php" method="POST">
        <div class="form-item">
        <label for="title">Naslov vijesti:</label>
        <div class="form-field">
        <input type="text" name="title" class="form-field-textual"
       value="'.$row['title'].'">
        </div>
        </div>
        <div class="form-item">
        <label for="about">Kratki sadržaj vijesti (do 50
       znakova):</label>
        <div class="form-field">
        <textarea name="about" id="" cols="30" rows="10" class="formfield-textual">'.$row['about'].'</textarea>
        </div>
        </div>
        <div class="form-item">
        <label for="content">Sadržaj vijesti:</label>
        <div class="form-field">
        <textarea name="content" id="" cols="30" rows="10" class="formfield-textual">'.$row['content'].'</textarea>
        </div>
        </div>
        <div class="form-item">
        <label for="photo">Slika:</label>
        <div class="form-field">
       
        <input type="file" class="input-text" id="photo"
       value="'.$row['photo'].'" name="photo"/> <br><img src="' . UPLPATH .
       $row['photo'] . '" width=100px>
       
        </div>
        </div>
        <div class="form-item">
        <label for="category">Kategorija vijesti:</label>
        <div class="form-field">
        <select name="category" id="" class="form-field-textual"
       value="'.$row['category'].'">
        <option value="sport">Sport</option>
        <option value="politika">Politika</option>
        </select>
        </div>
        </div>
        <div class="form-item">
        <label>Spremiti u arhivu:
        <div class="form-field">';
        if($row['archive'] == 0) {
        echo '<input type="checkbox" name="archive" id="archive"/>
       Arhiviraj?';
        } else {
        echo '<input type="checkbox" name="archive" id="archive"
       checked/> Arhiviraj?';
        }
        echo '</div>
        </label>
        </div>
        </div>
        <div class="form-item">
        <input type="hidden" name="id" class="form-field-textual"
       value="'.$row['id'].'">
        <button type="reset" value="Poništi">Poništi</button>
        <button type="submit" name="update" value="Prihvati">
       Izmjeni</button>
        <button type="submit" name="delete" value="Izbriši">
       Izbriši</button>
        </div>
        </form>';
    }  
 // Pokaži poruku da je korisnik uspješno prijavljen, ali nije administrator
} else if(!isset($_SESSION['username'])){
    echo '<div class="login"><a href="prijava.php">Login</a></div>';
}
else if($_SESSION['level']==0){
    echo '<p>Bok! Uspješno ste prijavljeni, ali niste administrator.</p>';
}


 ?>
 
 <?php
 
 include 'footer.html';
 ?>

</body>
</html>
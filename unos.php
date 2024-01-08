<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="validacija.js"></script>
    <title>Document</title>
    <style>
        .error {
            border-color: red;
            color: red;
        }
    </style>
</head>
<header>
<body>
<?php
include 'connect.php';
include 'header.html';
define('UPLPATH', 'img/');
?>
<form class="nez" name="dojmovnik" id="dojmovnik" action="skripta.php" method="POST" enctype="multipart/form-data">
    <div class="form-item">
        <span id="porukaTitle" class="bojaPoruke"></span>
        <label for="title">Naslov vijesti</label>
        <div class="form-field">
            <input type="text" name="title" id="title" class="form-field-textual">
        </div>
    </div>

    <div class="form-item">
        <span id="porukaAbout" class="bojaPoruke"></span>
        <label for="about">Kratki sadržaj vijesti (do 50 znakova)</label>
        <div class="form-field">
            <textarea name="about" id="about" cols="30" rows="10" class="formfield-textual"></textarea>
        </div>
    </div>

    <div class="form-item">
        <span id="porukaContent" class="bojaPoruke"></span>
        <label for="content">Sadržaj vijesti</label>
        <div class="form-field">
            <textarea name="content" id="content" cols="30" rows="10"
           class="form-field-textual"></textarea>
        </div>
    </div>

    <div class="form-item">
        <span id="porukaSlika" class="bojaPoruke"></span>
        <label for="photo">Slika: </label>
        <div class="form-field">
            <input type="file" accept="image/jpg,image/gif" class="input-text" id="photo" name="photo"/>
        </div>
    </div>

    <div class="form-item">
        <span id="porukaKategorija" class="bojaPoruke"></span>
        <label for="category">Kategorija vijesti</label>
        <div class="form-field">
            <select name="category" id="category" class="form-field-textual">
            <option value="" disabled selected>Odabir kategorije</option>
            <option value="Sport">Sport</option>
            <option value="Politika">Politika</option>
            </select>
        </div>
    </div>

    <div class="form-item">
        <label>Spremiti u arhivu:
        <div class="form-field">
            <input type="checkbox" name="archive" id="archive">
        </div>
        </label>
    </div>

    <div class="form-item">
        <button type="reset" value="Poništi" name="reset">Poništi</button>
        <button type="submit" value="Prihvati" name="submit" id="slanje">Prihvati</button>
    </div>
</form>
<?php
 include 'footer.html';
 ?>
</body>
</html>
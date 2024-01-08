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
?>

<form action="obradaprijave.php" method="POST" name="logi">
<div class="form-item">
                <span id="porukaUsername" class="bojaPoruke"></span>
                <label for="content">Korisničko ime:</label>
                
                <div class="form-field">
                <input type="text" name="username" id="username" class="formfield-textual">
                </div>
            </div>
            <div class="form-item">
                <span id="porukaPass" class="bojaPoruke"></span>
                <label for="pphoto">Lozinka: </label>
                <div class="form-field">
                <input type="password" name="pass" id="pass" class="formfield-textual">
                </div>
            </div>
            <div class="form-item">
                <button type="submit" value="Prijava" id="slanje">Prijava</button>
            </div>
</form>
<?php
include 'footer.html';
?>
<script type="text/javascript">

document.getElementById("slanje").onclick = function(event) {
   var slanjeForme = true;

   var poljeUsername = document.getElementById("username");
   var username = document.getElementById("username").value;
   if (username.length == 0) {
       slanjeForme = false;
       poljeUsername.style.border="1px dashed red";
    document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>";
    porukaUsername.style.color="red";
   } else {
       poljeUsername.style.border="1px solid green";
       document.getElementById("porukaUsername").innerHTML="";
   }

   var poljePass = document.getElementById("pass");
   var pass = document.getElementById("pass").value;
   if (pass.length == 0) {
       slanjeForme = false;
       poljePass.style.border="1px dashed red";
       document.getElementById("porukaPass").innerHTML="<br>Unesite lozinku!<br>";
       porukaPass.style.color="red";

   } else {
       poljePass.style.border="1px solid green";
       document.getElementById("porukaPass").innerHTML="";
   }

   if (slanjeForme != true) {
       event.preventDefault();
   }
};

 </script>
</body>
</html>

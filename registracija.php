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
session_start();
?>
    <section role="main">
        <form enctype="multipart/form-data" action="provjera.php" method="POST">
            <div class="form-item">
                <span id="porukaIme" class="bojaPoruke"></span>
                <label for="title">Ime: </label>
                <div class="form-field">
                <input type="text" name="ime" id="ime" class="form-fieldtextual">
                </div>
            </div>

            <div class="form-item">
                <span id="porukaPrezime" class="bojaPoruke"></span>
                <label for="about">Prezime: </label>
                <div class="form-field">
                <input type="text" name="prezime" id="prezime" class="formfield-textual">
                </div>
            </div>

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
                <span id="porukaPassRep" class="bojaPoruke"></span>
                <label for="pphoto">Ponovite lozinku: </label>
                <div class="form-field">
                <input type="password" name="passRep" id="passRep" class="form-field-textual">
                </div>
            </div>
   
            <div class="form-item">
                <button type="submit" value="regist" id="slanje">Registriraj se</button>
            </div>
    </form>
    </section>

    <script type="text/javascript">
 document.getElementById("slanje").onclick = function(event) {

 var slanjeForme = true;

 // Ime korisnika mora biti uneseno
 var poljeIme = document.getElementById("ime");
 var ime = document.getElementById("ime").value;
 if (ime.length == 0) {
 slanjeForme = false;
 poljeIme.style.border="1px dashed red";
 porukaIme.style.color="red";
 document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br>";
 } else {
 poljeIme.style.border="1px solid green";
 document.getElementById("porukaIme").innerHTML="";
 }
 // Prezime korisnika mora biti uneseno
 var poljePrezime = document.getElementById("prezime");
 var prezime = document.getElementById("prezime").value;
 if (prezime.length == 0) {
 slanjeForme = false;

 poljePrezime.style.border="1px dashed red";
 porukaPrezime.style.color="red";
document.getElementById("porukaPrezime").innerHTML="<br>Unesite Prezime!<br>";
 } else {
 poljePrezime.style.border="1px solid green";
 document.getElementById("porukaPrezime").innerHTML="";
 }

 // Korisničko ime mora biti uneseno
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

 // Provjera podudaranja lozinki
 var poljePass = document.getElementById("pass");
 var pass = document.getElementById("pass").value;
 var poljePassRep = document.getElementById("passRep");
 var passRep = document.getElementById("passRep").value;
 if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
 slanjeForme = false;
 poljePass.style.border="1px dashed red";
 poljePassRep.style.border="1px dashed red";
 document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>";
 porukaPass.style.color="red";
 porukaPassRep.style.color="red";

document.getElementById("porukaPassRep").innerHTML="<br>Lozinke nisu iste!<br>";
 } else {
 poljePass.style.border="1px solid green";
 poljePassRep.style.border="1px solid green";
 document.getElementById("porukaPass").innerHTML="";
 document.getElementById("porukaPassRep").innerHTML="";
 }

 if (slanjeForme != true) {
 event.preventDefault();
 }
 };

 </script>
 <?php
include 'footer.html';
?>
</body>
</html>

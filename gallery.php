<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Photo Gallery</title>
	<link rel="stylesheet" href="css/style.css">
	<meta name= 'viewport' content='width=device-width, initial-scale=1'>
</head>

<body class="galbody">
	<?php $fname = basename(__FILE__);
	?>

<div class="indexHeaderDiv">
	<?php include("header.html");?>
</div>

<script>
var today = new Date();
var curTime = today.getHours();

if(curTime<12)
{
	document.write("<h1 class='greeting'>Good Morning</h1>");
}
else if(curTime<18)
{
	document.write("<h1 class='greeting'>Good Afternoon</h1>");
}
else
{
	document.write("<h1 class='greeting'>Good Evening</h1>");

}

function onhover(picture){
	document.getElementById('loadarea').style.backgroundImage="url(" + picture.src+")";
	document.getElementById('loadarea').innerHTML=picture.alt;
}

function nohover(picture){
	document.getElementById('loadarea').style.backgroundImage="url()";
	document.getElementById('loadarea').innerHTML="Hover over an image below"
}

document.body.style.backgroundColor = '#E0F5FF';

document.getElementById('loadarea').style.backgroundImage="url()";
</script>

<div id="loadarea" style="background-repeat: no-repeat; background-position: center;">
Hover over an image below
</div>

<img id="portrait2" class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="SelfPortrait.jpeg" alt="Self Portrait Made in Photoshop."/> 

<img class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="abandoned.jpg" alt="Interior of an abandoned home in Northern California."/>

<img class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="Dry.jpg" alt="Abandoned log cabin in Northern California."/>


<footer>
	<?php include("footer.html");?>
</footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portfolio</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset = "UTF-8">
</head>
<body class="PortfolioBody">
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
	document.write("<h1 class=\"header\">Good Morning</h1>");
}
else if(curTime<18)
{
	document.write("<h1 class=\"header\">Good Afternoon</h1>");
}
else
{
	document.write("<h1 class=\"header\">Good Evening</h1>");

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

<div id="loadarea">
Hover over an image below
</div>

<img id="work1" class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="work1.jpg" alt="Rooftop in Los Angeles"/> 

<img class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="work2.jpg" alt="Cabin in Mammoth Lakes California"/>

<img class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="work3.jpg" alt="Abandoned Jail in Los Angeles California"/>

<img class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="work4.jpg" alt="Cabin 2 in Mammoth Lakes California and Snow"/>

    <footer>
    <?php include("footer.html");?>
    </footer>

</body>
</html>
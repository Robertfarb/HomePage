<!DOCTYPE html>
<html lang="en">
<head>
  <title>Some of My Work</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
<meta charset = "UTF-8">
</head>

<body class="indexBody">
  <?php $fname = basename(__FILE__);
  ?>

  <div class="indexHeaderDiv">
    <?php include("header.html");?>
  </div>

  <h1 class="WebDesigner">Some of My Works.</h1>
  <hr class="Divider">
  <p id="description"> 
		This is some of my work including photography and graphic design that I have<br />
    created over the last few years. I have a passion for design elements and photography.<br />
    Hover over an image below for a closer look.
  </p>

  <div class="somephotos">
    <img id="work1" class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="work1.jpg" alt="Rooftop in Los Angeles"/> 

    <img class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="work2.jpg" alt="Cabin in Mammoth Lakes California"/>

    <img class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="work3.jpg" alt="Abandoned Jail in Los Angeles California"/>

    <img class="picture" onmouseover="return onhover(this)" onmouseout="return nohover()" src="work4.jpg" alt="Cabin 2 in Mammoth Lakes California and Snow"/>
  </div>

  <div class="indexFooter">
    <footer>
    <?php include("footer.html");?>
    </footer>
  </div>
</body>
</html>

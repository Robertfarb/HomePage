<!DOCTYPE html>
<html lang="en">
<head>
  <title>Robert Farb's UMSI Homepage</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
  <meta charset = "UTF-8">
  <link rel="shortcut icon" href="Logo.jpg" type="image/x-icon" />
</head>

<body class="indexBody">
  <?php $fname = basename(__FILE__);
  ?>

  <div class="indexHeaderDiv">
    <?php include("header.html");?>
  </div>

  <h1 class="WebDesigner">Web Designer.</h1>
  <hr class="Divider">
  <p id="description"> 
		An aspiring Web Designer from Los Angeles, California, that loves to <br />
    create beautifully designed websites using HTML5, Javascript, PHP, Bootstrap,<br />
    CSS and Media Queries. I am currently a sophomore at the University of Michigan.
  </p>

<div id="portfolio">
  <a class="indexPortfolio" href="somework.php">Some of my work</a>
</div>
  <div class="indexFooter">
    <footer>
    <?php include("footer.html");?>
    </footer>
  </div>
</body>
</html>

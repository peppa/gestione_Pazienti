<!DOCTYPE HTML>
<html>

<head>
  <title>my portfolio</title>
  <meta name="description" content="gestione archivio utenti di una clinica" />
  <meta name="keywords" content="clinica, visita, visite" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/style1.css" /> 
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>


<body>
  <div id="main">
    <header>
      <div id="logo"><h1>MY<a href="#">PORTFOLIO</a></h1></div>
      <nav>
        <ul class="lavaLampWithImage" id="lava_menu">
          <li class="current"><a href="#">home</a></li>
          <li><a href="about.html">about me</a></li>
          <li><a href="portfolio.html">my portfolio</a></li>
          <li><a href="blog.html">blog</a></li>
          <li><a href="contact.html">contact</a></li>
        </ul>
      </nav>
    </header>
    
    <div id="site_content">
      
    </div>
      
       <footer> <!--
      <p><a href="index.html">home</a> | <a href="about.html">about me</a> | <a href="portfolio.html">my portfolio</a> | <a href="blog.html">blog</a> | <a href="contact.html">contact</a></p> -->
      <p>&copy; 2012 my portfolio. All Rights Reserved. | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p> 
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript" src="js/image_fade.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 400
      });
    });
  </script>
</body>
</html>

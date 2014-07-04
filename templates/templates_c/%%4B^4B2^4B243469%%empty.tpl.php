<?php /* Smarty version 2.6.26, created on 2014-07-04 18:04:27
         compiled from empty.tpl */ ?>
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
      <?php echo $this->_tpl_vars['contenuto']; ?>

    </div>
      
       <footer> <!--
      <p><a href="index.html">home</a> | <a href="about.html">about me</a> | <a href="portfolio.html">my portfolio</a> | <a href="blog.html">blog</a> | <a href="contact.html">contact</a></p> -->
      <p>&copy; 2012 my portfolio. All Rights Reserved. | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p> 
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  
</body>
</html>
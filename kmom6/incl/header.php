<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">

  <title><?php echo $title ?></title>

  <!-- Links to external style sheets -->
  <?php if(isset($_SESSION['stylesheet'])): ?>
    <link rel="stylesheet" href="style/<?php echo $_SESSION['stylesheet']; ?>">
  <?php else: ?>
    <link rel="stylesheet" type="text/css" href="style/stylesheet.css" title="General stylesheet">
    <link rel="alternate stylesheet" type="text/css" href="style/debug.css" title="Debug stylesheet">
  <?php endif; ?>

  <link rel="shortcut icon" href="img/favicon.ico">

  <link href='http://fonts.googleapis.com/css?family=Noticia+Text|Average+Sans' rel='stylesheet' type='text/css'>

  <!-- Each page can set $pageStyle to create additional style -->
  <?php if(isset($pageStyle)) : ?>
   <style type="text/css">
     <?php echo $pageStyle; ?>
   </style>
  <?php endif; ?>

  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<!-- The body id helps with highlighting current menu choice -->
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>

<!-- Above header -->
<header id="above">

  <nav class="login right">
    <!-- login & logout menu -->
    <?php echo userLoginMenu(); ?>
  </nav>

  <nav class="related">
    <!-- Relateted links -->
    <a href="../kmom1/me.php">kmom01</a>
    <a href="../kmom2/me.php">kmom02</a>
    <a href="../kmom3/me.php">kmom03</a>
    <a href="../kmom4/me.php">kmom04</a>
    <a href="../kmom5/me.php">kmom05</a>
    <a class="active" href="../kmom6/me.php">kmom06</a>
  </nav>
</header>

<!-- Header -->
<header id="top">
  <div id="logo">
			<img src="img/logo.png" alt="jr logo" width=225 height=88>
	</div>

	<!-- Navigeringsmeny -->
	<nav class="navmenu">
    <a id="me-" href="me.php">Me</a>
    <a id="report-" href="report.php">Redovisning</a>
    <a id="test-" href="test.php">Tester</a>
    <a id="style-"  href="style.php">Style</a>
    <a id="blokket-"  href="blokket.php">Blokket</a>
    <a id="source-" href="viewsource.php">Källkod</a>
  </nav>
</header>

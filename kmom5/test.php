<?php 
  include("incl/config.php"); 

  // Is the page known?
  $path = "incl/test";
  $file = null;
  // Check if the url contains a querystring with a page-part.
  $p = null;
  if(isset($_GET["p"])) 
  {
    $p = $_GET["p"];
  }
  if($p == "kmom02-pagestyle")
  {
    $title = "Tester kmom02: Visa olika styles med \$pageStyle";
    $file = "kmom02_pagestyle.php";
  }
  else if($p == "kmom03-get")
  {
    $title = "Tester kmom03: Visa \$_GET";
    $file = "kmom03_get.php";
  }
  else if ($p == "kmom03-getform")
  {
    $title = "Tester kmom03: Visa \$_GET form";
    $file = "kmom03_getform.php";
  } 
  else if ($p == "kmom03-postform")
  {
    $title = "Tester kmom03: Visa \$_POST";
    $file = "kmom03_postform.php";
  } 
  else if ($p == "kmom03-validate")
  {
    $title = "Tester kmom03: Visa \$_GET";
    $file = "kmom03_validate.php";
  }
  else if ($p == "kmom03-server")
  {
    $title = "Tester kmom03: Visa \$_SERVER";
    $file = "kmom03_server.php";
  }
  else if ($p == "kmom03-sessiondestroy") 
  {
    $title = "Tester kmom03: Förstör sessionen";
    $file = "kmom03_sessiondestroy.php";
    destroySession();
  }
  else if ($p == "kmom03-sessionchange")
  {
    $title = "Tester kmom03: Ändra \$_SESSION";
    $file = "kmom03_sessionchange.php";
  }  
  else if ($p == "kmom03-showsession")
  {
    $title = "Tester kmom03: Visa \$_SESSION";
    $file = "kmom03_session.php";
  }
  else
  {
    $title = "Tester";
    $file = "default.php";
  }

  $pageId = "test";

  include("incl/header.php");
?>

<div id="content"> 
  <?php include("incl/test/aside.php"); ?>
  <article class="left">
    <?php include("$path/$file"); ?>
    <?php include("incl/byline.php"); ?>
  </article>
</div> <!-- end content -->

<?php include("incl/footer.php"); ?>
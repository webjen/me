  <div id="footer">

    <footer id="bottom">

      <p>Verktyg:
        <a href="http://validator.w3.org/check/referer">HTML5</a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3">CSS3</a>
        <a href="http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance">Unicorn</a>
        <a href="http://validator.w3.org/i18n-checker/check?uri=<?php echo getCurrentUrl(); ?>">i18n</a>
        <a href="http://validator.w3.org/checklink?uri=<?php echo getCurrentUrl(); ?>">Links</a>
        <a href="viewsource.php">Källkod</a>
      </p>
      <p>Manualer:
        <a href="http://www.w3.org/2009/cheatsheet/">Cheatsheet</a>
        <a href="http://dev.w3.org/html5/spec/spec.html">HTML5</a>
        <a href="http://www.w3.org/TR/CSS2/">CSS2</a>
        <a href="http://www.w3.org/Style/CSS/current-work#CSS3">CSS3</a>
        <a href="http://php.net/manual/en/index.php">PHP</a>
        <a href="http://www.sqlite.org/">SQLite</a>
        <a href="http://php.net/manual/en/book.sqlite.php">SQLite on php.net</a>
      </p>
       <p>Guider:
        <a href="http://dbwebb.se/htmlphp/me/kmom02/guide.php?id=html20">HTML-20</a>
        <a href="http://dbwebb.se/htmlphp/me/kmom02/guide.php?id=css20">CSS-20</a>
        <a href="http://dbwebb.se/htmlphp/me/kmom03/guide.php?id=php20">PHP-20</a>
        <a href="http://dbwebb.se/htmlphp/me/kmom06/guide.php?id=sqlite20">SQLite-20</a>
      </p>
      <?php if(isset($pageTimeGeneration)) : ?>
        <p>Page generated in <?php echo round(microtime(true)-$pageTimeGeneration, 5); ?> seconds</p>
      <?php endif; ?>
    </footer>
  </div>
</body>
</html>

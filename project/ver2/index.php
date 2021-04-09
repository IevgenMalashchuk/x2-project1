<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <?php
      if ($_GET['meta'] === 'credits') {
        print('<meta authors="2021, Spring, eKids Web Designers & Web Programers Team">');
      } 
    ?>

    <title>x2 - go to Mars from Ukraine</title>

    <link rel="shortcut icon" href="favicon.ico" />

    <script language="javascript">
      function showElement(id, color) {
        var element = document.getElementById(id);
        element.style.display = 'block';
        element.style.color = color;
      }
    </script>
  </head>

  <body>
    <h1>About this file</h1>
    <p id="p0">
      <a href="#" onClick="javascript: showElement('p1', 'green');">v0</a>
      |
      <a href="#" onClick="javascript: showElement('p2', 'red');">v1</a></p>
    <p id="p1" style="display: none">First Project <a href="http://x2.if.ua/project/ver0/index.html">v0</a>.</p>
    <p id="p2" style="display: none">First Project <a href="http://x2.if.ua/project/ver1/index.html">v1</a>.</p>
    <p style="color: silver">Now is &laquo;<?php print date("Y-m-d H:i:s"); ?>&raquo;.</p>
  </body>

</html>
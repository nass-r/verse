<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
  <?php
$file = file_get_contents('http://labs.bible.org/api/?passage=votd');
echo $file;
  ?> 
 </body>
</html>

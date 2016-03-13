<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
  <?php
$file = file_get_contents('https://www.biblegateway.com/usage/votd/rss/votd.rdf?$version_id');
echo $file;
  ?> 
 </body>
</html>

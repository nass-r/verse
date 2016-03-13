<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
  <?php
  include('rssclass.php');
  $feedlist = new rss('https://www.biblegateway.com/usage/votd/rss/votd.rdf?$version_id');
  echo $feedlist->display(9,"9lessons");
  ?> 
 </body>
</html>

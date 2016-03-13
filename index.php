<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php
$url = "http://www.biblegateway.com/usage/votd/rss/votd.rdf?$version_id";
$response = file_get_contents($url);
echo $response;
	}
?>
 </body>
</html>

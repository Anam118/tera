<html>
<body>
<h1>My Web</h1>
<h3>The Dream</h3>
<br>
<?php
  $cloudfront_url = `head -n1 origin.txt`;
  $img_path = "https://".$cloudfront_url."/dream.jpg";
  echo "<br>";
  echo "<img src='{$img_path}' width=100 height=100>";
?>
</body>
</html>

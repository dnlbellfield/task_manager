<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
// Create a new image instance
$im = imagecreatetruecolor(100, 100);

// Make the background white
imagefilledrectangle($im, 0, 0, 99, 99, 0xFFFFFF);

// Draw a text string on the image, from a name parameter in the $_POST
imagestring($im, 3, 40, 20, $_POST['name'], 0xFFBA00);

// Output the image to browser
header('Content-Type: image/gif');

imagegif($im);
imagedestroy($im);
?>
</body></html>
<?php
require 'stampery.php';

$stampery = new Stampery;

$target_dir = "tmp/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$hash = hash_file('sha256', $target_file);

$is_original = $stampery->isHashInBlockchain($hash);

echo <<<HTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Documentos de la empresa CYSAE</title>
        <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
    
    <center>
HTML;

if ($is_original) {
  echo '<h1 color="green"> El documento es ORIGINAL </h1>';
  echo '<h3>Log:</h3>';
  echo '<pre>' . $is_original . '</pre>';
  echo '<br/><br/>';
} else {
  echo '<h1 color="red"> El documento es FALSO </h1>';
}

echo <<<HTML

<button color="white"><a href="comprobar_documento.php" color="white"> Continuar </a></button>
</body>
</html>

HTML;



?>
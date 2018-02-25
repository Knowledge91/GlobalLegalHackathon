<?php
require 'stampery.php';

$stampery = new Stampery;

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
$hash = hash_file('sha256', $target_file);
$basename = basename( $_FILES["fileToUpload"]["name"]);
$stampery->uploadHashToBlockchain($hash);

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
        
        	<br>
            
            
            <table width="80%"><tr><td>
            
            <img src="../Cysae6.png" width="200">
            </td><td align="right">
          	</td></tr></table>  
    		
    		<br>
    			
    <a href="login.php"><font color="#e60000" size="4">Tu sociedad</font></a> | <a href="documentos.php"><font color="#e60000" size="4">Documentos</font></a> | <a href="convocar.php"><font color="#e60000" size="4">Convocar junta</font></a> | <a href="realizar-comunicacion.php"><font color="#e60000" size="4">Realizar comunicación</font></a>
    			
    		</br>
    		</br>
    		
    		<img src="https://www.iconexperience.com/_img/g_collection_png/standard/256x256/ok.png" width="150">
    		
  <h1>El fichero "$basename" ha sido subido a Blockchain<h1>	        
 
      <table>
      <tr><td>
      
      <h2>Tus datos</h2>
      <p><font size="3">Tu fichero: <a href="uploads/$basename">Link a tu fichero $basename</a></p>
      <p><font size="3">Tu Hash:  $hash  </p>
      
    	</td>
    	</tr>
      </table>
      
  <br><br>    
  <button color="white"><a href="documentos.php" color="white"> Continuar </a></button>
  
</body>
</html>
HTML;
} else {
  echo "Sorry, there was an error uploading your file.";
}
?>


			
    
    
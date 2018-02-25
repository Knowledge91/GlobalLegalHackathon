<?php
session_start();

$userinfo = array(
                'tono'=>'tono',
                'gon'=>'gon',
                'javi'=>'javi',
                'dirk'=>'dirk',
                'cesar'=>'cesar'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }else {
        //Invalid Login
    }
}
?>
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
    
			
    
    
        <?php if($_SESSION['username']): ?>
        
        	<br>
            
            
            <table width="80%"><tr><td>
            
            <img src="../Cysae6.png" width="200">
            </td><td align="right">
        	<p>You are logged in as <?=$_SESSION['username']?></p>
            <p><a href="?logout=1">Logout</a></p>
          	</td></tr></table>  
    		
    		<br>
    			
    <a href="login.php"><font color="#e60000" size="4">Tu sociedad</font></a> | <a href="documentos.php"><font color="#e60000" size="4">Documentos</font></a> | <a href="convocar.php"><font color="#e60000" size="4">Convocar junta</font></a> | <a href="realizar-comunicacion.php"><font color="#e60000" size="4">Realizar comunicación</font></a>
    			
    		</br>
    		</br>
    		
    		
    		
    		
    		    		
    		<table width="80%"><tr><td>	
    		<h1>Documentos</h1>
    		
    		<h2>Histórico</h2>
    		<table><tr>
  			 <?php
$file_array = scandir("uploads");
foreach($file_array as $id => $file_name) {
  if ($id > 1) {
    echo <<<FILE
<td><a href="uploads/$file_name" target="_blank"><img src="pdf.png" width="30%">
<p>$file_name</p></a>
</td>
FILE;
  }
  }
    ?>
    		</tr>
    		<tr><td colspan="8">
    		<hr>
    		</td></tr>
    		
    		<tr valign="top">
    	
    		
    		<td>

    		 <form action="upload.php" method="post" enctype="multipart/form-data">


    Selecione fichero para subir a blockchain:
    <input type="file" name="fileToUpload" id="fileToUpload">

</td><td>

    <input type="submit" value="Upload to Blockchain" name="submit">
    </form> 

    </td>
    </tr>
    		<tr><td colspan="8">
    		<hr>
    		<button><a href="comprobar_documento.php"><font color="#ffffff" size="4">Comprobar Documento con Blockchain</font></a></button>
    		</td></tr>
    		</table>
    		
    		<br>
    		<hr>
    		<br>
    		
    		<h2>Estatutos</h2>
    		<table><tr>
    		<td>
    		<img src="pdf.png" width="30%">
    		<p>Estatutos</p>
    		</td>
    		
    		</tr></table>
			<h2>Escritura de constitución</h2>
    		<table><tr>
    		<td>
    		<img src="pdf.png" width="30%">
    		<p>Nombre de este fichero</p>
    		</td>
    		<td>
    		<img src="pdf.png" width="30%">
    		<p>Nombre de este fichero</p>
    		</td>
    		<td>
    		<img src="pdf.png" width="30%">
    		<p>Nombre de este fichero</p>
    		</td>
    		</tr></table>


			<h2>Actas</h2>
				<ul>
				<li>Junta General
				<li>Órgano de Administración
				</ul>
			<h2>Contratos</h2>
    		<table><tr>
    		<td>
    		<img src="pdf.png" width="30%">
    		<p>Nombre de este fichero</p>
    		</td>
    		<td>
    		<img src="pdf.png" width="30%">
    		<p>Nombre de este fichero</p>
    		</td>
    		<td>
    		<img src="pdf.png" width="30%">
    		<p>Nombre de este fichero</p>
    		</td>
    		</tr></table>
			
			<h2>Notificaciones y comunicaciones</h2>
    		<table><tr>
    		<td>
    		<img src="pdf.png" width="30%">
    		<p>Nombre de este fichero</p>
    		</td>
    		<td>
    		<img src="pdf.png" width="30%">
    		<p>Nombre de este fichero</p>
    		</td>
    		<td>
    		<img src="pdf.png" width="30%">
    		<p>Nombre de este fichero</p>
    		</td>
    		</tr></table>
			
			
			

    		    		
    		</td></tr>
    		</table>
    		
    		<table><tr><td>
    		
    		
    		
    		</td></tr></table>	
    			
    			    
			<br><br><br>			<br><br><br>			<br><br><br>			<br><br><br>

   
        
        
            
        <?php endif; ?>
    
    
        <form name="login" action="" method="post">
           
           <br><br>
           <!-- <img src="../Cysae6.png" width="200">-->
			<br><br><br>
           
            <p>Username:  <input type="text" name="username" value="" /> </p>
            <p>Password:  <input type="password" name="password" value="" /> </p>
            
            <input type="submit" name="submit" value="Submit" />
        </form>
    
    </center>
    </body>
</html>
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
        <title>Convocar Junta - Cysae - Herramienta de gestión de votos</title>
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
    		<table width="80%"><tr><td>	
    		<h1>Convocar Junta</h1>
    		
    		<h2>Convocar a la Junta General</h2>
			<ul>
			<li><a href="https://cysae.a.docxpresso.com/documents/preview/34?timestamp=1519546489&uniqid=5a927079523a6174414038&APIKEY=fb04fea92f5f489dfd2481a0421e5bac60ee2a85&options=eyJyZXNwb25zZVVSTCI6Imh0dHBzOlwvXC9jeXNhZS5jb21cL2hndlwvY29udm9jYWRvLnBocCIsInRva2VuIjoiYjg3MWEzZDM0NWY1OTM3MDgxOWQ3OWNjNjhhYWU0OTgifQ,,&track=1">Revisar orden del día</a>
			</ul>
			
			<button><a href="https://cysae.a.docxpresso.com/documents/preview/35?timestamp=1519551573&uniqid=5a928455dca3d652431347&APIKEY=46fee18266feb345ad856b0210e356c5e4338ad1&options=eyJyZXNwb25zZVVSTCI6Imh0dHBzOlwvXC9jeXNhZS5jb21cL2hndlwvZG9jdW1lbnRvcy5waHAiLCJ0b2tlbiI6IjkyMjE4Y2E1YzE0NTgyMDc0ZjhiNmFmMWIxMTkzYjczIn0,&track=1"><font color="#ffffff">Iniciar votación</font></a></button>
			
			<h2>Convocar al Órgano de Administración</h2>
			
			<button>Crear orden del día</button>
    		
    		
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
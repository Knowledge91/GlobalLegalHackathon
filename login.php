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
        <title>Bienvenido a CYSAE - Empresa</title>
        <link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
    		<h1>Tu empresa</h1>
    		
    		<p>Razon social: CYSAE SL.</p>
    		<p>Capital Social: 3.000€</p>
			<hr size="1">
    		<h2>Socios</h2>
    		
	    		<table cellpadding="10" width="100%">
	    		<tr>
	    		<td>
	    		<img src="man-user.png">
	    		</td>
	    		<td>
	    		<b>Administrador</b>. Gonzalo Valdecasas.<br> 
	    		gonzalo.gvaldecasas@cysae.com <br>
				<br>
	    			<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="70" 
					aria-valuemin="0" aria-valuemax="100" style="width:25%">
    				25%
					</div>
					</div>
					
				- 250 participaciones<br>
				- Fecha de alta: <b>25 de febrero de 2018</b><br>

					
				</td>	    		
	    		<td width="10">
				&nbsp;
				</td>	    		
	    		<td>
	    		<img src="man-user-grey.png">
	    		</td>
	    		<td>
	    		<b>Socio</b>. Javier Pascual.<br> javier.pascual@cysae.com<br>
				
	    			    		<br>
	    		<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:25%">
    25%
  </div>
</div>

	    		- 250 participaciones<br>
				- Fecha de alta: <b>25 de febrero de 2018</b><br>

	    		
				</td>	    		
				<td width="10">
				&nbsp;
				</td>	    		
	    		<td>
	    		<img src="man-user-grey.png">
	    		</td>
	    		<td>
	    		<b>Socio</b>. Antonio Vázquez.<br> tono.vazquez@cysae.com<br>
				
	    			    		<br>
	    		<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:25%">
    25%
  </div>
</div>

	    		- 250 participaciones<br>
				- Fecha de alta: <b>25 de febrero de 2018</b><br>

	    		
				</td>	   	    		
				</tr>

<tr><td colspan="8"><hr></td></tr>

				<tr>
	    		<td>
	    		<img src="man-user-grey.png">
	    		</td>
	    		<td>
	    		<b>Consejero</b>. Dirk Hornung<br> dirkhornung91@gmail.com<br>
				 <br>
	    		
	    		<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:10%">
    10%
  </div>
</div>

  	    		- 100 participaciones<br>
				- Fecha de alta: <b>25 de febrero de 2018</b><br>


				</td>	    		
	    		<td width="10">
				&nbsp;
				</td>	    		
	    		<td>
	    		<img src="man-user-grey.png">
	    		</td>
	    		<td>
	    		<b>Consejero</b>. César Martín.<br> 
	    		cesar.martin@docxpresso.com<br>
				 <br>
	    		<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="70"
  aria-valuemin="0" aria-valuemax="100" style="width:15%">
    15%
  </div>
  </div>
  
  	    		- 150 participaciones<br>
				- Fecha de alta: <b>25 de febrero de 2018</b><br>

  
</div>
				</td>	    		
				</tr>

	    		</table>

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
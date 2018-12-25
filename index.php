<?php

ini_set("display_errors", 1);

try {
	$service=new SoapClient("http://localhost:8080/axis/Calculatrice.jws?wsdl");
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
if(isset($_POST['calculer'])){
	$a = $_POST['nombre1'];
	$b = $_POST['nombre2'];
	$service1=0;
	if($_POST['choix']=='+'){$service1 = $service->add($a,$b);}
	if($_POST['choix']=='-'){$service1 = $service->sub($a,$b);}
	if($_POST['choix']=='*'){$service1 = $service->mul($a,$b);}
	if($_POST['choix']=='/'){$service1 = $service->div($a,$b);}
	
	$result= $service1;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300" />
        <title>Calculatrice</title>
    </head>
  
    <body>
		<div id="container">
			<h1>Calculatrice</h1>
            <div id="calculator">
                <div id="header">
                    <input type="text" id="number" value = "<?php echo (isset($result))?$result:'0';?>" autocomplete="off"  />
                </div>
                <div id="body">
                    <form name="formulaire" method="POST" action="">
						<p>Nombre1 <input name="nombre1" type="text" ></p>
						<p>Nombre2 <input name="nombre2" type="text" ></p>
			 
						<select name="choix">
							<option value="+">+</option>
							<option value="-">-</option>
							<option value="/">/</option>
							<option value="*">*</option>
						</select>
					  
						<input type="submit" value="calculer" name="calculer">
						<input type="reset" value="effacer" onclick="document.getElementById(number).value = 0"><br>		 
					</form>
                </div>
            </div>
        </div>        
	</body>
</html>
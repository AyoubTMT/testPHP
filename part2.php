<?php
ini_set("display_errors", 1);
try {
	$service=new SoapClient("http://localhost:8080/axis/Calculatrice.jws?wsdl");
}
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300" />
        <title>Calculatrice</title>
		<script type="text/javascript">
			function Calculator()
			{
				that 		= this,
				this.field  = "input#number",
				this.button = "#body .buttons",
				this.init   = false,

				this.run = function()
				{
					$(this.button).click(function() {
						var value = $(this).html();

						if (that.init == false)
						{
							$(that.field).val("");
							that.init = true;
						}

						if (value != "=")
							$(that.field).val($(that.field).val() + value);

						//that.dispatcher(value);
					});
				};
			}
        </script>
    </head>
    <body>
        <div id="container">
			<h1>Calculatrice</h1>
            <div id="calculator">
				<form method="GET" action="">
                <div id="header">
                    <input type="text" name="number" id="number" value="0" autocomplete="off" disabled />
                </div>
                <div id="body">
                    <div class="buttons">7</div>
                    <div class="buttons">8</div>
                    <div class="buttons">9</div>
                    <div class="buttons">/</div>
                    <div class="buttons">4</div>
                    <div class="buttons">5</div>
                    <div class="buttons">6</div>
                    <div class="buttons">*</div>
                    <div class="buttons">1</div>
                    <div class="buttons">2</div>
                    <div class="buttons">3</div>
                    <div class="buttons">-</div>
                    <div class="buttons">0</div>
                    <div class="buttons">.</div>
                    <div class="buttons" type="submit" name="valider">=</div>
                    <div class="buttons">+</div>
					<input type="text" name="number"  disabled />
                </div>
				</form>
            </div>
        </div>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var calc = new Calculator();
                calc.run();
            });
        </script>
		<?php
			echo $_GET['number2'];
			echo "Bonjouuuuur";
		?>
	</body>
</html>
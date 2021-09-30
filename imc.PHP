<?php 
	// verifica se as variaveis GETS, existem...
	if(isset($_GET['num1']) && $_GET['num2']):
		// atribuindo valores para uma nova variavel...
		$num1 = $_GET['num1'];
		$num2 = pow($_GET['num2'], 2);

		$calcula = $num1 / $num2; // realizando calculo....

		// verificando e passando mensagem para cada valor verificado...
		if($calcula <= 17):
			echo '<div class="alert alert-warning">Abaixo de 17 - Muito abaixo do pesoo</div>';

		elseif($calcula > 17 && $calcula <= 18.49):
			echo '<div class="alert alert-warning">Entre 17 e 18,49 - Abaixo do peso</div>';

		elseif($calcula >= 18.5 && $calcula <= 24.99):
			echo '<div class="alert alert-success">Entre 18,5 e 24,99 - Peso normal</div>';					
		
		elseif($calcula >= 25 && $calcula <= 29.99):
			echo '<div class="alert alert-danger">Entre 25 e 29,99 - Acima do peso</div>';

		elseif($calcula >= 30 ):
			echo '<div class="alert alert-danger">Entre 30 e 34,99 - Obesidade I</div>';
		endif;

	endif;
?>

<!-- Criando Corpo HTML -->

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Calculadora de IMC - Devani</title>
        

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>

	<!-- Formulario HTML -->
		<h1 class="text-center">Calculadora de IMC -Devani</h1>
		
		<form class="form-horizontal" role="form">
			<div class="container-fluid">
				<div class="row">
					<form class="form-group">
						<div class="col-md-3 col-md-offset-5">	
							<input type="text" name="num1" class="form-control" placeholder="Peso Ex 80" required><br>
							<input type="text" name="num2" class="form-control" placeholder="Altura Ex: 1.80" required><br>
							
							<?php 
								// Number_format = serve apenas para controlar as casas decimais...
								echo'<input type="text" class="form-control" 
								value="'.number_format($calcula, 2, ',', ' ').'" disabled><br>'
							?>

							<button type="submit" class="btn btn-lg btn-primary">Calcular!</button>
						</div>				
					</form>
				</div>
			</div>
		</form>		
	<!-- Fim do Formulario HTML -->

		<!-- Bootstrap jQuery/JS -->
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</body>
</html>

<!-- Fim do Corpo -->
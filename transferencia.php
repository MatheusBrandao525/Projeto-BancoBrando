<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--link da font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--link do estilo css-->
    <link rel="stylesheet" href="assets/css/min.css">
</head>
<body class="alturatelaTed">

	<section class="dispFlex">

    <div class="menulateral centrogrid">
			<div class="logoDash">
				<h1>logo</h1>
			</div>
			<ul class="ulmenu">

                <li class="lista minipad">
					<a href="index.php"><i class="fa fa-home cadicon"></i><span class="span-menu">Home</span></a>
				</li>
                <li class="lista minipad">
					<a href="beneficio.php"><i class="fa fa-handshake-o cadiconD"></i><span class="span-menu">Nossos beneficios</span></a>
				</li>
				<li class="minipad">
					<a href="comentario.php"><i class="fa fa-commenting cadiconD"></i><span class="span-menu">Comentários</span></a>
				</li>
				<li class="lista minipad">
					<a href="servicos.php"><i class="fa fa-scribd cadiconD"></i><span class="span-menu">Nossos serviços</span></a>
				</li>
				<li class="lista minipad">
					<a href="develop.php"><i class="fa fa-connectdevelop cadiconD"></i><span class="span-menu">Desenvolvimento</span></a>
				</li>
				<li class="lista minipad">
					<a href="empresa.php"><i class="fa fa-industry cadiconD"></i><span class="span-menu">Empresas</span></a>
				</li>
				<li class="bordertop">
					<a href="contato.php"><i class="fa fa-envelope cadiconD"></i><span class="span-menu">Contato</span></a>
				</li>
				<li>
					<a href="ajuda.php"><i class="fa fa-question-circle cadiconD"></i><span class="span-menu">Ajuda</span></a>
				</li>
                <div class="centro padtop">
                    <a href="" class="linkbool"><div class="bool centro"><i class="fa fa-facebook-square icon" aria-hidden="true"></i></div></a>
                    <a href="" class="linkbool"><div class="bool centro"><i class="fa fa-linkedin-square icon" aria-hidden="true"></i></div></a>
                    <a href="" class="linkbool"><div class="bool centro"><i class="fa fa-instagram icon" aria-hidden="true"></i></div></a>
                </div>
			</ul>
		</div>

		<div class="paiTed w100">


                <div class="centrogrid ted">
<form action="validacoes/confirmaTed.php" method="post" class="formTed centrogrid">
	<label for="">Informe de que conta sera transferido o valor</label>

	<select id="" name="selecttipconta" required>
		<option name="txtvalues" value="">Selecione</option>
		<option name="txtvalues" value="Conta corrente">Conta corrente</option>	
		<option name="txtvalues" value="Conta poupança">Conta poupança</option>							
	</select>
						
	<label for="">Banco</label>
		<input type="numbers" name="txtbanco" required>

	<label for="">Agência</label>
		<input type="number" name="txtagencia" required>

	<label for="">Informe o valor que deseja transferir</label>
		<input type="number" name="valorTed" required>
	<label for="">Informe o numero da conta de quem rebera a transferencia</label>
		<input type="text" name="numeroconta" required>
	<div class="centro">
		<button type="submit" class="magtop">Transferir</button>
	</div>
</form>
                    <div class="centro">
                        <a href="dashboard.php"><button type="submit" value="" class="magtop">Voltar</button></a>
                    </div>
                </div>
         


	</section>
</body>
</html>








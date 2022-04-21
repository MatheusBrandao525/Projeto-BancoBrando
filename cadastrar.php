<!DOCTYPE html>
<html lang="pt-br">
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
	<title>Cadastro</title>
</head>
<body class="paginicialCad padbottom">
	<div class="container">
		<nav class="menu w20 centrogrid">
				<div class="logoDash">
					<h1>logo</h1>
				</div>	
			<ul class="ulmenu">

                <li class="lista minipad">
					<a href="index.php"><i class="fa fa-home cadicon"></i><span class="span-menu">Home</span></a>
				</li>
                <li class="lista minipad">
					<a href="beneficio.php"><i class="fa fa-handshake-o cadicon"></i><span class="span-menu">Nossos beneficios</span></a>
				</li>
				<li class="minipad">
					<a href="comentario.php"><i class="fa fa-commenting cadicon"></i><span class="span-menu">Comentários</span></a>
				</li>
				<li class="lista minipad">
					<a href="servicos.php"><i class="fa fa-scribd cadicon"></i><span class="span-menu">Nossos serviços</span></a>
				</li>
				<li class="lista minipad">
					<a href="develop.php"><i class="fa fa-connectdevelop cadicon"></i><span class="span-menu">Desenvolvimento</span></a>
				</li>
				<li class="lista minipad">
					<a href="empresa.php"><i class="fa fa-industry cadicon"></i><span class="span-menu">Empresas</span></a>
				</li>
				<li class="bordertop">
					<a href="contato.php"><i class="fa fa-envelope cadicon"></i><span class="span-menu">Contato</span></a>
				</li>
				<li>
					<a href="ajuda.php"><i class="fa fa-question-circle cadicon"></i><span class="span-menu">Ajuda</span></a>
				</li>
                <div class="centro padtop">
                    <a href="" class="linkbool"><div class="bool centro"><i class="fa fa-facebook-square icon" aria-hidden="true"></i></div></a>
                    <a href="" class="linkbool"><div class="bool centro"><i class="fa fa-linkedin-square icon" aria-hidden="true"></i></div></a>
                    <a href="" class="linkbool"><div class="bool centro"><i class="fa fa-instagram icon" aria-hidden="true"></i></div></a>
                </div>
			</ul>
		</nav>
		<div class="home padtop2 magbottom">

            <section class="cadastro w100 centrogrid">
                <div class="inicio w100">
                    <h3 class="titulo">Solicite já sua conta no Banco Brandao!</h3>
					
                </div>
					<div class="formcentro">
						<form action="" method="post" class="centrogrid">

							<label class="padtop" for="">Nome completo</label>
							<input type="text" required>

							<label class="padtop" for="">E-mail</label>
							<input type="email" required>

							<label class="padtop" for="">Criar senha</label>
							<input type="password" required>

							<label class="padtop" for="">Confirmar senha</label>
							<input type="password" required>

							<label class="padtop" for="">Data de nascimento</label>
							<input type="text" required>

							<label class="padtop" for="">Telefone</label>
							<input type="text" required>

							<label class="padtop" for="">Renda mensal</label>
							<input type="number" required>

							<label class="padtop" for="">CEP</label>
							<input type="text" required>
							
							<label class="padtop" for="">Endereço</label>
							<input type="text" required>
						<div class="centro">
							<div class="centrogrid marge selectconta">
								<label class="padtop" for="">C.corrente</label>
								<div class="centro">
									<input class="caixa" type="checkbox">
								</div>
							</div>
							<div class="centrogrid marge selectconta">
								<label class="padtop" for="">C.poupança</label>
								<div class="centro">
									<input class="caixa" type="checkbox">
								</div>
							</div>
						</div>
							<button type="submit" class="solicitarConta magtop2">Solicitar conta</button>

						</form>
					</div>
                <div class="links">
                    <a href="index.php" class="magtop magbottom centro"><Button class="volta">Voltar</Button></a>
                </div>
            </section>

        </div>
	</div>



</body>
</html>
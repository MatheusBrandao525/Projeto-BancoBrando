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
    <title>Banco Brandao</title>
</head>
<body class="paginicial">

<div class="w100 dispFlex">
<div class="menulateral centrogrid">
			<div class="logoDash">
				<h1>logo</h1>
			</div>
			<ul class="ulmenu">

                <li class="lista minipad">
					<a href="index.php"><i class="fa fa-home"></i><span class="span-menu">Home</span></a>
				</li>
                <li class="lista minipad">
					<a href="beneficio.php"><i class="fa fa-bar-chart"></i><span class="span-menu">Nossos beneficios</span></a>
				</li>
				<li class="minipad">
					<a href="comentario.php"><i class="fa fa-commenting"></i><span class="span-menu">Comentários</span></a>
				</li>
				<li class="lista minipad">
					<a href="servicos.php"><i class="fa fa-scribd"></i><span class="span-menu">Nossos serviços</span></a>
				</li>
				<li class="lista minipad">
					<a href="develop.php"><i class="fa fa-connectdevelop"></i><span class="span-menu">Desenvolvimento</span></a>
				</li>
				<li class="lista minipad">
					<a href="empresa.php"><i class="fa fa-industry"></i><span class="span-menu">Empresas</span></a>
				</li>
				<li class="bordertop">
					<a href="contato.php"><i class="fa fa-envelope"></i><span class="span-menu">Contato</span></a>
				</li>
				<li>
					<a href="ajuda.php"><i class="fa fa-question-circle"></i><span class="span-menu">Ajuda</span></a>
				</li>

				<div class="centro redes">
				<a href="" class="linkbool"><div class="bool centro"><i class="fa fa-facebook-square icon" aria-hidden="true"></i></div></a>
                    <a href="" class="linkbool"><div class="bool centro"><i class="fa fa-linkedin-square icon" aria-hidden="true"></i></div></a>
                    <a href="" class="linkbool"><div class="bool centro"><i class="fa fa-instagram icon" aria-hidden="true"></i></div></a>
                </div>
			</ul>
		</div>

		<div class="home centro w80">
            <section class="cadastro cadstyle w100 centrogrid">
            <div class="inicio centro w100">
                <h3 class="titulo">Bem-vindo ao Banco Brandao!</h3>
            </div>
                <form action="validacoes/validaUser.php" method="post" class="formlogin w100 formstyle centrogrid">
                    <label for="">E-mail</label>
                    <input type="email" required>
                    <label for="">Senha</label>
                    <input type="password" required>
                    <button type="submit" class="formlogin entrar">Entrar</button>
                </form>
                <div class="links centrogrid bordertop">
                    <h4 class="padtop">Ainda não tem uma conta?</h4>
                    <a href="cadastrar.php" class="loginConta magtop"><Button class="loginConta">Criar uma conta</Button></a>
                </div>
            </section>
        </div>
</div>


</body>
</html>
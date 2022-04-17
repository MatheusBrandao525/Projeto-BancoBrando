<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--link da font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--link do estilo css-->
	<link rel="stylesheet" href="assets/css/min.css">
	<title>Cadastro</title>
</head>
<body>
	<div class="container">
		<nav class="menu padtop">
			<ul>
				<li class="lista-logo">
					<a href="#"><i class="fa fa-angellist"></i><span class="span-menu">Logo</span></a>
				</li>

                <li class="lista minipad">
					<a href="#"><i class="fa fa-home"></i><span class="span-menu">Home</span></a>
				</li>
                <li class="lista minipad">
					<a href="#"><i class="fa fa-bar-chart"></i><span class="span-menu">Nossos beneficios</span></a>
				</li>
				<li class="minipad">
					<a href="#"><i class="fa fa-commenting"></i><span class="span-menu">Comentários</span></a>
				</li>
				<li class="lista minipad">
					<a href="#"><i class="fa fa-scribd"></i><span class="span-menu">Nossos serviços</span></a>
				</li>
				<li class="lista minipad">
					<a href="#"><i class="fa fa-connectdevelop"></i><span class="span-menu">Desenvolvimento</span></a>
				</li>
				<li class="lista minipad">
					<a href="#"><i class="fa fa-industry"></i><span class="span-menu">Indústria</span></a>
				</li>
				<li class="bordertop">
					<a href="#"><i class="fa fa-envelope"></i><span class="span-menu">Contato</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-question-circle"></i><span class="span-menu">Ajuda</span></a>
				</li>
                <div class="centro padtop">
                    <a href="" class="linkbool"><div class="bool"></div></a>
                    <a href="" class="linkbool"><div class="bool"></div></a>
                    <a href="" class="linkbool"><div class="bool"></div></a>
                </div>
			</ul>
		</nav>
		<div class="home padtop2 padbottom">

            <section class="cadastro w100 centro  centrogrid">
                <div class="inicio w100">
                    <h3 class="titulo">Solicite já, sua conta no Banco Brandao!</h3>
                </div>
                    <form action="" method="post" class="formcadastro centrogrid">
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

                        <button type="submit" class="entrar magtop">Solicitar conta</button>
                    </form>
                <div class="links">
                    <a href="index.php" class="formcadastro magtop centro entrar"><Button class="entrar">Voltar</Button></a>
                </div>
            </section>

        </div>
	</div>



</body>
</html>
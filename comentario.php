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
	<title>Comentários</title>
</head>
<body class="paginicialCad padbottom">
	<div class="container">
		<nav class="menu centrogrid">
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
		<div class="home homeBeneficio padtop2 magbottom">

            <section class="beneficio w100">
                <div class="inicioB divTitulo w100">
                    <h5 class="titulo tituloDash tituloMen">Sua opinião é muito importante, e pode nos ajudar a melhorar cada vez mais 💙</h5>
                </div>
                <form action="validacoes/validaComent.php" method="post" class="formcomentario centrogrid">
                    <label for="">E-mail</label>
                    <input type="email" required>
                    <label for="">Sua opinião</label>
                    <textarea name="message" required></textarea>
                    <button type="submit" class="entrar">Enviar</button>
                </form>


            </section>
        </div>
	</div>



</body>
</html>



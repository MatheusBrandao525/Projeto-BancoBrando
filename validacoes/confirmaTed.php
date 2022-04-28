<?php


    $selectConta = $_POST['selecttipconta'];
    $cod_banco = $_POST['txtbanco'];
    $agencia = $_POST['txtagencia'];
    $valorTed = $_POST['valorTed'];
    $numeroConta = $_POST['numeroconta'];


?>







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
    <link rel="stylesheet" href="../assets/css/min.css">
    <title>Confirmação</title>
</head>
<body class="bodyconfirma">
    <div class="container centro">
        <div class="dadosTed">
            <div class="divConfirma centro saldoConta">
                <h4>Saldo atual: R$ 900,00</h4>
            </div>

            <div class="divConfirma centro saldoDepois">
                <h4>Saldo após a transferência: R$ 500,00</h4>
            </div>

            <div class="divConfirma centro valorTranferido">
                <h4>Valor a ser Transferido: R$ <?php echo $valorTed ?>,00</h4>
            </div>

            <div class="divConfirma centro banco">
                <h4>Codigo do banco: <?php echo $cod_banco ?></h4>
            </div>

            <div class="divConfirma centro agenciaConfirma">
                <h4>Agência: <?php echo $agencia ?></h4>
            </div>

            <div class="divConfirma centro contaConfirma">
                <h4>Conta: <?php echo $numeroConta ?></h4>
            </div>

            <div class="divConfirma centro usuarioConfirma">
                <h4>Beneficiado: Matheus Felipe</h4>
            </div>

            <a href="#" class="centro confirmaTed"><button class="botaoConfimaTed">Confirmar</button></a>

            <div class="centro CancelaTed">
            <a href="../transferencia.php"><button class="botaoCancelaTed">Cancelar</button></a>
            </div>
        </div>

    </div>

</body>
<script>
    $(function(cancelar){
	valorTed = sessionStorage.setItem('banco', '<?=$valorTed?>');
	codigo_banco = sessionStorage.setItem('agencia', '<?=$cod_banco?>');
	agencia = sessionStorage.setItem('valor', '<?=$agencia?>');
	numeroConta = sessionStorage.setItem('conta', '<?=$numeroConta?>');



    window.location='transferencia.php';
});
</script>
</html>
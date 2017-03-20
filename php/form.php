<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Valemobi</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
	</head>
	<body>
        <div id="nav">
			<div class="navbar navbar-inverse navbar-fixed-top" data-spy="affix" data-offset-top="100">
				<div class="container">
				   <a class="navbar-brand" href="../index.html"><img class="img-responsive logo" id="logotipo" src="../img/logotipo.png" alt=""></a>
				</div>
			</div>
		</div>
		<div class="container">
			<div id="page-content-wrapper">
				<div class="page-content inset" data-spy="scroll" data-target="#spy">
					<div class="row">
						<div class="col-md-12 well">
							<legend>MERCADORIA CADASTRADA COM SUCESSO!</legend>
								<table class="table table-condensed">
								<?php
									define("SERVIDOR", "fdb17.awardspace.net");
									define("USUARIO", "2322743_mercadoria");
									define("SENHA", "jho24051990");
									define("BANCODEDADOS", "2322743_mercadoria");
									$conecta = new mysqli(SERVIDOR, USUARIO, SENHA, BANCODEDADOS); // CONECTA
									if ($conecta->connect_error) {
									trigger_error("ERRO NA CONEXÃO: "  . $conecta->connect_error, E_USER_ERROR);
									}
									$codigo = $_POST['codigo'];
									$nome = $_POST['nome'];
									$quantidade = $_POST['quantidade'];
									$preco = $_POST['preco'];
									$negocio = $_POST['TipoDeNegocioForm'];
									$tipo = $_POST['TipoDeMercadoriaForm'];
									
									$query = mysqli_query($conecta, "INSERT INTO `mercadorias`(`codigo`, `tipo`, `nome`,
										`quantidade`, `preco`, `negocio`) VALUES ('$codigo','$tipo','$nome','$quantidade','$preco','$negocio');");
										
									echo"<thead>";
										echo" <tr> ";
											echo"<th>CÓDIGO</th>";
											echo"<th style='text-transform:uppercase;'>$codigo</th>";
										echo"</tr>";
									echo"</thead>";
									echo"<tbody>";
										echo" <tr> ";
											echo"<td>TIPO</td>";
											echo"<td style='text-transform:uppercase;'>$tipo</td>";
										echo"</tr>";
										echo" <tr> ";
											echo"<td>MERCADORIA</td>";
											echo"<td style='text-transform:uppercase;'>$nome</td>";
										echo"</tr>";
										echo" <tr> ";
											echo"<td>QUANTIDADE</td>";
											echo"<td style='text-transform:uppercase;'>$quantidade</td>";
										echo"</tr>";
										echo" <tr> ";
											echo"<td>PREÇO</td>";
											echo"<td style='text-transform:uppercase;'>$preco</td>";
										echo"</tr>";
										echo" <tr> ";
											echo"<td>NEGÓCIO</td>";
											echo"<td style='text-transform:uppercase;'>$negocio</td>";
										echo"</tr>";
									echo"</tbody>";
								?>
							</table>
							<div class="row">
								<div class="col-md-12" id="button">
									<a href="produtos.php" class="btn btn-primary">LISTAR TODOS PRODUTOS</a>
									<a href="../index.html" class="btn btn-danger">VOLTAR</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="footer">
			<div class="container">
            © 2017, Valemobi, Todos os direitos reservados
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	</body>
</html>
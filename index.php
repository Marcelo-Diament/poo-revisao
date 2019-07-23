<?php

// Fazendo a requisição da classe pai ao carregar a página. Usamos require_once pois, uma vez carregado, não é necessário carregar o arquivo novamente (isso pode gerar erro)
// require_once("classes/MinhaClassePai.php");

// Fazendo a requisição da classe filha ao carregar a página. Como estamos declarando a classe filha, e ela utiliza a classe pai, não precisamos mais chamar a classe pai
require_once("classes/MinhaClasseFilha.php");

?>

<!DOCTYPE html>
<html>

<head lang="pt-BR">

	<title>Revisão de POO</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=5, shrink-to-fit=no">
	<meta http-equiv="Cache-control" content="public">
	<meta name="title" content="Revisão POO">
	<meta name="description" content="Revisão de Programação Orientada à Objetos">
	<meta name="revisit-after" content="30 days">
	<meta name="identifier-URL" content="https://djament.com.br/estudos/revisao-poo/index.php">
	<meta name="abstract" content="Revisão POO">
	<meta name="author" content="Marcelo Diament, Djament Comunicação">
	<meta name="robots" content="index,follow">
	<meta name="contact" content="contato@djament.com.br">
	<meta name="reply-to" content="contato@djament.com.br">
	<meta name="copyright" content="Djament">
	<meta name="rating" content="general">
	<meta name="web_author" content="Djament Comunicação">
	<meta name="theme-color" content="#000000">
	<meta property="og:site_name" content="Djament | Revisão POO">
	<meta property="og:title" content="Revisão POO">
	<meta property="og:description" content="Revisão de Programação Orientada à Objetos">
	<meta property="og:url" content="https://djament.com.br/estudos/revisao-poo/index.php">
	<meta property="og:locale" content="pt-BR">
	<meta name="og:locality" content="São Paulo">
	<meta name="og:region" content="SP">
	<meta name="og:country-name" content="BR">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://djament.com.br/img/logo-fardas-guara.png">
	<meta property="og:image:alt" content="Djament | Desenvolvimento de Sites">
	<meta property="og:image:url" content="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png">
	<meta property="og:image:type" content="img/png">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Biblioteca Teste">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="shortcut icon" sizes="60x60" href="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png">
	<link rel="icon" type="image/png" sizes="60x60" href="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png">	
	<link rel="canonical" href="https://djament.com.br/estudos/revisao-poo">
	<meta name="keywords" content="php, poo, orientação à objetos, programação orientada à objetos, desenvolvimento web">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-vlOMx0hKjUCl4WzuhIhSNZSm2yQCaf0mOU1hEDK/iztH3gU4v5NMmJln9273A6Jz" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

	<header class="container">

		<section class="row">

			<article class="col-12">

				<div id="logo3D" class="desktop-only col-12">

					<a id="cube" href="https://br.digitalhouse.com" title="Digital House Brasil" alt="Digital House Brasil" rel="external" target="_blank">
						
						<img src="https://br.digitalhouse.com/wp-content/themes/dh/assets/img/icons/apple-icon-60x60.png" height="60px" width="60px" id="back" alt="Digital House" title="Digital House">
					</a>

				</div>

			</article>

			<article class="col-12">

				<h1>Revisão de POO <a href="https://github.com/Marcelo-Diament/poo-revisao" title="Acesse o repositório para ver os códigos em PHP" rel="noreferrer"><i class="fab fa-github"></i></a></h1>

			</article>

		</section>

	</header>


	<main class="container">

		<section class="row">

			<!-- ### OBJETO DA CLASSE PAI ### -->

				<article class="col-12 col-md-6">

					<h2>Objeto criado a partir da classe Pai</h2>

					<?php
					// ### INSTANCIANDO NOVO OBJETO

						// Instanciando um objeto a partir da MinhaClassePai. Deve retornar os métodos e propriedades criados na função construtora
						$meuNovoObjetoDaClassePai = new MinhaClassePai("Meu Novo Objeto da Classe Pai");

					// ### INSTANCIANDO NOVO OBJETO


					// ### FUNÇÕES PÚBLICAS

						// Chamando a função pública criada na classe Pai (acessível por qualquer objeto)
						$meuNovoObjetoDaClassePai->funcaoPublicaClassePai();

						// Chamando a função pública criada na classe Filha (acessível por qualquer objeto)
						$meuNovoObjetoDaClassePai->exibirFuncaoPublicaFilhaPorPai();

					// ### FUNÇÕES PÚBLICAS


					// ### FUNÇÕES PROTEGIDAS

						// Chamando uma função pública criada na classe Pai que executa a função protegida (também criada na classe Pai). A única maneira de acessarmos uma função protegida é chamando ela dentro da classe em que foi criada, numa classe 'filha' ou numa classe 'pai'. É útil para, por exemplo, tratar dados sensíveis ou realizar operações que não devem ser manipuladas por terceiros (mas que podem ser acesadas por classes relacionadas)
						$meuNovoObjetoDaClassePai->exibirFuncaoProtegidaPai();

						// Chamando uma função pública criada na classe Pai que executa a função protegida (criada na classe Filha). A única maneira de acessarmos uma função protegida é chamando ela dentro da classe em que foi criada, numa classe 'filha' ou numa classe 'pai'. É útil para, por exemplo, tratar dados sensíveis ou realizar operações que não devem ser manipuladas por terceiros (mas que podem ser acesadas por classes relacionadas)
						$meuNovoObjetoDaClassePai->exibirFuncaoProtegidaFilhaPorPai();

					// ### FUNÇÕES PROTEGIDAS

					
					// ### FUNÇÕES PRIVADAS

						// Chamando uma função pública criada na classe Pai que executa a função privada (também criada na classe Pai). A única maneira de acessarmos uma função privada é chamando ela dentro da classe em que foi criada. É útil para, por exemplo, tratar dados sensíveis ou realizar operações que não devem ser manipuladas por terceiros (nem por outras classes)
						$meuNovoObjetoDaClassePai->exibirFuncaoPrivadaPai();

						?>

						<!-- Não conseguimos chamar uma função privada declarada em outra classe -->
						<article class='card htmlPuro'>
							<h4>Função Privada criada na Classe Filha</h4>
							<br/>
							<p style="line-height: 1.85em;">Como a função <b>privada</b> <code>funcaoPrivadaClasseFilha()</code> foi declarada na classe <b>MinhaClasseFilha</b>, ela não é acessível pela classe Pai.</p>
							<br/>
							<br/>
							<p>Assim como a função <b>privada</b> <code>funcaoPrivadaClassePai()</code>, que só pode ser acessada pela classe <b>MinhaClassePai</b>.</p>
							<br/>
							<br/>
							<br/>
							<br/>
						</article>

					<!-- ### FUNÇÕES PRIVADAS -->

				</article>


			<!-- ### OBJETO DA CLASSE PAI ### -->



			<!-- ### OBJETO DA CLASSE FILHA ### -->

				<article class="col-12 col-md-6">

					<h2>Objeto criado a partir da classe Filha</h2>
						
						<?php

						// ### INSTANCIANDO NOVO OBJETO

							// Instanciando um objeto a partir da MinhaClassePai. Deve retornar os métodos e propriedades criados na função construtora
							$meuNovoObjetoDaClasseFilha = new MinhaClasseFilha("Meu Novo Objeto da Classe Filha");

						// ### INSTANCIANDO NOVO OBJETO


						// ### FUNÇÕES PÚBLICAS

							// Chamando a função pública criada na classe Pai (acessível por qualquer objeto)
							$meuNovoObjetoDaClasseFilha->funcaoPublicaClassePai();

							// Chamando a função pública criada na classe Filha  (acessível por qualquer objeto)
							$meuNovoObjetoDaClasseFilha->funcaoPublicaClasseFilha();

						// ### FUNÇÕES PÚBLICAS


						// ### FUNÇÕES PROTEGIDAS
		
							// Chamando uma função pública criada na classe Pai que executa a função protegida (também criada na classe Pai). A única maneira de acessarmos uma função protegida é chamando ela dentro da classe em que foi criada, numa classe 'filha' ou numa classe 'pai'. É útil para, por exemplo, tratar dados sensíveis ou realizar operações que não devem ser manipuladas por terceiros (mas que podem ser acesadas por classes relacionadas)
							$meuNovoObjetoDaClasseFilha->exibirFuncaoProtegidaPai();

							// Chamando uma função pública criada na classe Filha que executa a função protegida (também criada na classe Filha). A única maneira de acessarmos uma função protegida é chamando ela dentro da classe em que foi criada, numa classe 'filha' ou numa classe 'pai'. É útil para, por exemplo, tratar dados sensíveis ou realizar operações que não devem ser manipuladas por terceiros (mas que podem ser acesadas por classes relacionadas)
							$meuNovoObjetoDaClasseFilha->exibirFuncaoProtegidaFilha();

						// ### FUNÇÕES PROTEGIDAS

						?>


						<!-- ### FUNÇÕES PRIVADAS -->

						<!-- Não conseguimos chamar uma função privada declarada em outra classe -->
						<article class='card htmlPuro'>
							<h4>Função Privada criada na Classe Pai</h4>
							<br/>
							<p style="line-height: 1.85em;">Como a função <b>privada</b> <code>funcaoPrivadaClassePai()</code> foi declarada na classe <b>MinhaClassePai</b>, ela não é acessível pela classe Filha.</p>
							<br/>
							<br/>
							<p>Assim como a função <b>privada</b> <code>funcaoPrivadaClasseFilha()</code>, que só pode ser acessada pela classe <b>MinhaClasseFilha</b>.</p>
							<br/>
							<br/>
							<br/>
							<br/>
						</article>
						<?php

						// Chamando uma função pública criada na classe Filha que executa a função privada (também criada na classe Filha). A única maneira de acessarmos uma função privada é chamando ela dentro da classe em que foi criada. É útil para, por exemplo, tratar dados sensíveis ou realizar operações que não devem ser manipuladas por terceiros (nem por outras classes)
						$meuNovoObjetoDaClasseFilha->exibirFuncaoPrivadaFilha();

						?>

				</article>

			<!-- ### OBJETO DA CLASSE FILHA ### -->



		</section>

	</main>


	<footer></footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$('article').after('<hr/>')
	</script>

</body>

</html>
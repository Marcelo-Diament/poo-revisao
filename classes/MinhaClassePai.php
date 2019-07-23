<?php

// Essa é minha classe pai, contém métodos (ações/funções) e propriedades (características/atributos) que serão herdados por suas classes filhas

// Criando a classe pai
class MinhaClassePai {

	// Criando a propriedade $titulo
	public $titulo;

	// Criando o método exibirTitulo()
	public function exibirTitulo() {

		// Exibindo o título com a keyword seguida por uma single arrow ($this->), referindo-se à propriedade de cada objeto instanciado (criado)
		echo $this->titulo;

	}



	// ### FUNÇÃO CONSTRUTORA ###

	// Criando um método 'mágico' construtor, que é chamado automaticamente sempre que um novo objeto for instanciado. No caso recebe $titulo como parâmetro, que deverá ser declarado ao instanciarmos o objeto. Atenção: cada classe só pode conter um método construtor, ok? Então toda a lógica dessa classe (que seja executada automaticamente ao instanciarmos um objeto) deve estar contida aqui dentro.
	public function __construct($titulo) {

		// Declarando que a propriedade $titulo será atrelada à variável $titulo
		$this->titulo = $titulo;

		// Como esse echo está dentro do método construtor, assim que instanciarmos um objeto, será executado esse echo. Perceba que estamos carregando a propriedade $título (que será recebida como parâmetro no método construtor, ou seja, será declarada ao instanciarmos um novo objeto). Outra informação importante - perceba que usamos __CLASS__ para retornar o nome da classe à qual o objeto instanciado pertence.
		echo "<article class='card'><h4>Construct criado na Classe Pai</h4><code>public function __construct(\$titulo) &#8628;</code><p>Essa é uma mensagem criada dentro do <b>método construtor</b>, dentro da <b>".__CLASS__."</b>.<br/>Foi chamada automaticamente quando você instanciou um novo objeto dessa classe ou de uma classe que a extende.<br/>Ao instanciar o objeto, você passou um parâmetro (\$titulo), cujo valor definido por você é <b>\"".$titulo."\"</b>.</p></article>";

	}

	// ### FUNÇÃO CONSTRUTORA ###



	// ### FUNÇÃO PÚBLICA ###

		// Criando uma função pública dentro da Classe Pai (acessível por quaisquer objetos)
		public function funcaoPublicaClassePai(){

			// Exibindo (e criando) o texto criado pela da função
			echo "<article class='card'><h4>Função Pública criada na Classe Pai</h4><code>public function funcaoPublicaClassePai() &#8628;</code><p>Essa é uma função <b>pública</b> criada a partir da class <b>".__CLASS__."</b>. Pode ser chamada por quaisquer objetos Quando a chamamos de uma classe filha ou da própria classe, usamos simplesmente:<br/><code>nomeDoObjeto->funcaoDesejada()</code><br/>Se quisermos chamar de um objeto de outra classe (que não a própria classe nem a classe herdeira), usamos:<br/><code>NomeDaClasseDaFuncao::funcaoDesejada()</code>.</p></article>";

		}

	// ### FUNÇÃO PÚBLICA ###



	// ### FUNÇÃO PÚBLICA DE OUTRAS CLASSES ###

		// Criando uma função pública dentro da Classe Pai para chamar uma função pública criada na classe Filha (ou em outras classes)
		public function exibirFuncaoPublicaFilhaPorPai(){

			// Declaramos o nome da classe e, após o ::, o nome da função desejada
			MinhaClasseFilha::funcaoPublicaClasseFilha();

		}

	// ### FUNÇÃO PÚBLICA DE OUTRAS CLASSES ###



	// ### FUNÇÃO PROTEGIDA ###

		// Criando uma função protegida dentro da Classe Pai. Ela pode ser acessada por classes 'filhas', pela própria classe ou por classes 'pai'
		protected function funcaoProtegidaClassePai(){

			// Exibindo (e criando) o texto criado pela da função
			echo "<article class='card protegida'><code>protected function funcaoProtegidaClassePai() &#8628;</code><p>Essa é uma função <b>protegida</b> declarada na classe <b>MinhaClassePai</b>.</p></article>";

		}

		// Criando uma nova função para chamarmos a função protegida
			public function exibirFuncaoProtegidaPai(){

				// Exibindo (e criando) o texto criado pela da função
				echo "<article class='card'><h4>Função Protegida criada na Classe Pai</h4><code>public function exibirFuncaoProtegidaPai() &#8628;</code><p>Essa é uma função <b>pública</b> (declarada na classe <b>MinhaClassePai</b>) que acessa a função <b>protegida</b> criada na mesma classe.</p><div style='margin-left:15px;'>";

				// Executando nossa função privada (somente aqui, dentro da classe, é que conseguimos chamar ela)
				$this->funcaoProtegidaClassePai();

				// Exibindo (e criando) o texto criado pela da função
				echo "</div><p>Podemos chamar a função <b>protegida</b> por um objeto instanciado a partir da própria classe ou de classes filhas e pais. No caso de objetos instanciados na classe pai da classe da função, declaramos: <code>NomeDaClasseDaFuncao::funcaoDesejada();</code></p></article>";

			}

	// ### FUNÇÃO PROTEGIDA ###



	// ### FUNÇÃO PROTEGIDA DA CLASSE FILHA ###

		// Criando uma nova função para chamarmos a função protegida
		public function exibirFuncaoProtegidaFilhaPorPai(){

			// Exibindo (e criando) o texto criado pela da função
			echo "<article class='card'><h4>Função Protegida criada na Classe Filha</h4><code>public function exibirFuncaoProtegidaFilhaPorPai() &#8628;</code><p>Essa é uma função <b>pública</b> (declarada na classe <b>MinhaClassePai</b>) que acessa a função <b>protegida</b> criada na classe <b>MinhaClassFilha</b>.</p><div style='margin-left:15px;'>";

			// Executando nossa função privada (somente aqui, dentro da classe, é que conseguimos chamar ela)
			MinhaClasseFilha::funcaoProtegidaClasseFilha();

			// Exibindo (e criando) o texto criado pela da função
				echo "</div><p>Podemos chamar a função <b>protegida</b> por um objeto instanciado a partir da própria classe ou de classes filhas e pais. No caso de objetos instanciados na classe pai da classe da função, declaramos: <code>NomeDaClasseDaFuncao::funcaoDesejada();</code></p></article>";

		}

	// ### FUNÇÃO PROTEGIDA DA CLASSE FILHA ###



	// ### FUNÇÃO PRIVADA ###

		// Criando uma função privada dentro da classe Pai. Ela só pode ser chamada dentro da própria classe (mesmo se chamarmos essa função no nosso programa com o objeto instanciado a partir dessa classe, a função não funcionará)
		private function funcaoPrivadaClassePai(){

			// Exibindo (e criando) o texto criado pela da função
			echo "<article class='card privada'><code>private function funcaoPrivadaClassePai() &#8628;</code><p>Essa é uma função <b>privada</b> declarada na classe <b>".__CLASS__."</b>.</p></article>";

		}

		// Criando uma nova função para chamarmos a função privada
		public function exibirFuncaoPrivadaPai(){

			// Exibindo (e criando) o texto criado pela da função
			echo "<article class='card'><h4>Função Privada criada na Classe Pai</h4><code>public function exibirFuncaoPrivadaPai() &#8628;</code><p>Essa é uma função <b>pública</b> (declarada na classe <b>".__CLASS__."</b>) que acessa a função <b>privada</b> criada na mesma classe.</p><div style='margin-left:15px;'>";

			// Executando nossa função privada (somente aqui, dentro da própria classe, é que conseguimos chamar ela)
			$this->funcaoPrivadaClassePai();

			// Exibindo (e criando) o texto criado pela da função
			echo "</div><p>Perceba que não podemos chamar a função <b>privada</b> por um objeto instanciado a partir de outras classes.</p></article>";

		}

	// ### FUNÇÃO PRIVADA ###



	// ### FUNÇÃO DESTRUTORA ###

		// Assim como temos o método mágico construtor, temos o método mágico destrutor - que basicamente destrói o objeto depois que executar o restante do código. Também podemos destruir um objeto de forma explícita, usando a função unset() com o nome do objeto como parâmetro, exemplo: unset($meuObjetoCriado);.
		public function __destruct() {
			
			// Exibindo (e criando) o texto criado pela da função
			echo "<div class='container'><section class='row'><article class='card col-12 destruct'><code>public function __destruct() &#8628;</code><p>O objeto <b>\"$this->titulo\"</b> foi destruído através do <b>método destrutor</b> declarado na classe <b>".__CLASS__."</b>. Isso depois de finalizar seu <b>ciclo de vida</b>, ou seja, depois de executar todas os métodos declarados na classe e suas filhas.</p></article></section></div>";
			
		}

	// ### FUNÇÃO DESTRUTORA ###	


}

?>
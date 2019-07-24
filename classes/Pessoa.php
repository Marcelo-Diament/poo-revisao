<?php

	// Essa classe foi construída com o intuito de demonstrar o uso das funções do tipo get() e set() com propriedades públicas, protegidas e privadas. No caso, é a classe Pessoa
	class Pessoa {

		// Definindo a propriedade pública $nome
		public $nome;

		// Definindo a propriedade protegida $idade
		protected $idade;

		// Definindo a propriedade privada $nacionalidade
		private $nacionalidade;

		// Declarando nossa função construtora, que, ao ter um novo objeto instanciado, executará automaticamente as seguintes ações (considerando os parâmetros recebidos)
		public function __construct($nome, $idade, $nacionalidade) {

			// Setando a função setNome com o parâmetro recebido ($nome)
			$this->setNome($nome);

			// Setando a função setIdade com o parâmetro recebido ($idade)
			$this->setIdade($idade);

			// Setando a função setNacionalidade com o parâmetro recebido ($nacionalidade)
			$this->setNacionalidade($nacionalidade);

		}

		// Configurando a função setNome(), que recebe $nome como parâmetro
		public function setNome($nome){

			// Atrelando o parâmetro à propriedade do objeto
			$this->nome = $nome;

		}

		// Configurando a função getNome(), que retorna $nome como valor
		public function getNome(){

			// Retornando a propriedade quando a função for chamada
			return $this->nome;
		}

		// Configurando a função setIdade(), que recebe $idade como parâmetro
		public function setIdade($idade){

			// Atrelando o parâmetro à propriedade do objeto
			$this->idade = $idade;
		
		}

		// Configurando a função getIdade(), que retorna $idade como valor
		public function getNacionalidade(){

			// Retornando a propriedade quando a função for chamada
			return $this->nacionalidade;
		
		}

		// Configurando a função setNacionalidade(), que recebe $nacionalidade como parâmetro
		public function setNacionalidade($nacionalidade){

			// Atrelando o parâmetro à propriedade do objeto
			$this->nacionalidade = $nacionalidade;

		}

		// Configurando a função getNacionalidade(), que retorna $nacionalidade como valor
		public function getIdade(){

			// Retornando a propriedade quando a função for chamada
			return $this->idade;

		}

		public function exibirInfo(){
			$informacoes = $this->getNome()." tem ".$this->getIdade()." anos e é ".$this->getNacionalidade();
			echo "<article class='card'><h4>Objeto da classe Pessoa</h4><code>public function __construct(\$nome, \$idade, \$nacionalidade) {<br><span style='margin-left: 15px;'>\$this->setNome(\$nome);</span><br><span style='margin-left: 15px;'>\$this->setIdade(\$idade);</span><br><span style='margin-left: 15px;'>\$this->setNacionalidade(\$nacionalidade);</span><br>}<br><br>public function setNome(\$nome){<br><span style='margin-left: 15px;'>\$this->nome = \$nome;</span><br>}<br><br>public function setIdade(\$idade){<br><span style='margin-left: 15px;'>\$this->idade = \$idade;</span><br>}<br><br>public function setNacionalidade(\$nacionalidade){<br><span style='margin-left: 15px;'>\$this->nacionalidade = \$nacionalidade;</span><br>}<br><br>public function getNome(){<br><span style='margin-left: 15px;'>return \$this->nome;</span><br>}<br><br>public function getNacionalidade(){<br><span style='margin-left: 15px;'>return \$this->nacionalidade;</span><br>}<br><br>public function getIdade(){<br><span style='margin-left: 15px;'>return \$this->idade;</span><br>}<br><br>public function exibirInfo(){<br><span style='margin-left: 15px;'>\$informacoes = \$this->getNome().\" tem \".\$this->getIdade().\" anos e é \".\$this->getNacionalidade();</span><br><span style='margin-left: 15px;'>echo \$informacoes;</span><br>}</code><br><p>Essa é uma mensagem criada dentro da classe <b>".__CLASS__."</b> - mas o objeto foi criado na página index.php, onde instanciamos o novo objeto.</p><code>\$novaPessoa = new Pessoa(\"Marcelo\", 31, \"brasileiro\");<br>\$novaPessoa->exibirInfo();  &#8628;</code><br><q><b>$informacoes</b></q><br/><p>Foi chamada com o uso das funções do 'tipo' <b>get</b> e <b>set</b> para cada parâmetro. Além de uma boa prática, isso deixa nossas propriedades mais protegidas.</p><p>Repare que temos 3 parâmetros da função (que se tornam propriedades/atributos do nosso novo objeto). Cada um deles possui um tipo distinto de visibilidade (<b>public</b>, <b>protected</b> e <b>private</b>).</article>";
			
		}

	}

?>
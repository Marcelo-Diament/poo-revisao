<?php

// Essa é minha classe filha, contém métodos (ações/funções) e propriedades (características/atributos) próprios e métodos e propriedades herdados por suas classes filhas

// Como ela é uma extensão da MinhaClassePai, precisamos chamar o arquivo da MinhaClassePai
require_once("MinhaClassePai.php");

// Criando a classe filha e declarando que é uma extensão da MinhaClassePai
class MinhaClasseFilha extends MinhaClassePai {



	// ### FUNÇÃO PÚBLICA ###

	// Criando uma função dentro da Classe Filha (acessível por quaisquer objetos)
	public static function funcaoPublicaClasseFilha(){
		
		// Exibindo (e criando) o texto criado pela da função
		echo "<article class='card'><h4>Função Pública criada na Classe Filha</h4><code>public function static funcaoPublicaClasseFilha() &#8628;</code><p>Essa é uma função <b>pública</b> criada a partir da class <b>".__CLASS__."</b>. Pode ser chamada por quaisquer objetos Quando a chamamos de uma classe filha ou da própria classe, usamos simplesmente:<br/><code>nomeDoObjeto->funcaoDesejada()</code><br/>Se quisermos chamar de um objeto de outra classe (que não a própria classe nem a classe herdeira), usamos:<br/><code>NomeDaClasseDaFuncao::funcaoDesejada()</code>.</p></article>";

	}

	// ### FUNÇÃO PÚBLICA ###



	// ### FUNÇÃO PROTEGIDA ###

		// Criando uma função protegida dentro da Classe Filha. Ela pode ser acessada por classes 'filhas', pela própria classe ou por classes 'pai'
		protected static function funcaoProtegidaClasseFilha(){

			// Exibindo (e criando) o texto criado pela da função
			echo "<article class='card protegida'><code>protected static function funcaoProtegidaClasseFilha() &#8628;</code><p>Essa é uma função <b>protegida</b> declarada na classe <b>MinhaClasseFilha</b>.</p></article>";

		}

		// Criando uma nova função pública para chamarmos a função protegida
		public function exibirFuncaoProtegidaFilha(){

			// Exibindo (e criando) o texto criado pela da função
			echo "<article class='card'><h4>Função Protegida criada na Classe Filha</h4><code>public function exibirFuncaoProtegidaFilha() &#8628;</code><p>Essa é uma função <b>pública</b> (declarada na classe <b>MinhaClasseFilha</b>) que acessa a função <b>protegida</b> criada na mesma classe.</p><div style='margin-left:15px;'>";

			// Executando nossa função privada (somente aqui, dentro da classe, é que conseguimos chamar ela)
			$this->funcaoProtegidaClasseFilha();

			// Exibindo (e criando) o texto criado pela da função
				echo "</div><p>Podemos chamar a função <b>protegida</b> por um objeto instanciado a partir da própria classe ou de classes filhas e pais. No caso de objetos instanciados na classe pai da classe da função, declaramos: <code>NomeDaClasseDaFuncao::funcaoDesejada();</code></p></article>";
		
		}

	// ### FUNÇÃO PROTEGIDA ###



	// ### FUNÇÃO PRIVADA ###

		// Criando uma função privada dentro da classe Filha. Ela só pode ser chamada dentro da própria classe (mesmo se chamarmos essa função no nosso programa com o objeto instanciado a partir dessa classe, a função não funcionará)
		private function funcaoPrivadaClasseFilha(){

			// Exibindo (e criando) o texto criado pela da função
			echo "<article class='card privada'><code>private function funcaoPrivadaClasseFilha() &#8628;</code><p>Essa é uma função <b>privada</b> declarada na classe <b>".__CLASS__."</b>.</p></article>";

		}

		// Criando uma nova função para chamarmos a função privada
		public function exibirFuncaoPrivadaFilha(){

			// Exibindo (e criando) o texto criado pela da função
			echo "<article class='card'><h4>Função Privada criada na Classe Filha</h4><code>public function exibirFuncaoPrivadaFilha() &#8628;</code><p>Essa é uma função <b>pública</b> (declarada na classe <b>".__CLASS__."</b>) que acessa a função <b>privada</b> criada na mesma classe.</p><div style='margin-left:15px;'>";

			// Executando nossa função privada (somente aqui, dentro da própria classe, é que conseguimos chamar ela)
			$this->funcaoPrivadaClasseFilha();

			// Exibindo (e criando) o texto criado pela da função
			echo "</div><p>Perceba que não podemos chamar a função <b>privada</b> por um objeto instanciado a partir de outras classes.</p></article>";

		}

	// ### FUNÇÃO PRIVADA ###



}

?>
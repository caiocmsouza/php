<?php


class ContaCorrente{


	public $titular;
	
	public $agencia;
	
	public $numero;
	
	private $saldo;

	public function __construct($titular = null,$agencia = null,$numero = null,  $saldo = null){
		$this->titular = $titular;
		$this->agencia = $agencia;
		$this->numero = $numero;
		$this->saldo = $saldo;
	}

	public function getSaldo(){

		return $this->saldo;

	}

	public function sacar($valor){
		//@todo aqui implementaremos a regra de saque
	}

	public function depositar($valor){
		//@todo aqui implementaremos a regra de depositar
	}

	public function transferir($valor, ContaCorrente $conta){
		//@todo aqui implementaremos a regra de transferir
	}
	









}
?>
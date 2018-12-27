<?php


require_once "Entity/ContaCorrente.php";


$contaCorrenteJoao = new ContaCorrente("João Lucas","5199","16321-2", 500.50);

$contaCorrenteJose = new ContaCorrente("Jose da silva","5199","122221-2", 900.50);

$saldoJoão = $contaCorrenteJoao->getSaldo();

$saldoJose = $contaCorrenteJose->getSaldo();

print_r($saldoJoao);

print_r($saldoJose);







echo "Inicio da conta dos correntistas joao e jose<br />";
echo $contaCorrenteJoao;

echo $contaCorrenteJose;

echo "<br />";


$contaCorrenteJoao->sacar(20.00);
echo $contaCorrenteJoao; 

$contaCorrenteJoao->depositar(20.00);
echo $contaCorrenteJoao; 



$contaCorrenteJoao->transferir(10.00, $contaCorrenteJose);
echo $contaCorrenteJoao; 

echo $contaCorrenteJose; 

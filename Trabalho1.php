<?php
// Declarar e inicializar as variáveis
$SALARIO1 = 1000;
$SALARIO2 = 2000;

// Atribuir o valor de SALARIO1 para SALARIO2
$SALARIO2 = $SALARIO1;

// Incrementar 1 na variável SALARIO2
$SALARIO2++;

// Adicionar 10% de aumento ao SALARIO1
$SALARIO1 += $SALARIO1 * 0.10;

// Produzir a saída com os valores
echo "Valor Salário 1: $SALARIO1 e Valor Salário 2: $SALARIO2<br>";

// Comparar os valores das variáveis e exibir a mensagem correspondente
if ($SALARIO1 > $SALARIO2) {
    echo "O Valor da variável 1 é maior que o valor da variável 2";
} elseif ($SALARIO1 < $SALARIO2) {
    echo "O Valor da variável 1 é menor que o valor da variável 2";
} else {
    echo "Os valores são iguais";
}
?>

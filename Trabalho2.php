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

// Produzir a saída inicial com os valores
echo "Valor inicial - Salário 1: $SALARIO1 e Salário 2: $SALARIO2<br>";

// Laço de repetição para ser executado 100 vezes
for ($i = 1; $i <= 100; $i++) {
    // Incrementar 1 na variável SALARIO1
    $SALARIO1++;
    
    // Condição para parar na 50ª iteração
    if ($i == 50) {
        echo "Parando a execução na iteração $i<br>";
        break;
    }
}

// Verificar se SALARIO1 é menor do que SALARIO2
if ($SALARIO1 < $SALARIO2) {
    echo "Valor final de Salário 1: $SALARIO1 (menor que Salário 2)";
} else {
    echo "Valor final de Salário 1: $SALARIO1";
}
?>
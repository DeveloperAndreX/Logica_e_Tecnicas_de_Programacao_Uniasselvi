<?php

try {
    $nota = 11; // Digite a nota aqui para testar (ex: -5, 8, 12)

    // Validação básica: nota não pode ser menor que 0 ou maior que 10
    if ($n1 < 0 || $n2 > 10) {
        throw new Exception("A nota digitada ($nota) é inválida! Use apenas números de 0 a 10.");
    }

    // Se a nota for válida, o código continua normalmente
    if ($nota >= 6) {
        echo "Nota: $nota. O aluno foi Aprovado!";
    } else {
        echo "Nota: $nota. O aluno foi Reprovado.";
    }

} 
catch (Exception $e) {
    // Se a nota for inválida, o PHP pula direto para cá e exibe o erro
    echo "Aviso do Sistema: " . $e->getMessage();
}



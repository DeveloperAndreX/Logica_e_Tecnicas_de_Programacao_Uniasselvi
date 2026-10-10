<?php

// --- VARIÁVEIS DE ENTRADA (Altere estes valores para testar) ---
$nomeEstudante = "Mariana Costa";

// Notas de 0 a 10
$nota1 = 8.5;
$nota2 = 7.0;
$nota3 = 6.0;

// Frequência em porcentagem (de 0 a 100)
$frequencia = 82; 

// --- PROCESSAMENTO (Cálculos) ---

// Calcula a média aritmética das três notas
$mediaFinal = ($nota1 + $nota2 + $nota3) / 3;

// --- VERIFICAÇÃO DA SITUAÇÃO FINAL ---

// Regra 1: Se a frequência for menor que 75%, está reprovado direto por faltas
if ($frequencia < 75) {
    $situacao = "Reprovado por Falta";
} 
// Regra 2: Se tiver frequência suficiente, avalia a média das notas
else {
    if ($mediaFinal >= 7.0) {
        $situacao = "Aprovado";
    } elseif ($mediaFinal >= 5.0) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado por Nota";
    }
}

// --- SAÍDA DE DADOS (Resultado na Tela) ---
echo "Estudante: " . $nomeEstudante . "<br>";
echo "Média Final: " . number_format($mediaFinal, 1) . "<br>"; // Exibe a média com 1 casa decimal
echo "Frequência: " . $frequencia . "%<br>";
echo "Situação Final: <strong>" . $situacao . "</strong>";
?>
























?>
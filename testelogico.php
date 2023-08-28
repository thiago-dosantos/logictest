<?php 

function saque($pontuacao) {
    list($pontosA, $pontosB) = explode(':', $pontuacao);

    // Verificação se o primeiro jogador atingiu os pontos necessários e está a 2 pontos na frete
    if ($pontosA >= 21 && abs($pontosA - $pontosB) >= 2) {
        return "jogador a";
    } 
    // Verificação se o segundo jogador atingiu os pontos necessários e está a 2 pontos na frete
    elseif ($pontosB >= 21 && abs($pontosB - $pontosA) >= 2) {
        return "jogador b";
    } 
    // Verificação se o jogo está empatado para aplicação da lógica
    elseif ($pontosA == 20 && $pontosB == 20) {
        // Calculo do total para decidir o próximo a sacar
        return ($pontosA + $pontosB) % 4 < 2 ? "jogador a" : "jogador b";
    } 
    // Quando nenhuma das condições anteriores é satisfeita
    else {
        $totalPontos = $pontosA + $pontosB;
        $rodadasNormais = floor($totalPontos / 5);
        $rodadasAdicionais = floor(($totalPontos - 40) / 4);

        // Decisão de quem vai sacar com base nas rodadas normais e adicionais
        if (($rodadasNormais + $rodadasAdicionais) % 2 == 0) {
            return "jogador a";
        } else {
            return "jogador b";
        }
    }
}

// Linhas para teste da função
$pontuacao = "21:21"; // pontução para teste
$resultado = saque($pontuacao);
echo "É a vez do: " . $resultado;

?>

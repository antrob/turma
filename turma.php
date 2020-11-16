<?php

    function getPrimeiroUltimoNome( $aluno )
    {
        $nomesAluno = explode(" ", $aluno['nome']);
        $primeiroNome = $nomesAluno[0];
        $ultimoNome = $nomesAluno[count($nomesAluno)-1];

        return [ $primeiroNome, $ultimoNome ];
    }

    function escreverAluno( $aluno )
    {
        list( $primeiroNome, $ultimoNome ) = getPrimeiroUltimoNome( $aluno );
        echo <<<ALU
                        <li>
                            <div class="foto">
                                <img src="https://siesgt.ipsantarem.pt/esgt/fotografias_service.foto?pct_cod={$aluno['numero']}">
                            </div>
                            <div class="info">
                                <span class="nome">$primeiroNome $ultimoNome</span>
                                <span class="numero">{$aluno['numero']}</span>
                            </div>
                        </li>
ALU; 
    }

    $disciplina="Programação Web";
    $curso="TPSI";

    include "alunos.php";

    $alunos = getAlunos();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="turma.css">
    <title>Turma de <?php echo $disciplina; ?></title>
</head>
<body>
    <header>
                     <!-- Sintaxe Curta do echo -->
        <h1>Turma de <?= $disciplina; ?></h1>
        <h2><?php echo $curso; ?></h2>
    </header>

    <main>
        <ul>

            <?php 
                foreach ($alunos as $aluno) 
                    escreverAluno( $aluno );
            ?>        
        </ul>
    </main>

    
</body>
</html>
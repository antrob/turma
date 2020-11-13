<?php

    $disciplina="Programação Web";
    $curso="TPSI";


    $alunos = [ 
        [ 'numero' => "190100249",
        'nome' => "Alex Ferreira Pires"
        ],
        [ 'numero' => "190100210",
        'nome' => "Alexandre José Costa Figueiredo"
        ],
        [ 'numero' => "190100216",
        'nome' => "Alexandre Miguel do Couto da Silva"
        ],
        [ 'numero' => "190100262",
        'nome' => "Daniel Marques Vicente"
        ],
        [ 'numero' => "190100282",
        'nome' => "Duarte Filipe Arriaga Santos"
        ],
        [ 'numero' => "190100225",
        'nome' => "Francisco José Pina da Silva Esteves"
        ],
        [ 'numero' => "190100488",
        'nome' => "Gonçalo Manuel Costa dos Santos"
        ],
        [ 'numero' => "190100209",
        'nome' => "Hugo Filipe da Conceição Figueiredo"
        ],
        [ 'numero' => "190100237",
        'nome' => "João Carlos Casaca Vinagre"
        ],
        [ 'numero' => "190100218",
        'nome' => "João Manuel Coelho Teixeira"
        ],
        [ 'numero' => "190100217",
        'nome' => "João Miguel Fernandes Ameixa"
        ],
        [ 'numero' => "190100263",
        'nome' => "Manuel Bernardo Nunes de Oliveira"
        ],
        [ 'numero' => "190100208",
        'nome' => "Márcio Alexandre Cintra Vilarinho Henriques"
        ],
        [ 'numero' => "190100269",
        'nome' => "Miguel Alexandre da Silva Serdeira"
        ],
        [ 'numero' => "190100260",
        'nome' => "Miguel Énio Gomes da Silva"
        ],
        [ 'numero' => "180100341",
        'nome' => "Nuno Miguel Mendes da Fonseca de Cardoso Assembleia"
        ],
        [ 'numero' => "190100315",
        'nome' => "Ricardo Filipe da Silva Ramos Duarte"
        ],
        [ 'numero' => "190100331",
        'nome' => "Serge Maia da Silva"
        ],
        [ 'numero' => "190100306",
        'nome' => "Weberth Rosa de Souza"
        ]
    ];

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

            <!--
            <li>
                <div class="foto">
                    <img src="https://siesgt.ipsantarem.pt/esgt/fotografias_service.foto?pct_cod=190100249">
                </div>
                <div class="info">
                    <span class="nome">Alex Ferreira Pires</span>
                    <span class="numero">190100249</span>
                </div>    
            </li>
            <li>
                <div class="foto">
                    <img src="https://siesgt.ipsantarem.pt/esgt/fotografias_service.foto?pct_cod=190100210">
                </div>
                <div class="info">
                    <span class="nome">Alexandre José Costa Figueiredo</span>
                    <span class="numero">190100210</span>
                </div>
            </li>
            -->
            <?php 
                foreach ($alunos as $aluno) {
                    $nomesAluno = explode(" ", $aluno['nome']);
                    $primeiroNome = $nomesAluno[0];
                    $ultimoNome = $nomesAluno[count($nomesAluno)-1];

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
            ?>        
        </ul>
    </main>

    
</body>
</html>
// Alunos.php 

<?php 

   

    function estabelerConexao()
    {
         // Deviam estar num ficheiro de configuração
        $hostname = "localhost";
        $databasename = "PW_2020";
        $username = "PW_User";
        $password = "1234";
        
        try {
            $conexao = new PDO("mysql:host=$hostname;dbname=$databasename",
                           $username, $password);
        }
        catch (\PDOException $e) {
            echo $e->getMessage();
        }

        return $conexao;

    }

    function getAlunos() 
    {
        $conexao = estabelerConexao();

        $stmt = $conexao->query('SELECT * FROM alunos');

        $alunos = $stmt->fetchAll();

        return $alunos;
    }


/*    
    function getAlunos() 
    {

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

        return $alunos;
    }
*/    

?>;    

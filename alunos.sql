--
-- Estrutura da tabela `alunos`
--
CREATE TABLE IF NOT EXISTS `alunos` (
  `numero` varchar(13) NOT NULL,
  `nome` varchar(60) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB CHARSET=utf8;

--
-- Inserção de valores na tabela `alunos`
--
INSERT INTO `alunos` (`numero`, `nome` ) VALUES
('190100249', 'Alex Ferreira Pires' ),
('190100210', 'Alexandre José Costa Figueiredo' ),
('190100216', 'Alexandre Miguel do Couto da Silva' ),
('190100262', 'Daniel Marques Vicente' ),
('190100282', 'Duarte Filipe Arriaga Santos' ),
('190100225', 'Francisco José Pina da Silva Esteves' ),
('190100488', 'Gonçalo Manuel Costa dos Santos' ),
('190100209', 'Hugo Filipe da Conceição Figueiredo' ),
('190100237', 'João Carlos Casaca Vinagre' ),
('190100218', 'João Manuel Coelho Teixeira' ),
('190100217', 'João Miguel Fernandes Ameixa' ),
('190100263',  'Manuel Bernardo Nunes de Oliveira' ),
('190100208',  'Márcio Alexandre Cintra Vilarinho Henriques' ),
('190100269',  'Miguel Alexandre da Silva Serdeira' ),
('190100260',  'Miguel Énio Gomes da Silva' ),
('180100341',  'Nuno Miguel Mendes da Fonseca de Cardoso Assembleia' ),
('190100315',  'Ricardo Filipe da Silva Ramos Duarte' ),
('190100331',  'Serge Maia da Silva' ),
('190100306',  'Weberth Rosa de Souza' )
;


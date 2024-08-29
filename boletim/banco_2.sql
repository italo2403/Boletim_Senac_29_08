-- Condição para criar o Banco de Dados
create database boletim;
-- Apontamento para afirmar o banco que será usado
use boletim;
 drop database boletim;

-- Tabela Alunos 1° A Paulista
create table alunos1A(
aluno_id int primary key auto_increment,
nome_aluno varchar(255),
data_nascimento varchar(255),
endereco varchar(255),
numero varchar(255),  
bairro varchar(255),
cidade varchar(55),
estado varchar(25), 
cep varchar(25), 
telefone varchar(25), 
email varchar(255),
responsavel varchar(255),
 telefone_responsavel varchar(255)
);
-- Dados dos Alunos do 1° A 
INSERT INTO alunos1A (nome_aluno, email, telefone_responsavel)
VALUES 
('Cibele  Guerra  Medeiros', 'cibeleguerra667@gmail.com', '98235-5034'), 
('Davi Nascimento Martins', 'davimartins31@gmail.com', '99778-2313'), 
('Deborah Leão Marques', 'deborahleaomm@gmail.com', '98800-8581'), 
('Erick Cauã Ferreira Rodrigues ', 'eerickcaua@gmail.com', '99523-1514'), 
('Gabriel Elias Rangel', 'gabrieleliasrangel@gmail.com', '98664-8023'), 
('Gleiciane Júlia Vieira do Nascimento', 'cibeleguerra667@gmail.com', '98325-9964'), 
('Ivan Freire De Araujo Neto', 'ivanzinhoneto@gmail.com', '98706-3923'), 
('João Henrique Oliveira Gonçalves', 'joaohenrriqueogi@gmail.com', '997559630'), 
('João Victor Sousa Ramos', 'joaovitorsousar200020@gmail.com', '98626-4783'), 
('Juan Gomes Rodrigues', 'juangomesrodrigues@gmail.com', '98691-2900 '), 
('Leticia de Santana Lins', 'leticia.sanlins14@gmail.com', '98755-6429'), 
('Leticia Galvao', 'letticiaama.souza@gmail.com', '987625140'), 
('Luckas Alexandre Oliveira Castro Barros ', 'luckas.lulucka@outlook.com ', '99513-3250'),
('Luna Ariela Carvalho de Deus', 'lulunaarieladedeus@gmail.com', '98309-0191'),
('Matheus Henrique Ferreira', 'matheusjack5257@outlook.com', '98409-4229'),
('Maxwell Bernardo Eulálio Pereira Cavalcante', 'maxwellbernardo0@gmail.com ', '99536-6132'),
('Pedro Vinicius de Souza Cavalcanti', 'pedrocavalcanti928440@alunosenac.com', '9848-22172'),
('Pietro Cauê da Silva Santos', 'pietrosilva0804@gmail.com', '98803-7318 '),
('Renato Alves Ribeiro de Oliveira', 'renatoalves19112008@gmail.com', '98108-6066'),
('Suzanny Moura de Barros', 'suzannymoura08@gmail.com', '99799-4364'),
('Talles Renan Melo de Souza Lira', 'mikarvif85@gmail.com', '99322-5564'),
('Thaíse Eduarda Barbosa de Oliveira e Silva', 'thaiseeduarda023@gmail.com', '98678-7884'),
('Thayná Valença Albuquerque', 'thaynavalenca99@gmail.com', '99133-4768'),
('Victor Gabriel Pereira de Lima', 'victorgabrielfoguo@gmail.com', '99727-1743'),
('Vinícius Novaes', 'viniciusnsilva14@gmail.com', '9 8864 7759');

-- Tabela Alunos 1° B Paulista
create table alunos1B(
aluno_id int primary key auto_increment,
nome_aluno varchar(255),
data_nascimento varchar(255),
endereco varchar(255),
numero varchar(255),  
bairro varchar(255),
cidade varchar(55),
estado varchar(25), 
cep varchar(25), 
telefone varchar(25), 
email varchar(255),
responsavel varchar(255),
 telefone_responsavel varchar(255)
);

-- Dados dos Alunos do 1° B
INSERT INTO alunos1B (nome_aluno, email, telefone_responsavel)
VALUES 
('ADRÍCIA NAINE COSTA BANDEIA FERREIRA', 'adriciaferreira629439@alunosenac.com', '97106-3200'), 
('AIRTON SAMUEL RODRIGUES COSTA', 'airtoncosta639408@alunosenac.com', '983377811'),
('ALICE GABRIELLE DE OLIVEIRA ALMEIDA', 'alicealmeida226473@alunosenac.com', '983377811'),
('BRUNO RAFAEL SILVA COSTA', 'brunocosta538476@alunosenac.com', '(81) 99670-2599'),
('CAIO CESAR SILVA', 'caiomelo049474@alunosenac.com', '(81) 98715-9399'),
('CAIO MULLER SILVA DA ROCHA', 'caiorocha562460@alunosenac.com', '987775350'),
('DANIEL HENRIQUE JOSÉ DOS SANTOS', 'daniehenri333@gmail.com', '993838094'),
('DAVI FELIX MARINHO', 'davi1103felix@gmail.com', '(81) 98760-5491'),
('DAVI NEVES GALVÃO', 'davinevesgalvao@gmail.com', '(81) 98620-6318'),
('DIOGENES LUIZ FREITAS BATISTA', 'diogenesluiz2028@gmail.com', '(81) 99786-5657'),
('EDUARDO PASSOS DE ANDRADE', 'edupassosa18@gmail.com', '987892145'),
('GABRIELA LIMA ALEXANDRINA', 'gabrielalimafg0102@gmail.com', '(81) 98689-1037'),
('GEOVANA NOEMI FERREIRA', 'geovananoemi2009moura@gmail.com', '(81) 98665-2964'),
('GUILHERME JOSÉ RODRIGUES DE FREITAS', 'jailsonrodriguesdesouza62@gmail.com', '991432039'),
('ÍCARO GABRIEL BRAGA DOS ANJOS', 'caroanjos332404@alunosenac.com', '999702111'),
('JOÃO HENRIQUE SANTANA CUNHA', 'joao1809.18@gmail', '0000000000'),
('LAYZA CRISTINA MELO SANTOS', 'layza.melo.santos@gmail.com', '98213-1305'),
('LIGIA VITÓRIA LINHARES DO NASCIMENTO', 'ligianascimento843485@alunosenac.com', '0000000000'),
('LUCAS MIGUEL BARBOSA DA SILVA', 'layza.melo.santos@gmail.com', '98213-1305'),
('LUIZ HENRIQUE DOS SANTOS', 'lucasmiguelbsilva@gmail.com', '996580922'),
('MARCOS VASCONCELOS DENCKER BELTRÃO', 'marcosvdencker@gmail.com', '99791-5135'),
('MARIA CAROLINA FRANCO DE LIMA LEITE', 'mariacarolinafrancodelimaleite@gmail.com', '99555-4304'),
('MARIA MANOELA HELENA DA SILVA', 'mariamanuela9206@gmail.com', '98697-4152'),
('MATHEUS DE ANDRADE CORDEIRO MALAFAIA GOMES', 'matheusacmg@gmail.com', '(81) 98864-9730');

-- Alunos do 2° A a tarde
create table alunos2A(
aluno_id_2a int primary key auto_increment,
nome_aluno varchar(255),
data_nascimento varchar(255),
endereco varchar(255),
numero varchar(255),  
bairro varchar(255),
cidade varchar(55),
estado varchar(25), 
cep varchar(25), 
telefone varchar(25), 
email varchar(255),
responsavel varchar(255),
 telefone_responsavel varchar(255)
);
INSERT INTO alunos2A(nome_aluno, telefone_responsavel)VALUES
("ALLINY SANTOS DE ALBUQUERQUE", "98603-9954"),
("ANNA BIANCA DE MORAES ALMEIDA CASTRO", "98645-5199"),
("ARTHUR EMMANUEL FRANÇA AQUINO", "98641-3296"),
("CARLOS EDUARDO BEZERRA DE SANTANA", "98533-7990"),
("CLARICE ARAÚJO SOARES COUTO", "99840-5773"),
("EMILY CRISTIANE MESQUITA DE ALMEIDA", "98461-2399"),
("FILIPE EMANUEL LINS DO NASCIMENTO SILVA", "98727-0761"),
("GUILHERME TOMAZ PAIVA DE AQUINO", "98692-1629"),
("IURY GABRIEL BARRETO", "98466-9050"),
("LARA LINS DE OLIVEIRA", "98733-5997"),
("LEANDRO HENRIQUE CARVALHO CORREIA", "98658-5960"),
("LETÍCIA CHAPRÃO AURELIANO DE SOUZA", "98767-9434"),
("LETÍCIA ELLEN XIMENES", "98771-0868"),
("LETÍCIA MARQUES DE LIMA CAMPOS", "99980-4201"),
("LUCAS BANDEIRA DE MELO TORRES SENA", "99600-1407"),
("MARCELLO HENRIQUE DA SILVA BARROS", "99596-9798"),
("MARIA CLARA OLIVEIRA SARINHO DE MELO", "98610-5014"),
("MARIA EDUARDA SOARES DE ALBUQUERQUE", "98682-5946"),
("MARIA LÍVIA COSTA DE OLIVEIRA SILVA", "98753-1782"),
("MARINA RODRIGUES DE LIMA", "98870-0710"),
("MATEUS ARAÚJO DE OLIVEIRA SANTOS", "98429-3335"),
("YASMIN LOPES MENDES", "98878-1545"),
("SAMARA MARINHO PEREIRA ROBERTO", "98255-7150"),
("VICTOR ANTÔNIO SANTANA DE LIMA", "98418-2758 ");

-- Alunos do 3° A a manhã
create table alunos3A(
aluno_id_3a int primary key auto_increment,
nome_aluno varchar(255),
data_nascimento varchar(255),
endereco varchar(255),
numero varchar(255),  
bairro varchar(255),
cidade varchar(55),
estado varchar(25), 
cep varchar(25), 
telefone varchar(25), 
email varchar(255),
responsavel varchar(255),
 telefone_responsavel varchar(255)
);
-- Dados dos Alunos do 3° A 
INSERT INTO alunos3A(nome_aluno)VALUES
("Arthur Floro"),
("Bruno José"),
("Daniella Santana"),
("Davi Yuri"),
("Diná"),
("Eduardo"),
("Ellen Santos"),
("Guilherme Alves"),
("Guilherme Araújo"),
("Heytor"),
("Isabel Vitória"),
("João Pedro"),
("José Ferreira"),
("José Henrique"),
("Josué"),
("Larissa Gabrielli"),
("Letícia"),
("Luís Miguel Mororó"),
("Luiza Tavares"),
("Pedro Bezerra"),
("Pedro Henrique"),
("Sam Diego"),
("Savio Torres");

-- Alunos do 3° B a manhã
create table alunos3B(
aluno_id_3b int primary key auto_increment,
nome_aluno varchar(255),
data_nascimento varchar(255),
endereco varchar(255),
numero varchar(255),  
bairro varchar(255),
cidade varchar(55),
estado varchar(25), 
cep varchar(25), 
telefone varchar(25), 
email varchar(255),
responsavel varchar(255),
 telefone_responsavel varchar(255)
);
INSERT INTO alunos3B(nome_aluno, telefone_responsavel)VALUES
("AISHA GABRIELLA DE SOUZA LA PLAZE", "99603-9805"),
("ANA BEATRIZ DE LIMA SOARES FERREIRA", "98904-4542"),
("ARTHUR GUILHERME SILVA FIGUEIREDO", "98332997"),
("CAMILLA PAULA BEZERRA FERREIRA", "99518-3381"),
("DARLAN XIMENES GALDINO DE SOUZA", "988863588"),
("JOÃO BATISTA DA SILVA NETO", "99713-4403"),
("JOÃO LUCAS ZACARIAS DA SILVA", "98883-9427"),
("JOÃO PEDRO CASSIANO DUARTE SILVA", "98156-0265"),
("JOÃO RODRIGUES DE LIMA NETO", "98363-3834"),
("JÚLIA GABRIELA GALVÃO MOURA", "00000-0000"),
("KAUÃ GABRIEL GOMES DO NASCIMENTO", "98644-2076"),
("LÍVIA DE OLIVEIRA MORENO", "98913-7146"),
("LUANA KARLA GOMES DE SANTANA", "98105-4448"),
("MARIA BEATRIZ DE CASTRO BARROS", "98295-9426"),
("MARÍLIA EDUARDA DA SILVA", "98567-6301"),
("MATHEUS VIEGAS DE OLIVEIRA", "98991-6112"),
("MIGUEL VELOSO MARQUES PEREIRA", "99594-1210"),
("PEDRO VINÍCIUS BISPO DE OLIVEIRA", "99561-0706"),
("REBECA VITÓRIA SOUSA MACIEL", "98370-1459"),
("RHUAN MACIEL RODRIGUES", "00000-0000"),
("SOPHIA KEYZE BERNARDINO MUNIZ", "98769-2284"),
("THIAGO AMORIM FLORIANO FERREIRA", "98224-4121");

-- CADASTRO DISCIPLINAS 
CREATE TABLE disciplinas (
    id_disciplina INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);
-- Disciplinas inseridas na Tabela para retorno do Banco
insert into disciplinas(nome) values
("LITERATURA"),
("PRODUÇÃO TEXTUAL"),
("MATEMÁTICA"),
("GEOGRAFIA"),
("HISTÓRIA"),
("INGLÊS"),
("FORMAÇÃO PROFIS."),
("PROJETO DE VIDA"),
("PROGRAMAÊ"),
("FILOSOFIA"),														
("QUÍMICA"),													
("ARTES"),												
("FÍSICA"),												
("BIOLOGIA");
 select * from disciplinas;
 drop table disciplinas;
 
 CREATE TABLE disciplinas_2A (
    id_disciplina_2A INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL
);
 insert into disciplinas_2A(nome) values
("LÍNGUA PORTUGUESA"),
("LITERATURA"),
("PRODUÇÃO TEXTUAL"),
("MATEMÁTICA"),
("GEOGRAFIA"),
("HISTÓRIA"),
("INGLÊS"),
("FORMAÇÃO PROFISSIONAL"),
("PROJETO DE VIDA"),
("PROGRAMAÊ"),														
("FILOSOFIA"),													
("QUÍMICA"),												
("ARTES"),												
("FÍSICA"),
("BIOLOGIA");
 
 -- CADASTRO DOS PROFESSORES PARA LANÇAMENTO DE NOTAS NO SISTEMA:
 -- Dados dos Professores Unidade Paulista
create table professores(
professor_id int primary key auto_increment,
nome_professor varchar(255),
data_nascimento varchar(255),
endereco varchar(255),
numero varchar(255),  
bairro varchar(255),
cidade varchar(55),
estado varchar(25), 
cep varchar(25), 
telefone varchar(25), 
email varchar(255),
responsavel varchar(255),
 telefone_responsavel varchar(255)
);

 -- TABELAS COM AS NOTAS DOS ALUNOS POR TURMA, UMA VEZ QUE CADA BOLETIM VAI SER IMPRESSO POR TURMA. 
-- Notas dos Alunos do 1° A 

CREATE TABLE notas_1A (
    id_nota INT PRIMARY KEY AUTO_INCREMENT,
    id_disciplina INT,
    aluno_id INT,
    unidade INT,
    av1 VARCHAR(10),
    av2 VARCHAR(10),
    conceito VARCHAR(10),
    pos_noa VARCHAR(10),
    mencao_final_anual varchar(10), 
    total_faltas varchar(10), 
	mencao_final_pos_noa varchar(10), 
	resultado_final_anual varchar(10),
    FOREIGN KEY (id_disciplina) REFERENCES disciplinas(id_disciplina),
    FOREIGN KEY (aluno_id) REFERENCES alunos1A(aluno_id)
   
);

-- Notas dos Alunos do 1° B
CREATE TABLE notas_1B (
    id_nota INT PRIMARY KEY AUTO_INCREMENT,
    id_disciplina INT,
    aluno_id INT,
    unidade INT,
    av1 VARCHAR(10),
    av2 VARCHAR(10),
    conceito VARCHAR(10),    
    FOREIGN KEY (id_disciplina) REFERENCES disciplinas(id_disciplina),
    FOREIGN KEY (aluno_id) REFERENCES alunos1B(aluno_id)
   );
   select * from notas_1B;
   SELECT * FROM notas_1B WHERE aluno_id = 1;

   create table mencao(
   id_pos_noa int primary key auto_increment,
   pos_noa VARCHAR(10),
     mencao_final_anual varchar(10), 
    total_faltas varchar(10), 
	mencao_final_pos_noa varchar(10), 
	resultado_final_anual varchar(10),
    id_disciplina INT,
    aluno_id INT,
    FOREIGN KEY (id_disciplina) REFERENCES disciplinas(id_disciplina),
    FOREIGN KEY (aluno_id) REFERENCES alunos1B(aluno_id)
   );
   
   
-- alter table notas_1B add column mencao_bimestral varchar(10);
-- CREATE TABLE notas (
   -- id_nota INT PRIMARY KEY AUTO_INCREMENT,
  --  id_disciplina INT,
  --  unidade INT,
  --  av1 VARCHAR(10),
  --  av2 VARCHAR(10),
  --  conceito VARCHAR(10),
  --  pos_noa VARCHAR(10),
  --  FOREIGN KEY (id_disciplina) REFERENCES disciplinas(id_disciplina)
    -- );

-- Notas dos Alunos do 2° A
CREATE TABLE notas_2A (
    id_nota INT PRIMARY KEY AUTO_INCREMENT,
    id_disciplina_2A INT,
    aluno_id_2a INT,
    unidade INT,
    av1 VARCHAR(10),
    av2 VARCHAR(10),
    conceito VARCHAR(10),
    pos_noa VARCHAR(10),
    mencao_final_anual varchar(10), 
    total_faltas varchar(10), 
	mencao_final_pos_noa varchar(10), 
	resultado_final_anual varchar(10),
    FOREIGN KEY (id_disciplina_2A) REFERENCES disciplinas_2A(id_disciplina_2A),
    FOREIGN KEY (aluno_id_2a) REFERENCES alunos2A(aluno_id_2a)
   );
SELECT * FROM notas_2A;





-- Notas dos Alunos 3° A 
CREATE TABLE notas_3A (
    id_nota INT PRIMARY KEY AUTO_INCREMENT,
    id_disciplina INT,
    aluno_id_3a INT,
    unidade INT,
    av1 VARCHAR(10),
    av2 VARCHAR(10),
    conceito VARCHAR(10),
    pos_noa VARCHAR(10),
    mencao_final_anual varchar(10), 
    total_faltas varchar(10), 
	mencao_final_pos_noa varchar(10), 
	resultado_final_anual varchar(10),
    FOREIGN KEY (id_disciplina) REFERENCES disciplinas(id_disciplina),
    FOREIGN KEY (aluno_id_3a) REFERENCES alunos3A(aluno_id_3a)
   );

CREATE TABLE notas_3B (
    id_nota INT PRIMARY KEY AUTO_INCREMENT,
    id_disciplina INT,
    aluno_id_3b INT,
    unidade INT,
    av1 VARCHAR(10),
    av2 VARCHAR(10),
    conceito VARCHAR(10),
    pos_noa VARCHAR(10),
    mencao_final_anual varchar(10), 
    total_faltas varchar(10), 
	mencao_final_pos_noa varchar(10), 
	resultado_final_anual varchar(10),
    FOREIGN KEY (id_disciplina) REFERENCES disciplinas(id_disciplina),
    FOREIGN KEY (aluno_id_3b) REFERENCES alunos3B(aluno_id_3b)
   );



-- SELECTS FEITOS EM TABELAS PARA VERIFICAR OS RETORNO CORRETO DAS INFORMAÇÕES 


select * from notas_1B;
select * from alunos1B;

CREATE TABLE dados_finais (
    aluno_id INT PRIMARY KEY,
    mencao_final_anual VARCHAR(10),
    total_faltas INT,
    mencao_final_pos_noa VARCHAR(10),
    resultado_final_anual VARCHAR(10),
    FOREIGN KEY (aluno_id) REFERENCES alunos1B(aluno_id)
);



# Prevent-Senior-Api - Backend

## PHP - Codeginiter

Projeto backend em PHP para auxiliar na Aplicação front-end Prevent-Senior.

### 1º Passo 
> Baixa e instalar o Xampp em https://www.apachefriends.org/pt_br/index.html;

### 2º Passo 
> Abrir o XAMMP Control Panel e Iniciar os Modulo Apche e Mysql;

### 3º Passo 
> Baixar o Workbench em https://www.mysql.com/products/workbench/

### 4º Passo
> Executar os scripts baixo para criar as tabela estabelecimento e estado, popular a tabela estado

<pre>
    CREATE TABLE IF NOT EXISTS `pessoa` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `telefone` varchar(25) NOT NULL,
        `nome` varchar(255) NOT NULL,
        UNIQUE(telefone)
    ) ENGINE=InnoDB;

    CREATE TABLE IF NOT EXISTS `agendamento` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `hora_minuto` TIME NOT NULL,
        `mensagem` varchar(255) NOT NULL,
        `ativo` INT NOT NULL
    ) ENGINE=InnoDB;

    CREATE TABLE IF NOT EXISTS `agendamento_pessoa` (
        `id_agendamento` INT NOT NULL,
        `id_pessoa` INT NOT NULL,
        CONSTRAINT PK_agendamento_pessoa PRIMARY KEY (id_agendamento, id_pessoa),
        FOREIGN KEY (id_agendamento) REFERENCES agendamento(id),
        FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
    ) ENGINE=InnoDB;
</pre>

    
### 5º Passo 
> Baixar o projeto no respositorio https://github.com/inaciofabricio/prevent-senior-api, o colocar ele na pasta htdocs, da instalação do xampp (Exemplo - C:\xampp\htdocs)



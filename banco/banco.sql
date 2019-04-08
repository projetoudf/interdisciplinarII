CREATE TABLE Usuário (
Id_Usuário INT PRIMARY KEY,
Senha VARCHAR(50),
E-mail VARCHAR(50)
)

CREATE TABLE Fotos (
Id_Fotos INT PRIMARY KEY,
Imagem VARCHAR(100),
Id_Produto INT
)

CREATE TABLE Mensagem (
Id_Mensagem INT PRIMARY KEY,
Telefone VARCHAR(100),
Nome_Cliente VARCHAR(100),
E-mail VARCHAR(100),
Mensagem VARCHAR(2000),
Id_Produto INT
)

CREATE TABLE Produto (
Id_Produto INT PRIMARY KEY,
Nome_Produto VARCHAR(100),
Altura FLOAT,
Largura FLOAT,
Cor VARCHAR(100),
Comprimento FLOAT,
Id_Usuário INT,
FOREIGN KEY(Id_Usuário) REFERENCES Usuário (Id_Usuário)
)

ALTER TABLE Fotos ADD FOREIGN KEY(Id_Produto) REFERENCES Produto (Id_Produto)
ALTER TABLE Mensagem ADD FOREIGN KEY(Id_Produto) REFERENCES Produto (Id_Produto)

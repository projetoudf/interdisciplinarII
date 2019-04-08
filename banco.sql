CREATE TABLE Mensagem (
Id_Mensagem Texto(1) PRIMARY KEY,
Telefone Texto(1),
Nome_Cliente Texto(1),
Email Texto(1),
Mensagem Texto(1)
)

CREATE TABLE Fotos (
Id_Fotos Texto(1) PRIMARY KEY,
Galeria_3 Texto(1),
Galeira_1 Texto(1),
Galeira_2 Texto(1)
)

CREATE TABLE Produto (
Id_Produto Texto(1) PRIMARY KEY,
Nome_Produto Texto(1),
Tamanho_Total Texto(1),
Material_Lamina Texto(1),
Comprimento_Lamina Texto(1),
Largura_Lamina Texto(1),
Material_Cabo Texto(1),
Dorso Texto(1),
Cor Texto(1),
Inserido_Por Texto(1),
Id_Fotos Texto(1),
Id_Mensagem Texto(1),
FOREIGN KEY(Id_Fotos) REFERENCES Fotos (Id_Fotos),
FOREIGN KEY(Id_Mensagem) REFERENCES Mensagem (Id_Mensagem)
)

CREATE TABLE Usuário (
Id_Usuário Texto(1) PRIMARY KEY,
Senha Texto(1),
Nome_Usuário Texto(1),
Email Texto(1),
Id_Produto Texto(1),
FOREIGN KEY(Id_Produto) REFERENCES Produto (Id_Produto)
)

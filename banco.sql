CREATE TABLE medicamento(
    cod SERIAL NOT NULL,
    nome VARCHAR(50) NOT NULL,
    fabricante VARCHAR(50) NOT NULL,
    controlado VARCHAR(1) NOT NULL,
    quantidade INT NOT NULL,
    preco INT NOT NULL,
    CONSTRAINT codpk PRIMARY KEY (cod)
)

CREATE TABLE medicamento (
    cod INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    fabricante VARCHAR(50) NOT NULL,
    controlado VARCHAR(1) NOT NULL,
    quantidade INT NOT NULL,
    preco FLOAT NOT NULL,
    PRIMARY KEY(cod) 
);

INSERT INTO medicamento (nome,fabricante,controlado,quantidade,preco) VALUES 
('omeprasol','farmacologia','N',151,10.50), 
('ritalina','HP farmaco','S',12,290), 
('novolgina','farmacologia','N',112,189), 
('citotec','drogologia','N',14,15), 
('DIU','farmacologia','N',80,25), 
('boa noite cinderela','HP farmaco','S',151,10.95);

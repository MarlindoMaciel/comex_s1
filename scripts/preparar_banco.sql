--BANCO: /script/comex.sqlite
DELETE FROM categorias;
INSERT INTO categorias(id,nome) VALUES(1,'LUXO');
INSERT INTO categorias(id,nome) VALUES(2,'CELULARES');
INSERT INTO categorias(id,nome) VALUES(3,'INFORMÁTICA');
INSERT INTO categorias(id,nome) VALUES(4,'MÓVEIS');
INSERT INTO categorias(id,nome) VALUES(5,'AUTOMOTIVA');
INSERT INTO categorias(id,nome) VALUES(6,'LIVROS');
INSERT INTO categorias(id,nome) VALUES(7,'BELEZA');
INSERT INTO categorias(id,nome) VALUES(8,'ESPORTE');

DELETE FROM clientes;
INSERT INTO clientes(id,nome) VALUES(1,'MARLINDO MARTINS MACIEL');
INSERT INTO clientes(id,nome) VALUES(2,'JULIA CRISTIANE BEZERRA');
INSERT INTO clientes(id,nome) VALUES(3,'GABRIELA TORRES MACIEL');


DELETE FROM produtos;
INSERT INTO produtos(id,nome) VALUES(1,'CELULAR SANSUNG K22');
INSERT INTO produtos(id,nome) VALUES(2,'TABLET SAMSUNG S6 LITE');
INSERT INTO produtos(id,nome) VALUES(3,'TV LG 50pol 4K TINK');

DELETE FROM pedidos;
INSERT INTO pedidos(id,nome) VALUES(1,'PEDIDO 0001.2023');
INSERT INTO pedidos(id,nome) VALUES(2,'PEDIDO 0002.2023');
INSERT INTO pedidos(id,nome) VALUES(3,'PEDIDO 0003.2023');

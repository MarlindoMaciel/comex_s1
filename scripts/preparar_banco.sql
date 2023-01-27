--BANCO: /script/comex.sqlite
DELETE FROM categorias;
INSERT INTO categorias VALUES(1,'LUXO','2023-01-26 04:54:32','2023-01-26 04:54:32');
INSERT INTO categorias VALUES(2,'CELULARES','2023-01-26 04:54:32','2023-01-26 04:54:32');
INSERT INTO categorias VALUES(3,'INFORMÁTICA','2023-01-26 04:54:32','2023-01-26 04:54:32');
INSERT INTO categorias VALUES(4,'MÓVEIS','2023-01-26 04:54:32','2023-01-26 04:54:32');
INSERT INTO categorias VALUES(5,'AUTOMOTIVA','2023-01-26 04:54:32','2023-01-26 04:54:32');
INSERT INTO categorias VALUES(6,'LIVROS','2023-01-26 04:54:32','2023-01-26 04:54:32');
INSERT INTO categorias VALUES(7,'BELEZA','2023-01-26 04:54:32','2023-01-26 04:54:32');
INSERT INTO categorias VALUES(8,'ESPORTE','2023-01-26 04:54:32','2023-01-26 04:54:32');

DELETE FROM clientes;
INSERT INTO clientes VALUES(1,'MARLINDO MARTINS MACIEL','209.590.442-72','96 99195-5060','Av. José Loureiro de Sena','2515',NULL,'Jardim Felicidade II','Macapá','Amapá','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO clientes VALUES(2,'JULIA CRISTIANE BEZERRA','432.132.222-49','96 99195-5064','Av. José Loureiro de Sena','2515',NULL,'Jardim Felicidade II','Macapá','Amapá','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO clientes VALUES(3,'GABRIELA TORRES MACIEL','100.100.100-10','96 99195-1334','Rua da Farol','100',NULL,'Centro','Salvador','Bahia','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO clientes VALUES(4,'VERONICA MARTINS MACIEL','900.900.900-90','96 99195-0000','Av. Caramurú','312','proximo ao Quartel da PM-AP','Beirol','Macapá','Amapá','2023-01-26 04:54:50','2023-01-26 04:56:10');

DELETE FROM produtos;
INSERT INTO produtos VALUES(1,'Smartphone Nokia 5.3','Smartphone Nokia 5.3 128GB Dual Chip Android 10 Tela 6.55 Octa Core Câmera 13MP+5MP+2MP+2MP Frontal 8MP- Verde Ciano','2599,00',100,2,'01-nokia-min.webp','01-nokia-max.webp','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO produtos VALUES(2,'Smartphone OUKITEL WP5 Pro','Smartphone OUKITEL WP5 Pro (2020) robusto, telefone IP68 à prova dágua Dual SIM Card 4G LTE (8000 mAh), versão mundial Android 9.0, câmera tripla de 4pol64 GB, 5,5" (Laranja preta)','1583,70',100,2,'02-okitel-min.webp','02-okitel-max.webp','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO produtos VALUES(3,'Microsoft Lumia 435 Dual','Microsoft Lumia 435 Dual Windows Tela 4´ 8gb 2mp - Exposição','299,00',100,2,'03-microsoft-min.webp','03-microsoft-max.webp','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO produtos VALUES(4,'Smartphone Motorola Edge 30','Smartphone Motorola Edge 30 5G 256GB 8GB RAM Rosê','2569,00',100,2,'04-motorola-max.jpg','04-motorola-min.webp','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO produtos VALUES(5,'Poco M4 Pro Smartphone','Poco M4 Pro Smartphone 128GB 6GB RAM no Brasil - Azul','1599,90',100,2,'05-poco-max.jpg','05-poco-min.webp','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO produtos VALUES(6,'Samsung Galaxy Note10','Samsung Galaxy Note10 Dual SIM 256 GB Aura black 8 GB RAM','3339,00',100,2,'06-samsung-min.webp','06-samsung-max.webp','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO produtos VALUES(7,'Smartphone Xiaomi Redmi 10','Smartphone Xiaomi Redmi 10 128gb 6gb Ram Dual Sim Global Azul','1258,11',100,2,'07-xaomi-max.jpg','07-xaomi-min.webp','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO produtos VALUES(8,'iPhone 11','iPhone 11 Apple 64GB (PRODUCT)RED 6,1 12MP iOS','2975,99',100,2,'08-apple-min.webp','08-apple-max.webp','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO produtos VALUES(9,'Smartphone LG K62 64GB','Smartphone LG K62 64GB Azul 4G Octa-Core 4GB RAM - Tela 6,59 Câm. Quádrupla + Selfie 13MP Dual Chip - Tela 6,59 Câm. Quádrupla + Selfie 13MP Dual Chip','1079,99',100,2,'09-lg-min.webp','09-lg-max.webp','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO produtos VALUES(10,'Smartphone ASUS Zenfone Max','Smartphone ASUS Zenfone Max Pro M2, 6GB 64GB, Black Saphire','1849,00',100,2,'10-asus-min.webp','10-asus-max.jpg','2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO produtos VALUES(11,'Notebook Asus Zenbook','Notebook Asus Zenbook Duo Ux482ear-ka371w Intel Core i7 1195g7 16gb 512gb Ssd W11 14pol Azul Celestial','7998,90',NULL,3,'11-asus-zenbuook-min.webp','11-asus-zenbuook-max.jpg','2023-01-27 01:21:01','2023-01-27 01:23:18');
INSERT INTO produtos VALUES(12,'Conjuntos Joias Jankelly','Conjuntos De Joias De Luxo Jankelly Para Mulheres Exclusivo Conjunto De Anéis De Pulseira Africana','95,07',NULL,1,'12-anel-min.webp','12-anel-max.webp','2023-01-27 01:26:41','2023-01-27 01:55:38');
INSERT INTO produtos VALUES(13,'Escrivaninha MATCH','Escrivaninha com Estante Lateral MATCH cor Preto/Pinho - Artely','230,96',NULL,4,'12-escrivanhinha-min.webp','12-escrivanhinha-max.jpg','2023-01-27 01:31:42','2023-01-27 01:33:02');
INSERT INTO produtos VALUES(14,'Coraline',replace(replace('Coraline - Acompanha Marcador de Páginas Especial Capa dura – Edição padrão, 19 junho 2020\r\nClássico de Neil Gaiman que mistura terror e conto de fadas ganha edição especial\r\n\r\nCertas portas não devem ser abertas. E Coraline descobre isso pouco tempo depois de chegar com os pais à sua nova casa, um apartamento em um casarão antigo ocupado por vizinhos excêntricos e envolto por uma névoa insistente, um mundo de estranhezas e magia, o tipo de universo que apenas Neil Gaiman pode criar.','\r',char(13)),'\n',char(10)),'42,90',NULL,6,'13-livro-min.jpg','13-livro-max.webp','2023-01-27 01:36:47','2023-01-27 01:38:28');
INSERT INTO produtos VALUES(15,'Organizador Objetos no carro','Organizador Objetos Banco Traseiro Carro Acessórios Carros','41,92',NULL,5,'14-organizador-min.webp','14-organizador-max.webp','2023-01-27 01:42:18','2023-01-27 01:43:29');
INSERT INTO produtos VALUES(16,'Bola Futebol de Areia Adidas','Bola Futebol de Areia Adidas Al Rihla PRO Beach Copa do Mundo','239,00',NULL,8,'15-bola-min.webp','15-bola-max.jpg','2023-01-27 01:48:50','2023-01-27 01:50:01');
INSERT INTO produtos VALUES(17,'Kimono+Rash Guard+Bermuda','Kit: Kimono World Combat BJJ + Rash Guard BJJ Competidor + Bermuda BJJ Competidor','498,00',NULL,8,'16-kimono-min.webp','16-kimono-max.webp','2023-01-27 01:52:36','2023-01-27 01:55:11');
INSERT INTO produtos VALUES(18,'Bolsa de cosméticos LHLYSGS',replace(replace('Bolsa de cosméticos de marca LHLYSGS\r\nBolsa de cosméticos de marca LHLYSGS, organizador de belleza para mujer, estuche cosmético profesional, bolsa de maquillaje de almacenamiento impermeable necesaria de viaje','\r',char(13)),'\n',char(10)),'116,75',NULL,7,'17-kitbeleza.min.webp','17-kitbeleza.max.webp','2023-01-27 01:57:54','2023-01-27 02:00:28');

DELETE FROM pedidos;
INSERT INTO pedidos VALUES(1,'PEDIDO 0001.2023','1000,00',0,'5000,00','INICIADO',1,'2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO pedidos VALUES(2,'PEDIDO 0002.2023','5800,00',0,'15000,00','INICIADO',2,'2023-01-26 04:52:57','2023-01-26 04:52:57');
INSERT INTO pedidos VALUES(3,'PEDIDO 0003.2023','130,00',0,130,'INICIADO',3,'2023-01-26 04:52:57','2023-01-26 04:52:57');

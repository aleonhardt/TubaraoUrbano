DELETE FROM fornecedor;
DELETE FROM consumidor;
DELETE FROM oferta;
LOAD DATA LOCAL INFILE 'd:/popfornecedor.txt' INTO TABLE fornecedor LINES TERMINATED BY '\r\n';
LOAD DATA LOCAL INFILE 'd:/popconsumidor.txt' INTO TABLE consumidor LINES TERMINATED BY '\r\n';
LOAD DATA LOCAL INFILE 'd:/popoferta.txt' INTO TABLE oferta LINES TERMINATED BY '\r\n';

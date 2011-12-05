DELETE FROM fornecedor;
DELETE FROM consumidor;
DELETE FROM oferta;
LOAD DATA LOCAL INFILE 'C:/Users/Alessandra/TubaraoUrbano/scripts_db/popfornecedor.txt' INTO TABLE fornecedor LINES TERMINATED BY '\r\n';
LOAD DATA LOCAL INFILE 'C:/Users/Alessandra/TubaraoUrbano/scripts_db/popconsumidor.txt' INTO TABLE consumidor LINES TERMINATED BY '\r\n';
LOAD DATA LOCAL INFILE 'C:/Users/Alessandra/TubaraoUrbano/scripts_db/popoferta.txt' INTO TABLE oferta LINES TERMINATED BY '\r\n';

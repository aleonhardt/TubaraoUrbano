DELETE FROM oferta;
LOAD DATA LOCAL INFILE 'C:/Users/Alessandra/TubaraoUrbano/scripts_db/popoferta.txt' INTO TABLE oferta LINES TERMINATED BY '\r\n';

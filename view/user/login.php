<?php

/* 
create table cargos( id INT PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(100) )
create table users( id INT PRIMARY KEY AUTO_INCREMENT, nome VARCHAR(100), id_cargo INTEGER, CONSTRAINT fk_userCargo FOREIGN KEY (id_cargo) REFERENCES cargos (id) ); 
*/
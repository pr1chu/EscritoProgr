create database EscritoPriscila;
use EscritoPriscila;

create table Tarea(
	id int auto_increment Primary Key,
	titulo varchar(50), 
	contenido varchar (250) ,
	estado varchar (25),
	autor varchar(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



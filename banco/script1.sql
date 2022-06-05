create database if not exists restaurante;
use restaurante;

create or replace table cliente(
    id int primary key auto_increment,
    nome varchar(250) not null,
    pedido varchar(250) not null unique,
    mesa int not null unique,
    observacao varchar(250) not null,
    create_at TIMESTAMP not null default CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
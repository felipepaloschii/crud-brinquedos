create database brinquedos;

use brinquedos;

create table brinquedos (
    id int primary key auto_increment,
    nome varchar(100) not null,
    categoria varchar(50) not null,
    faixa_etaria varchar(20) not null,
    preco decimal(10,2) not null,
    quantidade int not null
);
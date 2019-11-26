create database SistemaDeEventos;
use SistemaDeEventos;
create table endereco(
id_end int auto_increment,
regiao varchar(50),
estado varchar(50),
cidade varchar(5000),
bairro varchar(5000),
rua varchar(5000),
numero int,
primary key(id_end)
);
create table cadastro(
id_cadastro int auto_increment,
nome varchar(5000),
celular int,
cpf varchar(11),
rg varchar(8),
email varchar(5000),
usuario varchar(5000),
senha varchar(5000),
datanasc date,
primary key(id_cadastro)
);
create table evento(
id_evento int auto_increment,
id_cadastro int,
nome varchar(5000),
id_end int,
data date,
quantidade_pessoas int,
tipoEvento varchar(5000),
primary key(id_evento),
foreign key(id_cadastro) references cadastro(id_cadastro),
foreign key(id_end) references endereco(id_end)
);




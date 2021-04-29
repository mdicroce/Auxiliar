create database tecnicoReparacion;
use tecnicoReparacion;

create table tecnicos (
	tecnicos_id int auto_increment primary key,
    nombre varchar(50) not null,
    usuario varchar(50) not null,
    password varchar(50) not null
);

create table clientes(
	clientes_id int auto_increment primary key,
    nombre varchar(50) not null,
    telefono varchar(70) not null
);
alter table clientes add id_tecnico int not null;

create table ordenes(
	ordenes_id int auto_increment primary key,
    estado varchar(50) not null,
    nombre_equipo varchar(100) not null,
    clientes_id int not null,
    foreign key (clientes_id) references clientes (clientes_id)
);
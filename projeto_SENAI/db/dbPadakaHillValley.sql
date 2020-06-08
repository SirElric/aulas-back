create database dbPadokaHillValley;

use dbPadokaHillValley;

create table tblContato(
	idContact int auto_increment not null,
    nameContact varchar(100) not null,
    telephone varchar (14),
    cellphone varchar (15) not null,
    email varchar(100) not null,
    homePage varchar(100),
    facebook varchar(100),
    message text not null,
    optionMessage varchar(1),
    gender varchar(1),
    profession varchar(100),
    primary key (idContact)
);



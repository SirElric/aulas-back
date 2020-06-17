create database dbPadokaHillValley;

use dbPadokaHillValley;

create table tblContact(
	idContact int auto_increment not null,
    clientName varchar(100) not null,
    telephone varchar (15),
    cellphone varchar (15) not null,
    profession varchar(100),
    gender integer,
    email varchar(100) not null,
    homePage varchar(100),
    facebook varchar(100),
    message text not null,
    optionMessage integer not null,
    primary key (idContact)
);


drop table tblContact;


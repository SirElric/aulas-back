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
create table tblConstraint(
	idConstraint int auto_increment not null,
    admnisterLevel boolean,
    operatorLevel boolean,
    clientLevel boolean,
    primary key (idConstraint)
);
create table tblUser(
	idUser int auto_increment not null,
    idConstraint int not null,
    userName varchar(100) not null,
    birthDate date not null,
    email varchar(100) not null,
    cellphone varchar(15) not null,
    tellphone varchar(15),
    primary key (idUser),
    constraint constaint_user
    foreign key (idConstraint)
    references tblConstraint (idConstraint)
);

drop table tblContact;


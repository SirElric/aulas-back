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
    username varchar(100) not null,
    birthDate date not null,
    email varchar(100) not null,
    cpf varchar(15) not null,
    userpassword varchar(15) not null,
    cellphone varchar(20) not null,
    tellphone varchar(20),
    primary key (idUser),
    constraint constraint_user
    foreign key (idConstraint)
    references tblConstraint (idConstraint)
);
create table tblCuriosity(
	idCuriosity int auto_increment not null,
    title varchar(100) not null,
    textContent text not null,
    image varchar(200) not null,
    primary key (idCuriosity)
);
create table tblAbout(
	idAbout int auto_increment not null,
    title varchar(100) not null,
    textContent text not null,
    primary key (idAbout)
);
create table tblLocation(
	idLocation int auto_increment not null,
    localName varchar(100),
    email varchar(100)not null,
    state varchar(100)not null,
    city varchar(100)not null,
    street varchar(100)not null,
    localNumber numeric(5) not null,
    primary key (idLocation)
);

show tables;
drop table tblUser;

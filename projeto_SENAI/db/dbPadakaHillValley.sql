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
    localNumber int(5) not null,
    primary key (idLocation)
);

show tables;

select * from tblAbout;

update tblCuriosity set display = false where idCuriosity = 2;

update tblCuriosity set display = true where idCuriosity = 2;

alter table tblAbout add display boolean not null;

alter table tblAbout drop display;

insert into tblAbout ( title, textContent) values ( 'Padoka Hill Valley', 'Deserunt qui non id elit amet cupidatat mollit minim adipisicing consequat veniam ea consectetur. Officia fugiat cillum cillum aute pariatur consectetur laboris ullamco consectetur sunt. Dolor ex dolore officia proident sunt consectetur laborum ullamco. Est dolor elit ea nulla laboris cillum et adipisicing Lorem culpa ad commodo. Cillum aute ex culpa magna ad enim velit nisi. Ex officia labore consequat ut deserunt elit do laborum consectetur nisi nisi ipsum laborum.Lorem sunt excepteur anim reprehenderit cupidatat quis laborum do in et in velit. Veniam veniam minim culpa sunt dolore est consectetur voluptate aliqua eu. Adipisicing laboris proident amet tempor deserunt ex amet laboris do non Lorem adipisicing. Enim labore nisi dolor ut culpa ipsum. Fugiat amet minim cillum fugiat culpa. Laborum occaecat in ipsum irure ea reprehenderit aliqua minim veniam consectetur exercitation reprehenderit sint. Adipisicing veniam reprehenderit elit ex aute sit amet laborum voluptate laboris velit. Ut quis occaecat nostrud commodo deserunt commodo deserunt. Quis nisi ut consequat ex veniam esse duis proident esse officia. Non minim incididunt eu duis aliquip magna officia magna cupidatat. Ex ullamco veniam occaecat reprehenderit laboris. ')

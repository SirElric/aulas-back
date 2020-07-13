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
    display boolean not null,
    primary key (idCuriosity)
);
create table tblAbout(
	idAbout int auto_increment not null,
    title varchar(100) not null,
    textContent text not null,
    display boolean not null,
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
    map text,
    display boolean not null,
    primary key (idLocation)
);

show tables;

select * from tblCuriosity;

update tblLocation set map = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.3539659562443!2d-46.69253658449443!3d-23.591635184667915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5738ad7d5c5d%3A0xc4ca5a22b1178308!2sStarbucks%20Shopping%20JK%20Iguatemi!5e0!3m2!1spt-BR!2sbr!4v1594399568440!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>' where idLocation = 1;

update tblCuriosity set display = true where idCuriosity = 2;

alter table tblLocation add map text;

alter table tblLocation add display boolean not null;

alter table tblLocation drop display;

insert into tblLocation ( nt) values ( 'Padoka Hill Valley', 'Deserunt qui non id elit amet cupidatat mollit minim adipisicing consequat veniam ea consectetur. Officia fugiat cillum cillum aute pariatur consectetur laboris ullamco consectetur sunt. Dolor ex dolore officia proident sunt consectetur laborum ullamco. Est dolor elit ea nulla laboris cillum et adipisicing Lorem culpa ad commodo. Cillum aute ex culpa magna ad enim velit nisi. Ex officia labore consequat ut deserunt elit do laborum consectetur nisi nisi ipsum laborum.Lorem sunt excepteur anim reprehenderit cupidatat quis laborum do in et in velit. Veniam veniam minim culpa sunt dolore est consectetur voluptate aliqua eu. Adipisicing laboris proident amet tempor deserunt ex amet laboris do non Lorem adipisicing. Enim labore nisi dolor ut culpa ipsum. Fugiat amet minim cillum fugiat culpa. Laborum occaecat in ipsum irure ea reprehenderit aliqua minim veniam consectetur exercitation reprehenderit sint. Adipisicing veniam reprehenderit elit ex aute sit amet laborum voluptate laboris velit. Ut quis occaecat nostrud commodo deserunt commodo deserunt. Quis nisi ut consequat ex veniam esse duis proident esse officia. Non minim incididunt eu duis aliquip magna officia magna cupidatat. Ex ullamco veniam occaecat reprehenderit laboris. ')

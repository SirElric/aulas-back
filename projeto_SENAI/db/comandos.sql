#altera a estrutura de uma table
alter table tblContato;

#apaga uma coluna da tabela  selecionada
alter table tblestados drop column teste;

#adiciona uma coluna na tabla selecionada
alter table tblContato add profession varchar(100) not null;

#mostra a estrutura de uma table
show create table tblContact;

#mostra todas tabelas de um db
show tables;

#deleta um tabela
drop table tblestados;

#deleta um database
drop database dbcontatos20201a;

#insere dados dentro de uma tabela
insert into tblestados (sigla, nome) values ('MG', 'Minas Gerais');

#mostra todos os dados de uma tabela;
select * from tblContato;

#delata dados de uma tabela
delete from tblcontato where idContact = 1;

ALTER USER 'root'@'localhost' identified with mysql_native_password by 'bcd127';

select tblContato.idContact, tblcontato.nameContact, tblcontato.cellphone, tblcontato.email FROM tblcontato order by tblcontato.idContact desc; 

select * from tblContact where tblContact.idContact = 1;

select tblContact.idContact, tblContact.clientname, tblContact.cellphone, tblContact.OptionMessage
FROM tblcontact
order by tblContact.OptionMessage asc; 

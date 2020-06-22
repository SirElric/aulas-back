ALTER USER 'root'@'localhost' identified with mysql_native_password by 'bcd127';

#insere dados dentro de uma tabela
insert into tblestados (sigla, nome) values ('MG', 'Minas Gerais');

#mostra todos os dados de uma tabela;
select * from tblContato;

#delata dados de uma tabela
delete from tblcontato where idContact = 1; 

select * from tblContact where tblContact.idContact = 1;

# escolhe dados de uma tabela e/ou coluna especificas
select tblContact.idContact, tblContact.clientname, tblContact.cellphone, tblContact.OptionMessage
# onde se encontra os dados especificados acima
FROM tblcontact
#especifica a ordem no qual os dados serão mostrados "asc" crescente "desc" decrescente
order by tblContact.OptionMessage asc; 

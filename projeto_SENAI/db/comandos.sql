use dbpadokahillvalley;

#altera a estrutura de uma table
alter table tblContato 

#apaga uma coluna da tabela  selecionada
drop column profession;

#adiciona uma coluna na tabla selecionada
alter table tblContato add profession varchar(100) not null;

#mostra a estrutura de uma table
show create table tblContato;


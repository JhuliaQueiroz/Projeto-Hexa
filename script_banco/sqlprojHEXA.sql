create schema supermercado;

use supermercado;

create table status(
	codigo int primary key,
    tipo varchar(100) not null
    );
    
    
    insert into status value(1,"Funcionário");
    insert into status value(2,"Chefe");
    insert into status value(3, "Gerente");

create table turno(
	codigo int primary key,
    tipo varchar(100) not null
);
    insert into turno values(1,"Matutino");
    insert into turno values(2,"Vesperino");
    insert into turno values(3,"Noturno");
    
create table UF(
	codigo int primary key,
    nome varchar(100) not null
);

	INSERT INTO UF VALUES (01, 'Acre');
	INSERT INTO UF VALUES (02, 'Alagoas');
	INSERT INTO UF VALUES (03, 'Amapa');
	INSERT INTO UF VALUES (04, 'Bahia');
	INSERT INTO UF VALUES (05, 'Ceara');
	INSERT INTO UF VALUES (06, 'Distrito Federal');
	INSERT INTO UF VALUES (07, 'Espirito Santo');
	INSERT INTO UF VALUES (08, 'Goias');
	INSERT INTO UF VALUES (09, 'Maranhao');
	INSERT INTO UF VALUES (10, 'Mato Grosso');
	INSERT INTO UF VALUES (11, 'Mato Grosso do Sul');
	INSERT INTO UF VALUES (12, 'Minas Gerais');
	INSERT INTO UF VALUES (13, 'Parana');
	INSERT INTO UF VALUES (14, 'Paraiba');
	INSERT INTO UF VALUES (15, 'Para');
	INSERT INTO UF VALUES (16, 'Pernambuco');
	INSERT INTO UF VALUES (17, 'Piaui');
	INSERT INTO UF VALUES (18, 'Rio de Janeiro');
	INSERT INTO UF VALUES (19, 'Rio Grande do Norte');
	INSERT INTO UF VALUES (20, 'Rio Grande do Sul');
	INSERT INTO UF VALUES (21, 'Rondonia');
	INSERT INTO UF VALUES (22, 'Roraima');
	INSERT INTO UF VALUES (23, 'Santa Catarina');
	INSERT INTO UF VALUES (24, 'Sergipe');
	INSERT INTO UF VALUES (25, 'Sao Paulo');
	INSERT INTO UF VALUES (26, 'Tocantins');
    INSERT INTO UF VALUES (27, 'Amazonas');

create table departamento(
	codigo int primary key,
    nome varchar(100) not null
);
	
    insert into departamento values(1, "Marketing");
    insert into departamento values(2, "Manutenção");
    insert into departamento values(3, "Atendencia");
    insert into departamento values(4, "Tercerizados");
    insert into departamento values(5, "Administração");
    insert into departamento values(6, "Finanças");
    
create table setores(
	codigo int primary key,
    tipo varchar(50) not null
);		

	insert into setores values(1, "Açougue");
    insert into setores values(2, "Laticínio");
    insert into setores values(3, "Bebidas");
    insert into setores values(4, "Padaria");
    insert into setores values(5, "Cereais");
    insert into setores values(6, "Higiene");
    
    create table pessoa(
		CPF bigint primary key,
        nome varchar(100) not null,
        idade int not null,
        datanasc date not null,
        sexo char(1) not null,
        email varchar(100) not null,
        senha varchar(50) not null,
        cidade varchar(50) not null,
        UF int,
        telefone varchar(25) not null,
        status int,
        foreign key(UF) references UF(codigo),
        foreign key(status) references status(codigo)
    );
    
    insert into pessoa values(1, 'Hadassa', 16, '2006-01-22', 'F', 'hh@gmail.com', 'hh22', 'Patos', 14, '40028922',2);
    insert into pessoa values(2, 'Jhulia', 16, '2006-07-03', 'F', 'jj@gmail.com', 'jj03', 'Patos', 14, '40028922',2);
    insert into pessoa values(3, 'Anna Beatriz', 16, '2006-09-13', 'F', 'ab@gmail.com', 'ab22', 'Patos', 14, '40028922',2);
    insert into pessoa values(4, 'Nicole', 16, '2006-01-22', 'F', 'hh@gmail.com', 'hh22', 'Patos', 14, '40028922',1);
    insert into pessoa values(5, 'Heitor', 16, '2006-07-03', 'M', 'jj@gmail.com', 'jj03', 'Patos', 14, '40028922',1);
     insert into pessoa values(6, 'Kievilly', 16, '2006-07-03', 'f', 'jj@gmail.com', 'jj03', 'Patos', 14, '40028922',1);
     insert into pessoa values(7, 'Kievilly', 16, '2006-07-03', 'f', 'jj@gmail.com', 'jj03', 'Patos', 14, '40028922',1);
    
    create table funcionario(
		CPF bigint,
        turno int,
        departamento int,
        foreign key(CPF) references pessoa(CPF),
        foreign key(turno) references turno(codigo),
        foreign key(departamento) references departamento(codigo)
    );
    insert into funcionario values(4,1,1);
    insert into funcionario values(5,1,3);
    
    create table chefe(
		CPF bigint,
        turno int,
        departamento int,
		foreign key(CPF) references pessoa(CPF),
        foreign key(turno) references turno(codigo),
        foreign key(departamento) references departamento(codigo)
    );
    
    insert into chefe values(1,1,5);
    insert into chefe values(2,1,1);
    insert into chefe values(3,1,6);
    
    create table gerente(
		CPF bigint,
        turno int,
        departamento int,
		foreign key(CPF) references pessoa(CPF),
        foreign key(turno) references turno(codigo),
        foreign key(departamento) references departamento(codigo)
    );
    
    insert into gerente values(6,1,1);

    create table fornecedor(
		codigo bigint primary key,
        nome varchar(100) not null,
        UF int,
        cidade varchar(50) not null,
        telefone varchar(25) not null
    );
    insert into fornecedor values(1,'Sucesso',1, 'Paris', '1234');
    insert into fornecedor values(2,'Paz', 2, 'Caicó', '4321');
    
    create table produto(
		codigo int primary key,
        nome varchar(30) not null,
        valor float not null,
        datavalidade date not null,
        datafab date not null,
        lote int not null,
        codSet int,
        codfor bigint, 
        imagem varchar(100),
        foreign key(codSet) references setores(codigo),
        foreign key(codfor) references fornecedor(codigo)
    );
    
    insert into produto values(1,'Doce', 20.00, '2023-01-12', '2022-01-01', 10, 1,1,null);
    insert into produto values(2,'Amendoim', 10.00, '2024-01-01', '2022-01-12', 11, 2,2,null);
	insert into produto values(3,'Doce de banana', 20.00, '2023-01-12', '2022-01-01', 10, 1,1,null);
    insert into produto values(4,'Doce de goiaba', 20.00, '2023-01-12', '2022-01-01', 10, 1,2,null);    


    create table vendas(
		codprod int,
        codfun bigint,
        data date not null,
        primary key(codprod, codfun),
        foreign key(codprod) references produto(codigo),
        foreign key(codfun) references funcionario(CPF)
    );
    
    insert into vendas values(1,4,'2022-01-09');
    insert into vendas values(2,5,'2022-09-01');
    
   /* PROCEDIMENTOS*/
   
    delimiter |
    create procedure inserir(cod int, nome varchar(30), valor float, datavalidade date,
    datafab date, lote int, codset int, codfor bigint,imagem varchar(100))
    begin
		insert into produto values(cod, nome, valor, datavalidade, datafab, lote, codset, codfor,imagem);
    end;|

     delimiter |
    create procedure chama_chefe(codigo bigint)
    begin
		select p.CPF CPF_PESSOA, p.nome nome, c.CPF CPF_CHEFE
		from pessoa p, chefe c
		where p.CPF = c.CPF and
        c.CPF = codigo;
    end;
    |
    
    
    
    delimiter |
    create procedure chama_funcionario(codigo bigint)
    begin
		select p.CPF CPF_PESSOA, p.nome nome, f.CPF CPF_FUNCIONARIO
        from funcionario f, pessoa p
        where p.CPF = f.CPF and
        f.CPF = codigo;
        end;
    |
    
    delimiter |
create procedure chama_gerente(codigo bigint)
begin
	select p.CPF CPF_PESSOA, p.nome nome, g.CPF CPF_GERENTE
    from pessoa p, gerente g
    where p.CPF = g.CPF and
    g.CPF = codigo ;
    end;
|

/*VISÕES*/
     
     
     create view mostrar_prod as
     select p.*, v.data, v.codfun
     from produto p, vendas v 
     where p.codigo = v.codprod;
     
     
     create view pessoa_funcionario as
     select p.*, f.turno Turno, f.departamento Departamento 
     from pessoa p, funcionario f 
     where p.CPF = f.CPF;
     


	create view valores as
	select f.codigo FORNECEDOR, sum(p.valor) Valor_TOTAL
	from fornecedor f, produto p
	where f.codigo = p.codfor
	group by f.nome;


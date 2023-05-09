create database articleIA;
create table utilisateur(
    id serial primary key,
    nom varchar(50) not null,
    prenom varchar(50) not null,
    pseudo varchar(50) not null unique,
    mdp varchar(255) not null
);

create table admin(
    id serial primary key,
    identifiant varchar(20) not null,
    mdp varchar(255) not null
);

create table ia(
    id serial primary key,
    nom varchar(50) not null unique
);

create table article(
    id serial primary key,
    ia_id int not null references ia(id),
    utilisateur_id int not null references utilisateur(id),
    titre varchar(50) not null,
    description text not null,
    date date DEFAULT CURRENT_DATE,
    valide int not null DEFAULT 0,
    date_validation date,
    photo varchar(255) not null 
);

insert into ia (nom) values ('chat-gpt'),('Jasper');
insert into utilisateur(nom,prenom,pseudo,mdp) values ('Jean','Andria','J011','0000');
insert into admin (identifiant,mdp) values ('admin','0000');
insert into article (ia_id,titre,description,date,valide,date_validation,utilisateur_id,photo) values (1,'Update sur chat gpt','Chat gpt a effectue des mise a jour apres les differnet bug','2023-05-05',1,'2023-05-05',1,'chatgpt.jfif');

create database crop_foundation;

use crop_foundation;

create table member_privilege(
    id int not null,
    name varchar(32),
    primary key (id)
);

create table members(
    id int not null auto_increment,
    firstname varchar(32) not null,
    lastname varchar(64) not null,
    username varchar(255) not null unique,
    email varchar(255) not null unique,
    password varchar(255) not null,
    pp blob null,
    create_at timestamp default current_timestamp,
    primary key (id,email)
);
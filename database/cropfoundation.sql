# create database for crop foundation web app
create database crop_foundation;

# create member privileges table
create table crop_foundation.member_privilege
(
    id   int not null,
    name varchar(32),
    primary key (id)
);

# create member table
# this table consists members account details
# password encrypted via php program so here
# didn't use any encrypted column
create table crop_foundation.members
(
    id        int          not null auto_increment,
    firstname varchar(32)  not null,
    lastname  varchar(64)  not null,
    username  varchar(255) not null unique,
    email     varchar(255) not null unique,
    password  varchar(255) not null,
    pp        blob         null,
    create_at timestamp default current_timestamp,
    primary key (id, email)
);

create table crop_foundation.headlines
(
    head_id    int          not null auto_increment,
    head_body  varchar(128) not null,
    created_at timestamp default current_timestamp,
    primary key (head_id)
);

alter table crop_foundation.members
    add column dob timestamp null;
alter table crop_foundation.members
    change column pp pp longblob null;

# create product detail table
create table crop_foundation.price
(
    id       int          not null auto_increment,
    category varchar(255) not null,
    item     varchar(255) not null,
    unit     varchar(255) not null,
    price    double(5, 2) not null,

    primary key (id)
);

alter table crop_foundation.price
    add column prod_img longblob not null;



# create special user client for mysql server to
# handle web app connections
# to execute this section you need admin privileges
create user if not exists wt_bridge@localhost identified by 'wt2021#cis';
grant select, insert, update, delete on crop_foundation.* to wt_bridge@localhost;
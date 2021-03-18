# create database for crop foundation web app
create database crop_foundation;
use crop_foundation;

# create member privileges table
create table member_privilege(
    id int not null,
    name varchar(32),
    primary key (id)
);

# create member table
# this table consists members account details
# password encrypted via php program so here
# didn't use any encrypted column
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

# create special user client for mysql server to
# handle web app connections
# to execute this section you need admin privileges
create user if not exists wt_bridge@localhost;
grant select,insert,update,delete on crop_foundation.* to wt_bridge@localhost;
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
create table crop_foundation.product_dtl
(
    id       int          not null auto_increment,
    category varchar(255) not null,
    item     varchar(255) not null,
    unit     varchar(255) not null,
    price    double(5, 2) not null,

    primary key (id)
);

alter table crop_foundation.product_dtl
    add column prod_img longblob not null;
alter table crop_foundation.product_dtl
    add column details text not null;

create table crop_foundation.events
(
    event_id     int      not null auto_increment,
    event_date   datetime not null,
    headline     text     not null,
    content      longtext not null,
    event_banner longblob not null,

    primary key (event_id)
);

alter table crop_foundation.events
    add column location varchar(255) not null;

alter table crop_foundation.events
    add column cover_by varchar(255) not null;

# create comment table
create table crop_foundation.comments
(
    comment_id int          not null auto_increment,
    created_at datetime default current_timestamp,
    name       varchar(255) not null,
    comment    mediumtext   null,

    primary key (comment_id)
);

alter table crop_foundation.comments
    add column email varchar(255) not null;

create table crop_foundation.office
(
    office_id        int auto_increment
        primary key,
    city             varchar(255) not null,
    address          mediumtext   not null,
    primary_tel_no   varchar(20)  not null,
    secondary_tel_no varchar(20)  null
);

# create blog table
create table crop_foundation.blog
(
    post_id       int          not null auto_increment,
    publish_at    date         not null,
    author        varchar(255) not null,
    post_banner   longblob     null,
    post_headline mediumtext   not null,
    content       longtext     not null,

    primary key (post_id)
);

# analytical data tables
create table crop_foundation.agg_account
(
    year         int           not null,
    total_income double(12, 2) not null,
    per_AWU      int           not null,

    primary key (year)
);

create table crop_foundation.agg_change
(
    country_id int          not null auto_increment,
    country    varchar(255) not null,
    change_by  int default 0,

    primary key (country_id)
);

create table crop_foundation.agg_productivity_factor
(
    year                      int           not null,
    all_input                 double(12, 2) not null,
    all_output                double(12, 2) not null,
    total_productivity        double(12, 2) not null,
    prod_by_intermidete_consu double(12, 2) not null,
    prod_by_capital_consu     double(12, 2) not null,
    prod_by_labor             double(12, 2) not null,
    prod_by_land              double(12, 2) not null,

    foreign key (year) references agg_account (year)
);

create table crop_foundation.livestock_production
(
    year             int           not null,
    total_production double(12, 2) not null,
    total_vaue       double(12, 2) not null,

    foreign key (year) references agg_account (year)
);

create table crop_foundation.land_use
(
    year      int          not null,
    grassland double(5, 2) null,
    crops     double(5, 2) null,
    set_aside double(5, 2) null,
    uncropped double(5, 2) null,

    primary key (year)
);

create table crop_foundation.pesticide
(
    year              int          not null,
    Fungicides        double(5, 2) null,
    Growth_regulators double(5, 2) null,
    Herbicides        double(5, 2) null,
    Insecticides      double(5, 2) null,
    Molluscicides     double(5, 2) null,

    primary key (year)
);

create table crop_foundation.water_usage
(
    year              int          not null,
    Spray_irrigation  double(5, 2) null,
    Other_Agriculture double(5, 2) null,

    primary key (year)
);

create table crop_foundation.fertiliser_applied
(
    year                   int          not null,
    Cropped_land_nitrogen  double(5, 2) null,
    Grassland_nitrogen     double(5, 2) null,
    Cropped_land_phosphate double(5, 2) null,
    Grassland_phosphate    double(5, 2) null,

    primary key (year)
);

create table crop_foundation.emissions
(
    year                          int          not null,
    UK_total_nitrous_oxide        double(5, 2) null,
    Non_agriculture_nitrous_oxide double(5, 2) null,
    Agriculture_nitrous_oxide     double(5, 2) null,
    UK_total_methane              double(5, 2) null,
    Non_agriculture_methane       double(5, 2) null,
    Agriculture_methane           double(5, 2) null,
    Non_agriculture_ammonia       double(5, 2) null,
    Agriculture_ammonia           double(5, 2) null,

    primary key (year)
);

# create special user client for mysql server to
# handle web app connections
# to execute this section you need admin privileges
create user if not exists wt_bridge@localhost identified by 'wt2021#cis';
grant select, insert, update, delete on crop_foundation.* to wt_bridge@localhost;
# create database for crop foundation web app
create database crop_foundation;
use crop_foundation;

# create member privileges table
create table agg_account
(
    year         int           not null
        primary key,
    total_income double(12, 2) not null,
    per_AWU      int           not null
);

create table agg_change
(
    country_id int auto_increment
        primary key,
    country    varchar(255)  not null,
    change_by  int default 0 null
);

create table agg_productivity_factor
(
    year                      int           not null,
    all_input                 double(12, 2) not null,
    all_output                double(12, 2) not null,
    total_productivity        double(12, 2) not null,
    prod_by_intermidete_consu double(12, 2) not null,
    prod_by_capital_consu     double(12, 2) not null,
    prod_by_labor             double(12, 2) not null,
    prod_by_land              double(12, 2) not null,
    constraint agg_productivity_factor_ibfk_1
        foreign key (year) references agg_account (year)
);

create index year
    on agg_productivity_factor (year);

create table blog
(
    post_id       int auto_increment
        primary key,
    publish_at    date         not null,
    author        varchar(255) not null,
    post_banner   longblob     null,
    post_headline mediumtext   not null,
    content       longtext     not null
);

create table comments
(
    comment_id int auto_increment
        primary key,
    created_at datetime default current_timestamp() null,
    name       varchar(255)                         not null,
    comment    mediumtext                           null,
    email      varchar(255)                         not null
);

create table emissions
(
    year                          int          not null
        primary key,
    UK_total_nitrous_oxide        double(5, 2) null,
    Non_agriculture_nitrous_oxide double(5, 2) null,
    Agriculture_nitrous_oxide     double(5, 2) null,
    UK_total_methane              double(5, 2) null,
    Non_agriculture_methane       double(5, 2) null,
    Agriculture_methane           double(5, 2) null,
    Non_agriculture_ammonia       double(5, 2) null,
    Agriculture_ammonia           double(5, 2) null
);

create table events
(
    event_id     int auto_increment
        primary key,
    event_date   datetime     not null,
    headline     text         not null,
    content      longtext     not null,
    event_banner longblob     not null,
    location     varchar(255) not null,
    cover_by     varchar(255) not null
);

create table fertiliser_applied
(
    year                   int          not null
        primary key,
    Cropped_land_nitrogen  double(5, 2) null,
    Grassland_nitrogen     double(5, 2) null,
    Cropped_land_phosphate double(5, 2) null,
    Grassland_phosphate    double(5, 2) null
);

create table headlines
(
    head_id    int auto_increment
        primary key,
    head_body  varchar(128)                          not null,
    created_at timestamp default current_timestamp() not null
);

create table land_use
(
    year      int          not null
        primary key,
    grassland double(5, 2) null,
    crops     double(5, 2) null,
    set_aside double(5, 2) null,
    uncropped double(5, 2) null
);

create table livestock_production
(
    year             int           not null,
    total_production double(12, 2) not null,
    total_vaue       double(12, 2) not null,
    constraint livestock_production_ibfk_1
        foreign key (year) references agg_account (year)
);

create index year
    on livestock_production (year);

create table member_privilege
(
    id   int         not null
        primary key,
    name varchar(32) not null,
    path text        not null
);

create table members
(
    id        int auto_increment,
    firstname varchar(32)                           not null,
    lastname  varchar(64)                           not null,
    username  varchar(255)                          not null,
    email     varchar(255)                          not null,
    password  varchar(255)                          not null,
    pp        longblob                              null,
    create_at timestamp default current_timestamp() not null,
    dob       timestamp                             null,
    bio       tinytext                              null,
    primary key (id, email),
    constraint email
        unique (email),
    constraint username
        unique (username)
);

create table office
(
    office_id        int auto_increment
        primary key,
    city             varchar(255) not null,
    address          mediumtext   not null,
    primary_tel_no   varchar(20)  not null,
    secondary_tel_no varchar(20)  null
);

create table pesticide
(
    year              int          not null
        primary key,
    Fungicides        double(5, 2) null,
    Growth_regulators double(5, 2) null,
    Herbicides        double(5, 2) null,
    Insecticides      double(5, 2) null,
    Molluscicides     double(5, 2) null
);

create table product_dtl
(
    id       int auto_increment
        primary key,
    category varchar(255) not null,
    item     varchar(255) not null,
    unit     varchar(255) not null,
    price    double(5, 2) not null,
    prod_img longblob     not null,
    details  text         not null
);

create table water_usage
(
    year              int          not null
        primary key,
    Spray_irrigation  double(5, 2) null,
    Other_Agriculture double(5, 2) null
);


# create special user client for mysql server to
# handle web app connections
# to execute this section you need admin privileges
create user if not exists wt_bridge@localhost;
grant select,insert,update,delete on crop_foundation.* to wt_bridge@localhost;
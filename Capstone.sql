drop database if exists Capstone;
Create database Capstone;
Use Capstone;

create table sign_up_buyer(
buyer_id int not null auto_increment,
password varchar(60) not null, 
fname varchar (50),
lname varchar (50),
email varchar(50) unique,
phone int not null, 
primary key (buyer_id, email, phone));

create table sign_up_seller(
seller_id int not null auto_increment,
password varchar(60) not null, 
fname varchar (50),
lname varchar (50),
city varchar (50),
email varchar(50) unique,
phone int not null, 
primary key (seller_id, email, phone));

Create table buyer_profile(
buyer_id int not null auto_increment,
fname varchar (30),
lname varchar (30),
email varchar(50) unique,
phone int not null,
primary key (buyer_id, fname, lname, email, phone),
foreign key (buyer_id, email, phone) references sign_up_buyer (buyer_id, email, phone));

create table seller_profile(
seller_id int not null auto_increment,
fname varchar (30),
lname varchar (30),
email varchar(50) unique,
city varchar(50),
phone int, 
primary key (seller_id, fname, lname, email),
foreign key (seller_id, email, phone) references sign_up_seller (seller_id, email, phone));

create table seller_item(
item_id int not null auto_increment,
categories enum("SPORTS", "REAL ESTATE", "WATCHES", "VEHICLES", "JEWELRY", "ELECTRONICS"),
descriptions  varchar (100),
photo_dir varchar(255),
min_bid_price int,
buy_price int,
primary key(item_id, min_bid_price, buy_price));

create table buyers_on_auction(
buyer_id int not null auto_increment,
fname varchar(30),
lname varchar(30),
bid_price int,
date date,
time time,
primary key (bid_price),
foreign key (buyer_id, fname, lname) references buyer_profile (buyer_id, fname, lname));


create table sellers_on_auction(
seller_id int not null auto_increment,
fname varchar(30),
lname varchar(30),
bid_price int,
date date,
time time,
primary key (bid_price),
foreign key (seller_id, fname, lname) references seller_profile (seller_id, fname, lname));

create table buyer_dashboard_current(
item_id int not null auto_increment,
bid_price int, 
min_bid_price int, 
buy_price int,
date date,
foreign key(bid_price) references buyers_on_auction(bid_price), 
foreign key(item_id, min_bid_price) references seller_item(item_id, min_bid_price));

create table buyer_dashboard_history(
item_id int not null auto_increment,
bid_price int, 
min_bid_price int, 
buy_price int,
expired date,
foreign key(bid_price) references buyers_on_auction(bid_price), 
foreign key(item_id, min_bid_price) references seller_item(item_id, min_bid_price));

create table sellers_dashboard_current(
item_id int not null auto_increment,
bid_price int, 
min_bid_price int, 
buy_price int,
date date,
foreign key(bid_price) references sellers_on_auction(bid_price), 
foreign key(item_id, min_bid_price) references seller_item(item_id, min_bid_price));

create table sellers_dashboard_history(
item_id int not null auto_increment,
bid_price int, 
min_bid_price int, 
buy_price int,
expired date,
foreign key(bid_price) references sellers_on_auction(bid_price), 
foreign key(item_id, min_bid_price) references seller_item(item_id, min_bid_price));

show databases;
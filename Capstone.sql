drop database if exists Capstone;
Create database Capstone;
Use Capstone;

create table sign_up_buyer(
buyer_id int not null auto_increment,
username varchar(60) not null,
password varchar(60) not null, 
fname varchar (50) null,
lname varchar (50) not null,
email varchar(50) unique not null,
city varchar(50) not null,
phone varchar (50) not null, 
primary key (buyer_id, email, phone));

create table sign_up_seller(
seller_id int not null auto_increment,
username varchar(60) not null,
password varchar(60) not null, 
fname varchar (50) not null,
lname varchar (50) not null,
email varchar(50) unique not null,
city varchar(50) not null,
phone varchar (50) not null, 
primary key (seller_id, email, phone));

Create table buyer_profile(
buyer_id int not null auto_increment,
fname varchar (30)not null,
lname varchar (30) not null,
email varchar(50) unique,
phone varchar (50) not null, 
primary key (buyer_id, fname, lname, email, phone),
foreign key (buyer_id, email, phone) references sign_up_buyer (buyer_id, email, phone));

create table seller_profile(
seller_id int not null auto_increment,
fname varchar (30) not null,
lname varchar (30) not null,
email varchar(50) unique  not null,
city varchar(50) not null,
phone varchar (50) not null,  
primary key (seller_id, fname, lname, email),
foreign key (seller_id, email, phone) references sign_up_seller (seller_id, email, phone));

create table seller_item(
item_id int not null auto_increment,
categories enum("SPORTS", "REAL ESTATE", "WATCHES", "VEHICLES", "JEWELRY", "ELECTRONICS"),
descriptions  varchar (100),
image blob,
min_bid_price int not null,
title varchar(50) not null, 
buy_price int not null,
primary key(item_id, min_bid_price, buy_price));

create table buyers_on_auction(
buyer_id int not null auto_increment,
fname varchar(30) not null,
lname varchar(30) not null,
bid_price int not null,
date date,
time time,
primary key (bid_price),
foreign key (buyer_id, fname, lname) references buyer_profile (buyer_id, fname, lname));


create table sellers_on_auction(
seller_id int not null auto_increment,
fname varchar(30) not null,
lname varchar(30) not null,
bid_price int not null,
date date,
time time,
primary key (bid_price),
foreign key (seller_id, fname, lname) references seller_profile (seller_id, fname, lname));

create table buyer_dashboard_current(
item_id int not null auto_increment,
bid_price int not null, 
min_bid_price int not null, 
buy_price int not null,
date date,
foreign key(bid_price) references buyers_on_auction(bid_price), 
foreign key(item_id, min_bid_price) references seller_item(item_id, min_bid_price));

create table buyer_dashboard_history(
item_id int not null auto_increment,
bid_price int not null, 
min_bid_price int not null, 
buy_price int not null,
expired date,
foreign key(bid_price) references buyers_on_auction(bid_price), 
foreign key(item_id, min_bid_price) references seller_item(item_id, min_bid_price));

create table sellers_dashboard_current(
item_id int not null auto_increment,
bid_price int not null, 
min_bid_price int not null, 
buy_price int not null,
date date,
foreign key(bid_price) references sellers_on_auction(bid_price), 
foreign key(item_id, min_bid_price) references seller_item(item_id, min_bid_price));

create table sellers_dashboard_history(
item_id int not null auto_increment,
bid_price int not null, 
min_bid_price int not null, 
buy_price int not null,
expired date,
foreign key(bid_price) references sellers_on_auction(bid_price), 
foreign key(item_id, min_bid_price) references seller_item(item_id, min_bid_price));


create table bids(
bid_id int not null auto_increment,
bid_amount int not null,
bid_time date, 
winStatus enum ("won", "lost"),
primary key(bid_id)); 


insert into seller_item(Categories, descriptions, image, min_bid_price, title, buy_price)
values ("VEHICLES", "The car is brand new from Germany. It came in Ghana on 25th March 2020", load_file("C:/xampp/htdocs/Capstone/assets/images/auction/car/auction-2.jpg"), 10000, "2018 Nissan Versa",
44200);

select * from seller_item;

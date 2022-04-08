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
phone varchar (50) not null, 
city varchar(50) not null,
primary key (seller_id, email, phone));


create table seller_item(
item_id int not null auto_increment,
categories enum("SPORTS", "REAL ESTATE", "WATCHES", "VEHICLES", "JEWELRY", "ELECTRONICS"),
descriptions varchar (100) not null,
image varchar(255),
image1 varchar(255),
image2 varchar(255),
image3 varchar(255),
min_bid_price int not null,
title varchar(50) unique not null, 
buy_price int not null,
direction varchar(50),
location enum("ACCRA", "KUMASI", "CAPE COAST", "TAKORADI", "TEMALE", "KOFORIDUA", "WA", "BOLGATANGA"),
primary key(item_id, min_bid_price, buy_price));

create table buyers_on_auction(
buyer_id int not null auto_increment, 
bid_price int not null,
buy_price int not null, 
date date,
total_bids int not null,
winStatus enum ("won", "lost"), 
primary key (bid_price, buy_price),
foreign key (buyer_id) references sign_up_buyer (buyer_id));


create table sellers_on_auction(
seller_id int not null auto_increment,
bid_price int not null,
buy_price int not null, 
date date,
total_bids int not null,
winStatus enum ("won", "lost"), 
primary key (bid_price, buy_price),
foreign key (seller_id) references sign_up_seller (seller_id));

create table buyer_dashboard_all(
item_id int not null auto_increment,
title varchar(50) unique not null, 
bid_price int not null, 
min_bid_price int not null, 
buy_price int not null,
date date,
foreign key(bid_price, buy_price) references buyers_on_auction(bid_price, buy_price),
foreign key(title) references seller_item(title),
foreign key(item_id, min_bid_price) references seller_item(item_id, min_bid_price));

create table sellers_dashboard_all(
item_id int not null auto_increment,
title varchar(50) unique not null, 
bid_price int not null, 
min_bid_price int not null, 
buy_price int not null,
date date,
foreign key(bid_price, buy_price) references sellers_on_auction(bid_price, buy_price),
foreign key(title) references seller_item(title),
foreign key(item_id, min_bid_price) references seller_item(item_id, min_bid_price));


create table bids(
bid_id int not null auto_increment,
bid_amount int not null,
bid_time date, 
winStatus enum ("won", "lost"),
primary key(bid_id)); 

/* Inserting into the home page */
insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("VEHICLES", "The car is brand new from Germany. It came in Ghana on 25th March 2020", "assets/images/auction/car/2.jpg", "assets/images/auction/car/1.jpg", "assets/images/auction/car/3.jpg", "assets/images/auction/car/4.jpg",  "ACCRA", 18000, "1991 Nisssan 3000",
44200, "vehicle2_bid.php");

insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("VEHICLES", "The car is brand new from New York. It came in Ghana on 25th March 2020", "assets/images/product/11.webp", "assets/images/product/14.webp", "assets/images/product/12.webp", "assets/images/product/13.webp", "ACCRA", 12000, "2019 Hyundai Venue",
50000, "vehicle1_bid.php");

insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("VEHICLES", "The car is brand new from Germany. It came in Ghana on 25th March 2020", "assets/images/auction/car/mercy.jpg", "assets/images/auction/car/5.jpg", "assets/images/auction/car/6.jpg", "assets/images/auction/car/7.jpg", "KUMASI", 50000, "2020 Mercedes Benz",
130000, "vehicle3_bid.php");

/* Jewelry inserting */
insert into seller_item(categories, descriptions, image, image1, image2, location, min_bid_price, title, buy_price, direction)
values ("JEWELRY", "The ring consist of 20 cartons of diamond.", "assets/images/auction/jewelry/2.jpg", "assets/images/auction/jewelry/1.jpg", "assets/images/auction/jewelry/3.jpg", "KUMASI", 6000, "Diamond Engagement Ring",
20000, "jewelry1_bid.php");




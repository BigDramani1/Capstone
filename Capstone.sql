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

create table administration(
user_id int not null auto_increment,
username varchar(60) not null,
password varchar(60) not null,
primary key(user_id));

create table seller_item(
item_id int not null auto_increment,
categories enum("SPORTS", "REAL ESTATE", "WATCHES", "VEHICLES", "JEWELRY", "ELECTRONICS"),
descriptions varchar (500) not null,
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

/* inserting into admin */
insert into administration (username, password) values ("Admin", "4dm1n1str4t1on");
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
insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("JEWELRY", "The ring consist of 20 cartons of diamond.", "assets/images/auction/jewelry/2.webp", "assets/images/auction/jewelry/1.jpg", "assets/images/auction/jewelry/4.jpg","assets/images/auction/jewelry/3.jpg", "KUMASI", 2290, "Diamond Engagement Ring",
4500, "jewelry1_bid.php");

insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("JEWELRY", "This modern 22 Karat yellow gold ring features a flat band with its 2 ends meeting on top and enhanced with unique geometric cutouts", "assets/images/auction/jewelry/5.webp", "assets/images/auction/jewelry/6.webp", "assets/images/auction/jewelry/7.webp","assets/images/auction/jewelry/8.webp", "TAKORADI", 500, "22 Karat Yellow Gold",
1200, "jewelry2_bid.php");

insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("JEWELRY", "Elegantly encrusted with Chakri diamonds and a pear shaped onyx at the centre, this alluring ring is crafted in 18 Karat Yellow Gold.", "assets/images/auction/jewelry/9.webp", "assets/images/auction/jewelry/10.webp", "assets/images/auction/jewelry/11.webp","assets/images/auction/jewelry/9.webp", "TAKORADI", 500, "Flamboyant Gold Finger Ring",
1200, "jewelry3_bid.php");

/* Watches inserting */
insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("WATCHES", "The floral-motif dials of the new Datejust 31 are bursting with fresh energy and full of promise, combining three different finishes – sunray, matt and grained.High-technology finishing techniques were required to create this motif, a shining example of refined dial-making expertise. The textural effects are further 
enhanced by 24 diamonds of varying sizes, which illuminate the centre of each flower.", "assets/images/auction/watches/1.png", "assets/images/auction/watches/2.png", "assets/images/auction/watches/3.png","assets/images/auction/watches/4.png", "ACCRA", 7000, "Datejust 31",
25000, "watch1_bid.php");

insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("WATCHES", " This is watch is made of 22 diamonds. If your budget isn't good, don't even try", "assets/images/auction/watches/5.png", "assets/images/auction/watches/6.png", "assets/images/auction/watches/7.png","assets/images/auction/watches/5.png", "ACCRA", 9000, "SBGC240
Grand Seiko Sport",
25000, "watch2_bid.php");

insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("WATCHES", " This aesthetic and technical feat required many years of research to adapt the process of creating the fluting to ‘the noblest of metals’.
The ice-blue dial remains the distinctive marker of Rolex watches in 950 platinum.", "assets/images/auction/watches/8.png", "assets/images/auction/watches/9.png", "assets/images/auction/watches/10.png","assets/images/auction/watches/11.png", "ACCRA", 12000, "Date-Just 40",
32000, "watch3_bid.php"); 

/* Real estate inserting */
insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("REAL ESTATE", "This house is located at East legon with a peaceful environment to enjoy", "assets/images/auction/realstate/8.png", "assets/images/auction/realstate/11.jpg", "assets/images/auction/realstate/12.jpg","assets/images/auction/realstate/13.jpg", "ACCRA", 1200000, "Eight Bedroom House, East Legon",
3000000, "estate1_bid.php");
insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("REAL ESTATE", "This house is located at North legon with a peaceful environment to enjoy", "assets/images/auction/realstate/7.jpg", "assets/images/auction/realstate/14.jpg", "assets/images/auction/realstate/15.jpg","assets/images/auction/realstate/16.jpg", "ACCRA", 560000, "Three Bedroom House, North Legon",
3000000, "estate2_bid.php");
insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("REAL ESTATE", "This house is located at North legon with a peaceful environment to enjoy", "assets/images/auction/realstate/10.jpg", "assets/images/auction/realstate/17.jpg", "assets/images/auction/realstate/18.jpg","assets/images/auction/realstate/19.jpg", "ACCRA", 560000, "Two Bedroom House, Tema Community 16",
3000000, "estate3_bid.php");

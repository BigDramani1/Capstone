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
title varchar(50) not null,
buy_price int not null,
direction varchar(50),
location enum("ACCRA", "KUMASI", "CAPE COAST", "TAKORADI", "TEMALE", "KOFORIDUA", "WA", "BOLGATANGA"),
primary key(item_id, min_bid_price, buy_price));

create table buyers_bid(
bid_count int not null auto_increment,
buyer_id int not null,
item_id int not null,
min_bid_price int not null,
title varchar(50) not null,
buy_price int not null,
days datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
primary key(bid_count));


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

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("VEHICLES",  "assets/images/auction/car/02.png","ACCRA", 8000, "2017 Harley-Davidson XG750", 140000, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("VEHICLES",  "assets/images/auction/car/04.png","ACCRA", 28000, "2014 Kia Sorento", 70000, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("VEHICLES",  "assets/images/auction/car/07.png","ACCRA", 51000, "2019 Hyundai", 90000, "#0.php");


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

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("JEWELRY",  "assets/images/auction/jewelry/11.png","ACCRA", 54, "Gold bracelet", 200, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("JEWELRY",  "assets/images/auction/jewelry/12.png","KUMASI", 43, "Gold and Bronze ring", 80, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("JEWELRY",  "assets/images/auction/jewelry/13.png","TEMALE", 89, "Affordable bracelet", 300, "#0.php");


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

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("WATCHES",  "assets/images/auction/watches/4.webp","ACCRA", 2000, "Grand Seiko Sports", 4300, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("WATCHES",  "assets/images/auction/watches/5.webp","ACCRA", 900, "Grand Seiko", 3267, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("WATCHES",  "assets/images/auction/watches/7.webp","ACCRA", 1245, "Omega Watch", 5643, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("WATCHES",  "assets/images/auction/watches/8.webp","ACCRA", 1005, "Tudor Watch", 2342, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("WATCHES",  "assets/images/auction/watches/6.webp","ACCRA", 3765, "Breitling", 4400, "#0.php");

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

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("REAL ESTATE", "assets/images/house/4.jpg","ACCRA", 285000, "Four Bedroom House, Tesano", 450000, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("REAL ESTATE", "assets/images/house/5.jpg","ACCRA", 234000, "Three Bedroom House, Trasacco", 700000, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("REAL ESTATE", "assets/images/house/1.jpg","ACCRA", 31000, "Two Bedroom House, Awoshie", 50000, "#0.php");


/* Sports inserting */
insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("SPORTS", "This is steph Curry's jersey original", "assets/images/sports/6.webp", "assets/images/sports/steph1.webp", "assets/images/sports/steph2.jpg","assets/images/sports/steph3.webp", "ACCRA", 150, "Steph Curry's Jersey", 300, "sport1_bid.php");

insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("SPORTS", "Kyrie 7 basketball shoes", "assets/images/sports/k1.webp", "assets/images/sports/k2.webp", "assets/images/sports/k3.webp","assets/images/sports/k4.webp", "ACCRA", 250, "Kyrie 7 Red", 450, "sport2_bid.php");

insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("SPORTS", "Real madrid mini full kit for kids", "assets/images/sports/real.webp", "assets/images/sports/real2.webp", "assets/images/sports/real3.webp","assets/images/sports/real4.webp", "ACCRA", 400, "Real Madrid Green Full Kit", 600, "sport3_bid.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("SPORTS",  "assets/images/sports/12.jpg","ACCRA", 323, "CR7 Boot", 1200, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("SPORTS",  "assets/images/sports/3.jpg","ACCRA", 100, "Molten Basketball", 250, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("SPORTS",  "assets/images/sports/44.jpg","ACCRA", 789, "Adidas Boot", 1500, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("SPORTS",  "assets/images/sports/14.webp","ACCRA", 120, "Women Sportkit Full Outfit ", 350, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("SPORTS",  "assets/images/sports/15.webp","ACCRA", 40, "Women jogging shirt", 80, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("SPORTS",  "assets/images/sports/16.webp","ACCRA", 30, "Women Sport Bra", 60, "#0.php");

/* Inserting into electronics */
insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("ELECTRONICS", "The Victus by HP 16.1 inch Gaming Laptop PC has what you need to play. It has a powerful Intel® processor 2, great graphics and an upgraded cooling system. Plus a high resolution, fast display and OMEN Gaming Hub. This has all of that.", "assets/images/electronics/v1.png","assets/images/electronics/v2.png", "assets/images/electronics/v3.png","assets/images/electronics/v4.png", "ACCRA", 400, "Hp Victus 16 gaming pc", 600, "elec1_bid.php");

insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("ELECTRONICS", "Iphone X 256 home used cool price.", "assets/images/electronics/i4.avif","assets/images/electronics/i1.jpg", "assets/images/electronics/i2.jpg","assets/images/electronics/i3.jpg", "ACCRA", 2000, "Iphone X 256gb", 5000, "elec2_bid.php");

insert into seller_item(categories, descriptions, image, image1, image2, image3, location, min_bid_price, title, buy_price, direction)
values ("ELECTRONICS", "Optimized video, optimized sensitivity, optimized speed, the Sony a7S III raises the bar for what a full-frame mirrorless camera is capable of. A revised 12.1MP Exmor R BSI CMOS sensor and updated BIONZ XR image processor offer faster performance, improved noise reduction, and a wider dynamic range, along with UHD 4K 120p video recording and internal 10-bit 4:2:2 sampling.", 
"assets/images/electronics/c1.jpg","assets/images/electronics/c2.jpg", "assets/images/electronics/c3.jpg","assets/images/electronics/c4.jpg", "ACCRA", 2000, "Sony a7S III Mirrorless Camera", 5000, "elec3_bid.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("ELECTRONICS",  "assets/images/electronics/10.jpg","ACCRA", 30, "Xiami Redmi Not 10 Pro", 60, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("ELECTRONICS",  "assets/images/electronics/4.jpg","ACCRA", 30, "HP Envy with GTX", 60, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("ELECTRONICS",  "assets/images/electronics/8.jpg","ACCRA", 30, "BHS-300 Headphones", 60, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("ELECTRONICS",  "assets/images/electronics/5.jpg","ACCRA", 30, "Coffee Machine", 60, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("ELECTRONICS",  "assets/images/electronics/6.jpg","ACCRA", 30, "4K Security Camera", 60, "#0.php");

insert into seller_item(categories, image, location, min_bid_price, title, buy_price, direction)
values ("ELECTRONICS",  "assets/images/electronics/3.jpg","ACCRA", 30, "Apple Nike Series 7", 60, "#0.php");


/* buyers information */ 
insert into sign_up_buyer (username, password, fname, lname, email, city, phone) values ("Gangster", "Gameover69", "Joseph", "Darko", "Josephdarko65@gmail.com", "ACCRA", "+233 546473732");
insert into sign_up_buyer (username, password, fname, lname, email, city, phone) values ("Grim_Reaper", "Gameover69", "Eben", "Kwampong", "k.eben@gmail.com", "KUMASI", "+233 546475532");
insert into sign_up_buyer (username, password, fname, lname, email, city, phone) values ("Money_Boy", "Gameover69", "Enock", "Darko", "enock.r33@gmail.com", "TAKORADI", "+233 246473731");
insert into sign_up_buyer (username, password, fname, lname, email, city, phone) values ("Stone69", "Gameover69", "Kwame", "Achempong", "a.kwame@gmail.com", "TEMALE", "+233 244473732");
insert into sign_up_buyer (username, password, fname, lname, email, city, phone) values ("Ice_Cold", "Gameover69", "Xavier", "Mettle", "x.mettle@aisghana.org", "KUMASI", "+233 201473732");
insert into sign_up_buyer (username, password, fname, lname, email, city, phone) values ("GodFather", "Gameover69", "Ben", "Brigidi", "b.brigidi@aisghana.org", "ACCRA", "+233 266473732");

/* Sellers information */
insert into sign_up_seller (username, password, fname, lname, email, city, phone) values ("ADBreezy", "Gameover69", "Andrew", "Dancun", "a.dancun34@gmail.com", "ACCRA", "+233 546333732");
insert into sign_up_seller (username, password, fname, lname, email, city, phone) values ("MEZZ", "Gameover69", "Myles", "Brown", "mylesbrown65@gmail.com", "ACCRA", "+233 243567898");
insert into sign_up_seller (username, password, fname, lname, email, city, phone) values ("papa", "Gameover69", "Samuel", "Mansu", "samuelmansu43@gmail.com", "CAPE COAST", "+233 546331234");
insert into sign_up_seller (username, password, fname, lname, email, city, phone) values ("Bologs", "Gameover69", "Mike", "Bologoa", "mikebologa343@gmail.com", "KUMASI", "+233 546335678");
insert into sign_up_seller (username, password, fname, lname, email, city, phone) values ("JAEB", "Gameover69", "Jacinta", "Badu", "jacintabadu586@gmail.com", "KUMASEI", "+233 546339012");
insert into sign_up_seller (username, password, fname, lname, email, city, phone) values ("SexyBlinks", "Gameover69", "Benedicta", "Atiapah", "benz44@yahoo.com", "ACCRA", "+233 546333700");

select * from buyers_bid;

select  max(bid_count)
 from buyers_bid as total;



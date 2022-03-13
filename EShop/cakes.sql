create database if not exists bakery;

use bakery;

create table cakes (
	id int,
    name varchar(50),
    type varchar(50),
    cost float,
    qty int,
    image varchar(200),
    primary key (id)
);

insert into cakes values (
	1,
    'Cherry Blossom',
    'Floral',
	45,
    10,
    './img/pdt/1.jpeg'
);

insert into cakes values (
	2,
    'Ombre Rosette',
    'Floral',
	50,
    15,
    './img/pdt/2.jpeg'
);

insert into cakes values (
	3,
    'Rustic Nature',
    'Simple',
	55,
    17,
    './img/pdt/3.jpeg'
);

insert into cakes values (
	4,
    'Macaron',
    'Simple',
	60,
    11,
    './img/pdt/4.jpeg'
);

insert into cakes values (
	5,
    'Astronaut Explorer',
    'Galaxy',
	85,
    6,
    './img/pdt/5.jpeg'
);

insert into cakes values (
	6,
    'Majestic Galaxy',
    'Galaxy',
	75,
    10,
    './img/pdt/6.jpeg'
);

insert into cakes values (
	7,
    'Mahjong Extraordinaire',
    'Local',
	120,
    5,
    './img/pdt/7.jpeg'
);

insert into cakes values (
	8,
    'Bubble Tea',
    'Local',
	90,
    1,
    './img/pdt/8.jpeg'
);

insert into cakes values (
	9,
    'Fruity Galore',
    'Fruity',
	45,
    5,
    './img/pdt/9.jpeg'
);

insert into cakes values (
	10,
    'Strawberry Shortcake',
    'Fruity',
	58,
    12,
    './img/pdt/10.jpeg'
);




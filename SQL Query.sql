use sample;


create table sido
( sidoCode int not null,
sidoName varchar(8) not null,
PRIMARY KEY (sidoCode));

create table sigungu
( sigunguCode int not null,
sigunguName varchar(8) not null,
sidoCode int not null,
PRIMARY KEY(sigunguCode),
foreign key(sidoCode) REFERENCES sido(sidoCode));


create table shelter
( shelterNum int not null,
shelterName varchar(20) not null,
sidoCode int not null,
sigunguCode int not null,
PRIMARY KEY(shelterNum),
FOREIGN KEY(sidoCode) REFERENCES sido(sidoCode),
FOREIGN KEY(sigunguCode) REFERENCES sigungu(sigunguCode));


create table category
(categoryID int not null,
categoryName varchar(5) not null,
PRIMARY KEY(categoryID)
);
create table kind
(kindCode int not null,
kindName varchar(15) not null,
categoryID int not null,
PRIMARY KEY(kindCode),
FOREIGN KEY(categoryID) REFERENCES category(categoryID));



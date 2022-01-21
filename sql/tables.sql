DROP DATABASE IF EXISTS AutoCat;
CREATE DATABASE AutoCat;
DROP TABLE IF EXISTS cats;
CREATE TABLE cats (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    gender CHAR(1),
    name VARCHAR(30),
    birthdate DATE,
    breed VARCHAR(40),
    furColor VARCHAR(20),
    furLength VARCHAR(5),
    chipNumber VARCHAR(20),
    preferences VARCHAR(500),
    adoptionStatus VARCHAR(30)
    );
DROP TABLE IF EXISTS adopters;
CREATE TABLE adopters (
    id INTEGER  PRIMARY KEY AUTO_INCREMENT,
    firstName VARCHAR(20),
    lastName VARCHAR(50),
    email VARCHAR(50),
    dateOfBirth	DATE,
    gender	CHAR(1),
    street	VARCHAR(50),
    number	VARCHAR(20),
    city	VARCHAR(30),
    zipCode	VARCHAR(10),
    phonenumber	VARCHAR(15),
    housing	VARCHAR(15),
    ownGarden INTEGER,
    ownPen INTEGER,
    experiencedCats	INTEGER,
    experiencedPets	INTEGER,
    hasVet	INTEGER,
    allowedOutside	INTEGER,
    hoursAlone	INTEGER,
    preferences	VARCHAR(300)
    );
DROP TABLE IF EXISTS catRelations;
CREATE TABLE catRelations (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    cat1Id INTEGER,
    cat2Id INTEGER,
    relation VARCHAR(10)
);
DROP TABLE IF EXISTS adopterRoommates;
CREATE TABLE adopterRoommates (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    adopterId INTEGER,
    relation VARCHAR(10),
    age INTEGER,
    allergic INTEGER,
    permission INTEGER
);
DROP TABLE IF EXISTS adopterPets;
CREATE TABLE adopterPets (
    id INTEGER  PRIMARY KEY AUTO_INCREMENT,
    adopterId INTEGER,
    species VARCHAR(10),
    age INTEGER,
    usedToCats INTEGER,
    personality INTEGER
);
DROP TABLE IF EXISTS vetVisits;
CREATE TABLE vetVisits (
    id INTEGER  PRIMARY KEY AUTO_INCREMENT,
    catId INTEGER,
    date DATE,
    reason VARCHAR(244),
    comments VARCHAR(244)
);
DROP TABLE IF EXISTS fosterFamilies;
CREATE TABLE fosterFamilies (
    id INTEGER  PRIMARY KEY AUTO_INCREMENT,	
    firstName VARCHAR(20),	
    lastName VARCHAR(50),	
    dateOfBirth DATE,	
    street VARCHAR(50),	
    number VARCHAR(20),	
    city VARCHAR(30),	
    zipCode VARCHAR(10),	
    email VARCHAR(50),	
    availableSpots INTEGER,	
    preferences VARCHAR(300)	
);
DROP TABLE IF EXISTS fosterPets;
CREATE TABLE fosterPets (
    id INTEGER  PRIMARY KEY AUTO_INCREMENT,
    fosterfamilyId INTEGER,
    species VARCHAR(10),
    age INTEGER
);
DROP TABLE IF EXISTS fosterRoommates;
CREATE TABLE fosterRoommates (
    id INTEGER  PRIMARY KEY AUTO_INCREMENT,
    fosterfamilyId INTEGER,
    relation VARCHAR(10),
    age INTEGER
);
DROP TABLE IF EXISTS catPictures;
CREATE TABLE catPictures (
    id INTEGER  PRIMARY KEY AUTO_INCREMENT,
    catId INTEGER,
    photoId INTEGER
);

DROP TABLE IF EXISTS shelters;
CREATE TABLE shelters (
    id INTEGER  PRIMARY KEY AUTO_INCREMENT,
    shelterName VARCHAR(50),
    shelterPhonenumber VARCHAR(75),
    email VARCHAR(50),
    hkNumber VARCHAR(30),
    firstName VARCHAR(20),
    lastName VARCHAR(50),
    dateOfBirth DATE,
    street VARCHAR(50),
    number VARCHAR(20),
    city VARCHAR(30),
    zipCode VARCHAR(10),
    gender CHAR(1),
    phonenumber VARCHAR(15)
);
DROP TABLE IF EXISTS weighings;
CREATE TABLE weighings (
    id INTEGER  PRIMARY KEY AUTO_INCREMENT,
    catId INTEGER,
    date DATE,
    weight INTEGER
);

DROP TABLE IF EXISTS notifications;
CREATE TABLE notifications (
    id INTEGER  PRIMARY KEY AUTO_INCREMENT,
    catId INTEGER,
    shelterId INTEGER,
    message VARCHAR(255)
);

ALTER TABLE catRelations ADD FOREIGN KEY (cat1Id) REFERENCES cats (id) ON DELETE CASCADE;
ALTER TABLE catRelations ADD FOREIGN KEY (cat2Id) REFERENCES cats (id) ON DELETE CASCADE;
ALTER TABLE adopterRoommates ADD FOREIGN KEY (adopterId) REFERENCES adopters (id) ON DELETE CASCADE;
ALTER TABLE adopterPets ADD FOREIGN KEY (adopterId) REFERENCES adopters (id) ON DELETE CASCADE;
ALTER TABLE vetVisits ADD FOREIGN KEY (catId) REFERENCES cats (id) ON DELETE CASCADE;
ALTER TABLE fosterPets ADD FOREIGN KEY (fosterfamilyId) REFERENCES fosterFamilies (id) ON DELETE CASCADE;
ALTER TABLE fosterRoommates ADD FOREIGN KEY (fosterfamilyId) REFERENCES fosterFamilies (id) ON DELETE CASCADE;
ALTER TABLE catPictures ADD FOREIGN KEY (catId) REFERENCES cats (id) ON DELETE CASCADE;
ALTER TABLE weighings ADD FOREIGN KEY (catId) REFERENCES cats (id) ON DELETE CASCADE;
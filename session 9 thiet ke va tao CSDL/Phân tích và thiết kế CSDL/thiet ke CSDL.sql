CREATE DATABASE quanly_thuvien;

CREATE TABLE categories(
	categoryCode varchar(15) PRIMARY KEY,
    categoryName varchar(255),
    description longtext
);
CREATE table book(
	book_number varchar(15) PRIMARY KEY,
    book_name varchar(50),
    status varchar(100),
    publisher varchar(255),
    categoryCode varchar(15),
    FOREIGN KEY (categoryCode) REFERENCES categories(categoryCode)
);
CREATE TABLE students(
    studen_number varchar(15) PRIMARY KEY ,
    studen_name varchar(200),
    address varchar (200),
    email varchar(200),
    image mediumblob
);
CREATE TABLE borroworder(
    studen_name varchar(200),
	studen_number varchar(15) PRIMARY KEY,
    date_order  date,
    date_return date,
    book_number varchar(15),
    FOREIGN KEY (book_number) REFERENCES book(book_number),
    FOREIGN KEY (studen_number) REFERENCES students(studen_number)
);
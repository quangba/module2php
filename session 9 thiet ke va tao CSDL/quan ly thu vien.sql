CREATE DATABASE library_management

CREATE TABLE student
(
    student_number VARCHAR(50) PRIMARY KEY,     --mã sinh viên
    student_name VARCHAR(200),
    addresss VARCHAR(255),
    email VARCHAR(120),
);
CREATE TABLE borroworder            -- khoản vay
(
    date_order date,
    date_return date,
    student_number VARCHAR(50) PRIMARY KEY,
    student_name VARCHAR(200),
    book_number VARCHAR(50),
    FOREIGN KEY(student_number) REFERENCES student(student_number)    
);
CREATE TABLE categories                 -- thể loại
(
    categoriesCode VARCHAR(15) PRIMARY KEY,             -- thể loại mã
    categoriesName VARCHAR(255),            --tên thể loại
    textDecription VARCHAR(255),            -- mô tả
);
CREATE TABLE book
(
    book_number VARCHAR(50) PRIMARY KEY,
    book_name VARCHAR(50),
    statuss VARCHAR(100),
    publisher VARCHAR(255),                     -- nhà xuất bản
     categoriesCode VARCHAR(15),
     FOREIGN KEY(categoriesCode) REFERENCES categories(categoriesCode)
);
ALTER TABLE borroworder add FOREIGN KEY(book_number) REFERENCES book(book_number) 
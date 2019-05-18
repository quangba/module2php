CREATE DATABASE khoachinhorkhoangoai

CREATE TABLE Customers 
(
    customers_MKH int not NULL primary KEY,
    fullname VARCHAR(50) not NULL,
    addres VARCHAR (50),
    email VARCHAR (100),
    phone VARCHAR(100)
)
CREATE TABLE accounts 
(
    accounts_number int not NULL primary KEY,  -- số tài khoản
    accounts_type VARCHAR(50) not NULL,         -- loại tài khoản
    ngay DATE,                                  -- ngày tạo tài khoản
    balance  int not NULL,    -- số dư
    customers_MKH int not NULL,
    FOREIGN KEY(customers_MKH) REFERENCES Customers(customers_MKH)
)

CREATE TABLE transactions
(
    tran_number int not null PRIMARY KEY,       -- mã giao dịch
    amuonts int not null,               -- số tiền giao dịch
    descriptions VARCHAR(255),                 -- mô tả giao dịch
    accounts_number int not NULL,
    FOREIGN key (accounts_number) REFERENCES accounts(accounts_number)
)
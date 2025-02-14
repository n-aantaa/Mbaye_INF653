CREATE DATABASE my_guitar_shop2;
USE my_guitar_shop2;

CREATE TABLE Customers (
    customerID INT PRIMARY KEY AUTO_INCREMENT,
    emailAddress VARCHAR(255) UNIQUE NOT NULL,
    firstName VARCHAR(100) NOT NULL,
    lastName VARCHAR(100) NOT NULL,
    phone VARCHAR(15)
);

CREATE TABLE Addresses (
    addressID INT PRIMARY KEY AUTO_INCREMENT,
    customerID INT,
    line1 VARCHAR(255) NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(50) NOT NULL,
    zipCode VARCHAR(10) NOT NULL,
    FOREIGN KEY (customerID) REFERENCES Customers(customerID) ON DELETE CASCADE
);

INSERT INTO Customers (emailAddress, firstName, lastName, phone) VALUES
('john.doe@example.com', 'John', 'Doe', '555-1234'),
('jane.smith@example.com', 'Jane', 'Smith', '555-5678'),
('bob.johnson@example.com', 'Bob', 'Johnson', '555-8765'),
('alice.white@example.com', 'Alice', 'White', '555-4321'),
('charlie.brown@example.com', 'Charlie', 'Brown', '555-1111'),
('david.clark@example.com', 'David', 'Clark', '555-2222'),
('emma.jones@example.com', 'Emma', 'Jones', '555-3333'),
('frank.harris@example.com', 'Frank', 'Harris', '555-4444'),
('grace.lee@example.com', 'Grace', 'Lee', '555-5555'),
('henry.martin@example.com', 'Henry', 'Martin', '555-6666'),
('irene.thomas@example.com', 'Irene', 'Thomas', '555-7777'),
('jack.wilson@example.com', 'Jack', 'Wilson', '555-8888'),
('karen.moore@example.com', 'Karen', 'Moore', '555-9999'),
('leo.anderson@example.com', 'Leo', 'Anderson', '555-0000'),
('molly.evans@example.com', 'Molly', 'Evans', '555-1010'),
('nick.adams@example.com', 'Nick', 'Adams', '555-2020'),
('olivia.hall@example.com', 'Olivia', 'Hall', '555-3030'),
('peter.baker@example.com', 'Peter', 'Baker', '555-4040'),
('quinn.roberts@example.com', 'Quinn', 'Roberts', '555-5050'),
('rachel.carter@example.com', 'Rachel', 'Carter', '555-6060');

INSERT INTO Address (customerID, line1, city, state, zipCode) VALUES
(1, '123 Main St', 'New York', 'NY', '10001'),
(2, '456 Elm St', 'Los Angeles', 'CA', '90001'),
(3, '789 Oak St', 'Chicago', 'IL', '60601'),
(4, '321 Maple St', 'Houston', 'TX', '77001'),
(5, '654 Pine St', 'Phoenix', 'AZ', '85001'),
(6, '987 Cedar St', 'Philadelphia', 'PA', '19101'),
(7, '159 Birch St', 'San Antonio', 'TX', '78201'),
(8, '753 Walnut St', 'San Diego', 'CA', '92101'),
(9, '852 Cherry St', 'Dallas', 'TX', '75201'),
(10, '951 Aspen St', 'San Jose', 'CA', '95101'),
(11, '369 Spruce St', 'Austin', 'TX', '73301'),
(12, '147 Fir St', 'Jacksonville', 'FL', '32099'),
(13, '258 Poplar St', 'San Francisco', 'CA', '94101'),
(14, '369 Magnolia St', 'Columbus', 'OH', '43085'),
(15, '741 Cypress St', 'Indianapolis', 'IN', '46201'),
(16, '852 Dogwood St', 'Fort Worth', 'TX', '76101'),
(17, '963 Redwood St', 'Charlotte', 'NC', '28201'),
(18, '159 Chestnut St', 'Seattle', 'WA', '98101'),
(19, '357 Palm St', 'Denver', 'CO', '80201'),
(20, '258 Holly St', 'Boston', 'MA', '02101');

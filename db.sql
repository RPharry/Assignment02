-- Creating the Database

create Database dbbook;
use dbbook;

-- Creating the books table

CREATE TABLE `dbbook`.`tbbookinfo` (`srno` INT NOT NULL AUTO_INCREMENT , `bookName` VARCHAR(100) NOT NULL , `author` VARCHAR(100) NOT NULL , `pblshngcmpny` VARCHAR(100) NOT NULL , `releaseDate` DATE NOT NULL , `status` VARCHAR(10) NOT NULL , UNIQUE (`srno`, `bookName`)) ENGINE = InnoDB;

-- Dumping values into the books table

INSERT INTO `tbbookinfo` (`srno`, `bookName`, `author`, `pblshngcmpny`, `releaseDate`, `status`) VALUES ('1', 'To Kill a Mockingbird', 'Harper Lee', 'Arrow Books', '1989-03-17', 'available'), (NULL, 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', 'Plata Publishing', '2011-03-23', 'available'), (NULL, 'The Alchemist', 'Paulo Coelho', 'Harper Collins Publishers', '2007-07-25', 'available'), (NULL, 'Promise me a Million Times', 'Keshav Aneel', 'Srishti Publishers and Distributors', '2016-08-30', 'available'), (NULL, 'The Third Eye', 'Sumana D. Choudhary', 'Locksley Hall Publishing LLP', '2015-01-23', 'available'), (NULL, 'Think and Grow Rich', 'Napoleon Hill', 'Bellmont Publishing House', '2021-12-31', 'available');


-- creating the admin table

CREATE TABLE `dbbook`.`tbadmin` (`srno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `userName` VARCHAR(20) NOT NULL , `password` VARCHAR(20) NOT NULL , PRIMARY KEY (`srno`)) ENGINE = InnoDB;

-- dumping values into the admin table

INSERT INTO `tbadmin` (`srno`, `name`, `userName`, `password`) VALUES ('1', 'Karan', 'karanjoshi2002', 'Casey@2002'), (NULL, 'Sahil', 'smaini0077', 'smaini0077');
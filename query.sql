<!-- SQL Queries -->
CREATE TABLE `cgs`.`admins` ( `aid` INT(10) NOT NULL , `firstname` VARCHAR(30) NOT NULL , `lastname` VARCHAR(30) NOT NULL , `dept` VARCHAR(30) NOT NULL , `username` VARCHAR(30) NOT NULL , `mail` VARCHAR(50) NOT NULL , `pwd` VARCHAR(100) NOT NULL , PRIMARY KEY (`aid`)) ENGINE = InnoDB;



CREATE TABLE `cgs`.`complaints` ( `token` VARCHAR(40) NOT NULL , `to` VARCHAR(10) NOT NULL , `dept` VARCHAR(15) NOT NULL , `catg` VARCHAR(20) NOT NULL , `name` VARCHAR(50) NOT NULL , `roll` VARCHAR(20) NOT NULL , `addr` VARCHAR(100) NOT NULL , `pin` VARCHAR(20) NOT NULL , `contact` VARCHAR(10) NOT NULL , `email` VARCHAR(50) NOT NULL , `descrip` TEXT NOT NULL , PRIMARY KEY (`token`)) ENGINE = InnoDB;
CREATE TABLE `ddform`.`dd_data` (
    `Date` DATE NOT NULL,
    `DD_Number` VARCHAR(20) NOT NULL,
    `From` VARCHAR(25) NOT NULL,
    `To` VARCHAR(25) NOT NULL,
    `Amount_N` INT NOT NULL,
    `Amount_W` VARCHAR(100) NOT NULL,
    `Bank` VARCHAR(20) NOT NULL,
    `Branch` VARCHAR(30) NOT NULL,
    `Purpose` VARCHAR(150) NOT NULL,
    PRIMARY KEY (`DD_Number`)
);

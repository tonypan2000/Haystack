CREATE TABLE `haystack`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    `type` INT NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE (`username`)
) ENGINE = InnoDB;
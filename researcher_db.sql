CREATE TABLE `haystack`.`researcher_data` (
  `id` INT NOT NULL ,
  `username` VARCHAR(50) NOT NULL ,
  `name` VARCHAR(50) NOT NULL ,
  `title` INT NOT NULL DEFAULT '1' ,
  `email` VARCHAR(50) NOT NULL ,
  `school` VARCHAR(50) NOT NULL ,
  `department` VARCHAR(50) NOT NULL ,
  `password` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id`),
  UNIQUE (`username`),
  UNIQUE (`email`)
)
ENGINE = InnoDB;

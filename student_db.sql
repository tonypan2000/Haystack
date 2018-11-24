CREATE TABLE `haystack`.`student_data` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(50) NOT NULL ,
  `name` VARCHAR(50) NOT NULL ,
  `email` VARCHAR(50) NOT NULL ,
  `school` VARCHAR(50) NOT NULL ,
  `password` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id`),
  UNIQUE (`username`),
  UNIQUE (`email`),
  FULLTEXT (`name`)
)
ENGINE = InnoDB;

CREATE TABLE student
(
  id              INT unsigned NOT NULL AUTO_INCREMENT, # Unique ID for the record
  name            VARCHAR(150) NOT NULL,                # Name of the student
  email           VARCHAR(150) NOT NULL,
  school          VARCHAR(150) NOT NULL,
  password        VARCHAR(150) NOT NULL,
  PRIMARY KEY     (id)                                  # Make the id the primary key
);

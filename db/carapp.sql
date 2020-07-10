-- CREATE DATABASE IF NOT EXISTS car_application;
-- USE car_application;



-- CREATE TABLE IF NOT EXISTS car_app (
--     id INT(10) NOT NULL AUTO_INCREMENT,
--     firstname VARCHAR(50) NOT NULL,
--     lastname VARCHAR(50) NOT NULL,
--     email VARCHAR(50) NOT NULL,
--     password VARCHAR(200) NOT NULL,
--     description TEXT,
--     image VARCHAR(50) DEFAULT 'default.png',
--     PRIMARY KEY(id)
-- ) ENGINE=InnoDB DEFAULT CHARSET=UTF8;




-- INSERT INTO car_app (firstname, lastname, password, email ) VALUES 
-- ('Calin', 'Gherman', sha1('123'), 'calin@gmail.com' ),
-- ('Andrei', 'Gherman', sha1('123'), 'andrei@gmail.com' );


CREATE DATABASE IF NOT EXISTS car_application;
USE car_application;


-- --------------------------------------------------------


CREATE TABLE IF NOT EXISTS carapp(
  id INT(10) NOT NULL AUTO_INCREMENT,
  firstname VARCHAR(100) NOT NULL,
  lastname VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(200) NOT NULL,
  description TEXT,
  image VARCHAR(50) DEFAULT 'default.png',
  PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET="utf8" ;


INSERT INTO carapp (firstname, lastname, password, email) VALUES
 ("Tom", "Smith", sha1("123"), "tom@gmail.com"),
("Lucy", "Smith", sha1("123"), "lucy@gmail.com");

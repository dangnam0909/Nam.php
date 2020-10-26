// tao table
CREATE TABLE test (
    id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    first_name varchar(255) not null,
    last_name varchar(255) not null,
    email varchar(255) not null,
    pass varchar(255) not null
);

INSERT INTO test (first_name, last_name, email, pass) VALUES ('nam', 'nguyen', 'nam@gmail.com', 'nam123');

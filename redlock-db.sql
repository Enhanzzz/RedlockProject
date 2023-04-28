DROP TABLE IF EXISTS users;

CREATE TABLE users(
    ID CHAR(5) PRIMARY KEY,
    Nama VARCHAR(25) NOT NULL,
    Alamat VARCHAR(25) NOT NULL,
    Jabatan VARCHAR(25) NOT NULL
);

INSERT INTO users VALUES
('12345', 'Jennie', 'Sunflower Road', 'CEO'),
('23456', 'Rose', 'Orchard Road', 'HRD'),
('34567', 'Lisa', 'Daisy Road', 'Manager'),
('45678', 'Jisoo', 'Lily Road', 'Staff');
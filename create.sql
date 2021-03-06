CREATE TABLE consumer(
consumer_id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
passwd VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
mobile_number INT(9) UNSIGNED,
email VARCHAR(30) NOT NULL,
DOB DATE,
identity_proof VARCHAR(20) NOT NULL
);

CREATE TABLE client(
client_id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
passwd VARCHAR(30) NOT NULL,
name VARCHAR(30) NOT NULL,
address VARCHAR(50),
type VARCHAR(10),
rate INT(5) UNSIGNED NOT NULL
);

CREATE TABLE parking_lot(
lot_id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
num_bays INT NOT NULL,
floor INT NOT NULL,
client_id INT(5) UNSIGNED,
islinked ENUM('yes','no'),
FOREIGN KEY (client_id) REFERENCES client(client_id) ON DELETE CASCADE
);

CREATE TABLE parking_bay(
bay_id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
type VARCHAR(10),
lot_id INT(5) UNSIGNED,
FOREIGN KEY (lot_id) REFERENCES parking_lot(lot_id) ON DELETE CASCADE
);


CREATE TABLE parks(
amount INT UNSIGNED NOT NULL,
vehicle_type VARCHAR(10),
vehicle_number VARCHAR(10),
arrival_time TIME,
leave_time TIME,
consumer_id INT(6) UNSIGNED,
bay_id INT(6) UNSIGNED,
FOREIGN KEY (consumer_id) REFERENCES consumer(consumer_id) ON DELETE CASCADE,
FOREIGN KEY (bay_id) REFERENCES parking_bay(bay_id) ON DELETE CASCADE,
PRIMARY KEY(consumer_id,bay_id)
);

CREATE TABLE reserves(
vehicle_type VARCHAR(10),
OTP INT(6),
start_time TIME,
end_time TIME,
amount INT UNSIGNED,
consumer_id INT(6) UNSIGNED,
bay_id INT(6) UNSIGNED,
FOREIGN KEY (consumer_id) REFERENCES consumer(consumer_id) ON DELETE CASCADE,
FOREIGN KEY (bay_id) REFERENCES parking_bay(bay_id) ON DELETE CASCADE,
PRIMARY KEY(consumer_id,bay_id)
);

CREATE TABLE blocks(
vehicle_type VARCHAR(10),
OTP INT(6),
start_time TIME,
end_time TIME,
consumer_id INT(6) UNSIGNED,
bay_id INT(6) UNSIGNED,
FOREIGN KEY (consumer_id) REFERENCES consumer(consumer_id) ON DELETE CASCADE,
FOREIGN KEY (bay_id) REFERENCES parking_bay(bay_id) ON DELETE CASCADE,
PRIMARY KEY(consumer_id,bay_id)
);

/*
Name(s): Spence McComb, Cody Edwards, Mike Camenzuli, Johnathan Phillips
Created: September 19, 2018
Last Modified: October 4, 2018
Class Code: WEBD3201-02
Description: [Enter Description]
*/

DROP TABLE IF EXISTS users;

CREATE TABLE users(
  user_id VARCHAR(20) PRIMARY KEY NOT NULL,
  password VARCHAR(32) NOT NULL,
  user_type VARCHAR(2) NOT NULL,
  email_address VARCHAR(256) NOT NULL,
  enrol_date DATE NOT NULL,
  last_access DATE NOT NULL
);

INSERT INTO users (user_id, password, user_type, email_address, enrol_date, last_access) VALUES
('admin', '098f6bcd4621d373cade4e832627b4f6', 's', 'test@test.com', '2000-01-01', '2000-01-01'),
('agent', '098f6bcd4621d373cade4e832627b4f6', 'a', 'test@test.com', '2000-01-01', '2000-01-01'),
('client', '098f6bcd4621d373cade4e832627b4f6', 'c', 'test@test.com', '2000-01-01', '2000-01-01'),
('pending', '098f6bcd4621d373cade4e832627b4f6', 'p', 'test@test.com', '2000-01-01', '2000-01-01'),
('disabled', '098f6bcd4621d373cade4e832627b4f6', 'd', 'test@test.com', '2000-01-01', '2000-01-01');

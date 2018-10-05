/*
Name(s): Spence McComb, Cody Edwards, Mike Camenzuli, Johnathan Phillips
Created: September 19, 2018
Last Modified: October 4, 2018
Class Code: WEBD3201-02
Description: [Enter Description]
*/
CREATE TABLE users(
  user_id VARCHAR(20) PRIMARY KEY NOT NULL,
  password VARCHAR(32) NOT NULL,
  user_type VARCHAR(2) NOT NULL,
  email_address VARCHAR(256) NOT NULL,
  enrol_date DATE NOT NULL,
  last_access DATE NOT NULL
);

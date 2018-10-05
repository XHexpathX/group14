CREATE TABLE table_name(
  user_id VARCHAR(20) PRIMARY KEY NOT NULL,
  password VARCHAR(32) NOT NULL,
  user_type VARCHAR(2) NOT NULL,
  email_address VARCHAR(256) NOT NULL,
  enrol_date DATE NOT NULL,
  last_access DATE NOT NULL
);

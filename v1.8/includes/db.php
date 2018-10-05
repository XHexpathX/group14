<?php
function db_connect()
{
  return pg_connect(sprintf("host=%s port=%s dbname=%s user=%s password=%s",DB_HOST,DB_PORT,DB_NAME,DB_USER,DB_PASSWORD));
}

function SelectFromDatabase()
{
  return "SELECT users.id, users.password, users.first_name, users.last_name,users.email_address,users.enrol_date, users.last_access FROM users";
}

function InsertIntoDatabase($id, $password, $first_name,$last_name,$email_address)
{
  return"INSERT INTO users(id, password, first_name, last_name, email_address,enrol_date, last_access)
         VALUES('".$id."','".$password. "','".$first_name."','".$last_name."','".$email_address."','". date("Y-m-d", time()) ."','". date("Y-m-d", time()) ."')";
}

<?php
function hashpassword ($password)
{
  return hash("md5",$password);
}

function displayCopyrightInfo()
{
  echo "&copy; ";echo date("Y");
}

function convertToCelsius($temp) #convert to celcuisu
{
  $temp = ($temp * 1.8) + 32; return $temp;
}

function dd($param) #DUMP AND DIE!
{
  die(var_dump($param));
}

function CheckPost() #Check if Post
{
  if($_SERVER["REQUEST_METHOD"] == "POST"){return true;}
}

function TrimPost ($value)
{
  return trim($_POST[$value]);
}

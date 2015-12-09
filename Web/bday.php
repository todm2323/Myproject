<?php
error_reporting(0);
  //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "1996-02-24";
  //explode the date to get month, day and year
  $birthDate = explode("-", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[0]) - 1)
    : (date("Y") - $birthDate[0]));
  echo  $age;
?>
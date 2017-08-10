<?php

date_default_timezone_set('America/New_York');
$employee = '';
if ($_POST)  {
    $employee = $_POST['employee'];
    if ($employee === 'none'){
      echo 'please select an employee!';
    }else{

    echo $employee;
    echo '<br>';

    $format = 'Y/m/d : H:i';
    $date = date($format, $timestamp = time());

    $timeArr = explode(':', $date);

    //$decTime = ($timeArr[3]/60);



    $timeArr[2] = $timeArr[1] + round($timeArr[2]/60, 2);
    //foreach ($timeArr as $value) {
      //echo $value;
      //echo '<br>';
    //}
    echo '<br>';
    $date = $timeArr[0] . $timeArr[2];
    echo $date;


    }
  }

 ?>

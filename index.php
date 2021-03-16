<?php
$be= date('Y');
$bm= (int) 10;// $_POST['Birthday_Month'];
$bd=(int) 11;// $_POST['Birthday_day'];
$date = "$be-$bm-$bd";
$check_time = strtotime($date) - time();
$months = floor($check_time/86400/12);
$days = floor($check_time/86400);
$hours = floor(($check_time%86400)/3600);
$minutes = floor(($check_time%3600)/60);
echo "Осталось минут: $minutes <br>\n";
echo "Осталось часов $hours<br>\n";
echo "Осталось дней $days<br>\n";
echo "Осталось месяцев $months<br>\n";
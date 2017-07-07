<?php
$db = pg_connect("host=localhost dbname=wsiascheduler user=minimoe password=''");
if($db){
	echo "Database connected";
}else{
	echo "some error occured";
}
?>
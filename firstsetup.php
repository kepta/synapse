<?php
require_once('db.php');
phpinfo();
$dbc = mysqli_connect($HOST,$USER,$PASS,$DB);
if (!$dbc) {
die("connection failed");
}
echo '<div style ="position:absolute ; top:0px">';
$query = "CREATE TABLE {$main_table} ( user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, teamname VARCHAR(30) NOT NULL, password VARCHAR(40), email VARCHAR(50), contact VARCHAR(50), reg_date TIMESTAMP, description TEXT )";
$result = mysqli_query($dbc,$query) or die("unable to create main_tb1</div>");
echo 'created table<br>';
$query = "INSERT INTO {$main_table} (teamname, email, password, contact , description,reg_date) VALUES ('synapse','null_',SHA('ultimate15'),'null_','null_',NOW())";
$result = mysqli_query($dbc,$query) or die("could create synape</div>");
echo 'created synapse<br>';

$query = "CREATE TABLE {$form_table} (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,user_id INT(6) NOT NULL,template INT(1) NOT NULL, field_1 VARCHAR(30) , data_1 VARCHAR(124),field_2 VARCHAR(30) , data_2 VARCHAR(124),field_3 VARCHAR(30) , data_3 VARCHAR(124),field_4 VARCHAR(30) , data_4 VARCHAR(124),field_5 VARCHAR(30) , data_5 VARCHAR(124),field_6 VARCHAR(30) , data_6 VARCHAR(124),field_7 VARCHAR(30) , data_7 VARCHAR(124),field_8 VARCHAR(30) , data_8 VARCHAR(124),field_9 VARCHAR(30) , data_9 VARCHAR(124),big_field_1 VARCHAR(30) , big_data_1 TEXT ,big_field_2 VARCHAR(30) , big_data_2 TEXT ,big_field_3 VARCHAR(30) , big_data_3 TEXT )";


$result = mysqli_query($dbc,$query) or die("could create synape</div>");
echo 'created '.$form_table.'</div>' ;
?>
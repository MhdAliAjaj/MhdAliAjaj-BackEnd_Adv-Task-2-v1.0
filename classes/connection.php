<?php

define('SERVER','localhost');
define('USERNAME','root');
define('PASS','');
define('DATABASE','blog_db4');


// CONST SERVER='localhost';
// CONST USERNAME='root';
// CONST PASS='';
// CONST DATABASE='mybook';


$conn = mysqli_connect(SERVER,USERNAME,PASS);

 $dbcon = mysqli_select_db($conn,DATABASE);

?>
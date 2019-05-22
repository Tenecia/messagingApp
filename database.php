<?php
// Connect to MySQL
$con = mysqli_connect("localhost","root","password","shoutit");
// host,user name, password,database name . 
//Test Connection 
if(mysqli_connect_errno()){
    echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}
?>
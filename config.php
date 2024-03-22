<?php
const DB_SERVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = '3516208127127';
const DB_NAME = 'user';

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

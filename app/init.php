<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=todo;host=127.0.0.1', 'root', 'Devpass123$');

//Handle this some other way
if(!isset($_SESSION['user_id'])){
  die('You are not logged in.');
}

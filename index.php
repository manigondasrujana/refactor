<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL);

define('DATABASE', 'sm2555');
define('USERNAME', 'sm2555');
define('PASSWORD', 'tzw8bjLL');
define('CONNECTION', 'sql1.njit.edu');

include 'model.php';
include 'database.php';
include 'collection.php';
include "account.php";
include "todos.php";
include "todo.php";
include 'accounts.php';
include "htmlTable.php";

echo "<h2>Select all records from accounts </h2>";
$obj = new Account;
$obj->save();
$obj =  accounts::create();
$result = $obj -> findAll();
htmlTable::createTable($result);

echo "<h2> Select all Records from todos</h2>";
$obj = new todo;
$obj->save();
$obj =  todos::create();
$result = $obj -> findAll();
htmlTable::createTable1($result);

echo "<h2> Select one record from accounts where id=3</h2>";
$obj =  accounts::create();
$result = $obj -> findOne(3);
htmlTable::createTable($result);

echo "<h2> Select one record from todos where id=3</h2>";
$obj =  todos::create();
$result = $obj -> findOne(3);
htmlTable::createTable($result);

?>
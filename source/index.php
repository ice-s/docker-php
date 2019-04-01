<?php

//Connecting to Redis server on localhost
$redis = new Redis();
$redis->connect('redis-test', 6379);
echo "Connection to server sucessfully";
//store data in redis list
$redis->lpush("tutorial-list", "Redis");
$redis->lpush("tutorial-list", "Mongodb");
$redis->lpush("tutorial-list", "Mysql");

// Get the stored data and print it
$arList = $redis->lrange("tutorial-list", 0, 5);
echo "Stored string in redis:: ";
print_r($arList);

print_r("</br>");
print_r("==========================");
print_r("</br>");

$servername = "mysql-test";
$username   = "root";
$password   = "root";

// Create connection

$mysql = new MySQLi($servername, $username, $password, 'test');
if ($mysql->connect_errno) {
    echo "Errno: " . $mysql->connect_errno . "\n";
}
$result = $mysql->query("show databases");
print_r($result);


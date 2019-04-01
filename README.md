## Edit config docker

```
/nginx/app.conf
php{-test} => php{-yourproject}

docker-compose.yml
{-test} => {-yourproject}

```

## How to use
> docker-compose up

## In PHP File

### Rredis use in php
```
 $redis = new Redis();
 $redis->connect('redis-test', 6379);
 echo "Connection to server sucessfully";
 $redis->set("tutorial-name", "Redis tutorial");
 echo "Stored string in redis:: " . $redis->get("tutorial-name");
```

### Mysql use in php
```
$servername = 'mysql-test';
$username = 'root';
$password = 'root';

$mysql = new MySQLi($servername, $username, $password, 'test');
if ($mysql->connect_errno) {
echo "Errno: " . $mysql->connect_errno . "\n";
}
$result = $mysql -> query("show databases");
print_r($result);
```

### command

```
docker exec -it container-name /bin/bash

```

### command example

```
docker ps

docker exec -it  phpserver_nginx-test_1 /bin/bash
docker exec -it  phpserver_php-test_1 /bin/bash
docker exec -it  phpserver_mysql-test_1 /bin/bash
docker exec -it  phpserver_redis-test_1 /bin/bash
```

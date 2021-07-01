<?php
//phpinfo();

$pdo = new PDO('mysql:dbname=db;host=mysql', 'dbuser', 'dbpassword', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'Mysql version: ' . $row['Value'];

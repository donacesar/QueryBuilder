<?php
require_once __DIR__ . '/classes/QueryBuilder.php';

/* 1. Создаём объект класса QueryBuilder */
$db = new QueryBuilder(Connection::make('mysql:host=localhost;dbname=my_database;charset=utf8', 'root', 'root'));
    // Данные передаем  в Connections::make такие же, как и в PDO

//var_dump($db->getAll('users'));

$user = $db->getOne('users', '3');
$id = $user['id'];
    // Сохраним id на потом

unset($user['id']);
    // Убрали id чтобы повторно вставить этот объект


$user['role'] = 'admin';
var_dump($db->update('users', $user, $id));

//var_dump($db->create('users', $user));

var_dump($db->delete('users', 14));

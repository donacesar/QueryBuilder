<?php
/* Подключение к базе данных, возвращает объект PDO */

class Connection {
    /**
     * @param $dsn string
     * @param $name string
     * @param $password string
     * @return PDO
     */
    public static function make(string $dsn, string $name, string $password): PDO
    {
        return new PDO ($dsn, $name, $password);
    }
}
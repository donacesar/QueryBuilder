# QueryBuilder
Minimal 
## Usage
### 1. Create a QueryBuilder object, it needs a connection as PDO object
```php
$db = new QueryBuilder(Connection::make('mysql:host=localhost;dbname=my_database;charset=utf8', 'root', 'root'));
    // Данные передаем  в Connections::make такие же, как и в PDO
```
### 2.  Execute a query as in examples below:
```php 

$users = $db->getAll('users');

$user = $db->getOne('users', $id);

$db->update('users', $user, $id);

$id = $db->create('users', $data);

$db->delete('users', $id);


```

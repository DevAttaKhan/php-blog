<?php


declare(strict_types = 1);

namespace Core;

use PDO;
use PDOStatement;

class Database
{

    public PDO $connection;
    public ?PDOStatement $statement;

    function __construct($config, $root, $password)
    {
        $dsn = "mysql:" . http_build_query($config, '', ';');



        $this->connection = new PDO($dsn, $root, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }


    public function query(string $query, array $params = [])
    {

        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }


    public function findAll()
    {
        return $this->statement->fetchAll();
    }

    public function findOne()
    {
        return $this->statement->fetch();
    }
}

<?php

namespace App\Db;

use \PDO;
use PDOException;

class Database
{
    const HOST = 'localhost';
    const NAME = 'entrega';
    const USER = 'root';
    const PASS = '321321321';

    /**
     * @var string
     */
    private $table;

    /**
     * @var PDO
     */
    private $connection;

    public function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    private function setConnection()
    {
        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR' . $e->getMessage());
        }
    }

    public function execute($query, $params = [])
    {
        try {
            $statatement = $this->connection->prepare($query);
            $statatement->execute($params);

            return $statatement;
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }

    public function insert($values)
    {
        $colunas = array_keys($values);
        $dados = array_pad([], count($colunas), '?');
        $query = "INSERT INTO {$this->table} (" . implode(',', $colunas) . ") VALUES (" . implode(',', $dados) . ")";

        $this->execute($query,array_values($values));

        return $this->connection->lastInsertId();
    }
}

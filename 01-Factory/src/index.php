<?php
require_once "vendor/autoload.php";

interface Connection
{
    public function connect();
}
class PostGresConnection implements Connection
{
    public function connect()
    {
        echo "Postgress connection\n";
    }
}

class MysqlConnection implements Connection
{
    public function connect()
    {
        echo "Mysql Connection\n";
    }
}

class DBConnectionFactory
{
    public static function getDatabase(string $connection): Connection
    {
        if ($connection == 'mysql') {
            return new MysqlConnection();
        }
        if ($connection == 'postgres') {
            return new PostgresConnection();
        } else {
            throw new Exception("Database not supported.");
        }
    }
}
$connection = DBConnectionFactory::getDatabase("mysql");
$connection->connect(); // Mysql Connection

$connection = DBConnectionFactory::getDatabase("postgres");
$connection->connect(); // Postgres Connection
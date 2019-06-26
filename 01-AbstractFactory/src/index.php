<?php
require_once "vendor/autoload.php";

use Acme\MysqlORM;
use Acme\ORMInterface;
use Acme\MongoAdapter;
use Acme\MongoORM;
use Acme\MysqlAdapter;

class Client
{
    public function read(ORMInterface $orm)
    {
        $orm->getClass();
        $orm->getAttribute();
    }
}

(new Client)->read(new MongoAdapter(new MongoORM));
(new Client)->read(new MysqlAdapter(new MysqlORM));

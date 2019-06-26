<?php
namespace Acme;

use Acme\mysqlORM;

class MysqlAdapter implements ORMInterface
{
    protected $mysql;

    public function __construct(MysqlORM $mysql)
    {
        $this->mysql = $mysql;
    }
    public function getClass()
    {
        return $this->mysql->table();
    }
    public function getAttribute()
    {
        return $this->mysql->row();
    }
}

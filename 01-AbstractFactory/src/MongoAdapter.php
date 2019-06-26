<?php
namespace Acme;

use Acme\MongoORM;

class MongoAdapter implements ORMInterface
{
    protected $mongo;
    public function __construct(MongoORM $mongo)
    {
        $this->mongo = $mongo;
    }
    public function getClass()
    {
        return $this->mongo->collection();
    }
    public function getAttribute()
    {
        return $this->mongo->field();
    }
}

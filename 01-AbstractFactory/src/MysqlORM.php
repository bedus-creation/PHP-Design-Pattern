<?php
namespace Acme;

class MysqlORM implements MysqlInterface
{
    public function table()
    {
        var_dump("Connecting to mysql Table");
    }

    public function row()
    {
        var_dump("Reading to mysql row");
    }
}

<?php

namespace Acme;

class MongoORM implements MongoInterface
{
    /**
     * This methods are 
     */
    public function collection()
    {
        var_dump("Connecting to mongo Collection");
    }
    public function field()
    {
        var_dump("Reading to mongo Fields");
    }
}

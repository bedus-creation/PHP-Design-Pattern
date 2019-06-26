<?php
namespace Acme;

class ORM implements ORMInterface
{
    public function getClass()
    {
        var_dump("Getting ORM Class");
    }
    public function getAttribute()
    {
        var_dump("Getting ORM Class Attributes");
    }
}

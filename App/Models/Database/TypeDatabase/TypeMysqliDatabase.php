<?php

namespace App\Models\Database\TypeDatabase;

use App\Interfaces\InterfaceTypeDatabase;
use App\Models\Database\ConnectDatabase\Connection;
use App\Models\Database\ConnectDatabase\ConnectMysqliDatabase;

class TypeMysqliDatabase implements InterfaceTypeDatabase
{
    private $mysqli;
    private $objMysqli;

    public function __construct()
    {
        $mysqli = new Connection(new ConnectMysqliDatabase());
    }

    public function prepare($sql)
    {
        $this->objMysqli = $this->mysqli->prepare($sql);
    }


    public function bindValue($key, $value)
    {
        $type = substr(gettype($value), 0, 1);
        $this->objMysqli->bind_param($type, $value);
    }


    public function execute()
    {
        return $this->objMysqli->execute();
    }


    public function rowCount()
    {
        return $this->objMysqli->num_rows();
    }


    public function fetch()
    {
        return $this->objMysqli->get_result()->fetch_object();
    }


    public function fetchAll()
    {
        $data = [];
        $result = $this->objMysqli->get_result();
        while($resultFetch = $result->fetch_assoc()) {
            $data[] = $resultFetch;
        }
        return $data;
    }


}

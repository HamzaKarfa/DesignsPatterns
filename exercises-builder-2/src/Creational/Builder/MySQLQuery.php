<?php 

namespace Patterns\Creational\Builder;

use Patterns\Creational\Builder\Interfaces\QueryBuilderInterface;

class MySQLQuery implements QueryBuilderInterface
{
    /*TODO*/
    protected $select;
    protected $limit; 


    public function select(string $table, array $data){
        var_dump($data);
        $this->select = "SELECT ".$data[0]." FROM ".$table;
        return $this;
    }
    public function limit(int $limitNumberMin, int $limitNumberMax){
        $this->limit = "LIMIT ".$limitNumberMin . ", ".$limitNumberMax;
        return $this;

    }
    public function get(){
        return $this->select . $this->limit;

    }
}
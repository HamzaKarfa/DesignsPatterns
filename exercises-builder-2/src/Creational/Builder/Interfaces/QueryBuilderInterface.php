<?php 

namespace Patterns\Creational\Builder\Interfaces;

interface QueryBuilderInterface {
    public function select( string $table, array $data);

    public function limit(int $limitNumber, int $limitNumberMax);
    public function get();

}
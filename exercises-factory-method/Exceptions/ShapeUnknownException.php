<?php 

namespace App\Exceptions;

use Patterns\Creational\Factory\Interfaces\ShapeInterface;

class ShapeUnknownException extends \Exception{



    public function __construct(string $message, int $codeError)
    {
        $this->message = $message;
        $this->code = $codeError;
        return var_dump($this->getMessage());
    }

}
<?php 

namespace Patterns\Creational\Factory;

use App\Exceptions\ShapeUnknownException;
use Patterns\Creational\Factory\Shapes\Circle;
use Patterns\Creational\Factory\Shapes\Rectangle;
use Patterns\Creational\Factory\Shapes\Triangle;
use Patterns\Creational\Factory\Interfaces\ShapeInterface;

class ShapeFactory {



	public static function build(string $shape)
	{
		switch ($shape) {
			case 'circle':
				return new Circle;
			case 'rectangle':
				return new Rectangle;
			case 'triangle':
				return new Triangle;
			default:
				throw new ShapeUnknownException("Je ne connais pas cette forme" , 404);
		}
	}
}
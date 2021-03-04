<?php declare(strict_types=1);

namespace Tests;




use PHPUnit\Framework\TestCase;
use App\Builders\Order;
use App\Builders\Master;
use App\Builders\PCBuilder;
use App\Builders\Hardware\Cpu;
use App\Builders\Hardware\Gpu;
use App\Builders\Hardware\Ram;
use App\Builders\Hardware\Ssd;
use App\Builders\Hardware\Hdd;
use App\Builders\Hardware\MotherBoard;
use App\Builders\Interfaces\MasterInterface;
use App\Builders\Interfaces\ComputerInterface;


class BuilderTest extends TestCase
{
    /**
     * @var MasterInterface
     */
    private $master;

    /**
     * @var ComputerInterface
     */
    private $desktop;

    protected function setUp(): void
    {
        $this->master = new Master();
        $this->master->setBuilder(new PCBuilder());
        $this->master->getBuilder()
            ->setPart(new Motherboard(Order::MB))// String on param constructor item pc
            ->setPart(new Cpu(Order::CPU))// String on param constructor item pc
            ->setPart(new Ram(Order::RAM))// String on param constructor item pc
            ->setPart(new Gpu(Order::GPU))// String on param constructor item pc
            ->setPart(new Ssd(Order::SSD))// String on param constructor item pc
            ->setPart(new Hdd(Order::HDD));// String on param constructor item pc

        $this->desktop = $this->master->build();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(ComputerInterface::class, $this->desktop);
    }

    public function testParts()
    {
        $this->assertEquals(Order::MB, $this->desktop->getComponent(MotherBoard::class)->getValue());
        $this->assertEquals(Order::CPU, $this->desktop->getComponent(Cpu::class)->getValue());
        $this->assertEquals(Order::RAM, $this->desktop->getComponent(Ram::class)->getValue());
        $this->assertEquals(Order::GPU, $this->desktop->getComponent(Gpu::class)->getValue());
        $this->assertEquals(Order::SSD, $this->desktop->getComponent(Ssd::class)->getValue());
        $this->assertEquals(Order::HDD, $this->desktop->getComponent(Hdd::class)->getValue());
    }
}
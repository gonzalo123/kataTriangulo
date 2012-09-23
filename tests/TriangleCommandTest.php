<?php
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use GonzaloDb\SchemeCommand;

class TriangleCommandTest extends PHPUnit_Framework_TestCase
{
    private $command;

    public function setUp()
    {
        $application = new Application();
        $application->add(new TriangleCommand());

        $this->command = $application->find('Triangle:draw');
    }

    public function testDraw()
    {
        $commandTester = new CommandTester($this->command);
        $commandTester->execute(
            array(
                'command' => $this->command->getName(),
                'leg' => 2,
            )
        );
        $out = $commandTester->getDisplay();
        $this->assertRegExp('/\*\*/', $commandTester->getDisplay());
    }
}
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class TriangleCommand extends Command
{
    protected function configure()
    {
        $command = $this->setName('Triangle:draw')->setDescription('draw triangle');
        $command->addArgument('leg', InputArgument::REQUIRED, 'Triangle Leg');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $triangle = new Triangle($input->getArgument('leg'));
        foreach($triangle->draw() as $line) {
            $output->writeln($line);
        }
    }
}
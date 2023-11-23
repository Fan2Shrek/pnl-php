<?php

namespace Pnl\PnlPhp\Commands;

use Pnl\App\AbstractCommand;
use Pnl\Console\Input\InputInterface;
use Pnl\Console\Output\OutputInterface;

class HelloCommand extends AbstractCommand
{
    protected const NAME = "hello";

    public function getDescription(): string
    {
        return "Prints 'Hello, World!'";
    }

    public function __invoke(InputInterface $input, OutputInterface $output): void
    {
        $output->writeln("Hello, World!");
    }
}

<?php

namespace MathApp\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class AddCommand extends Command {
    protected function configure() {
        $this->setName( 'add' );
        $this->setDescription( 'Addition of the 2 number given in CLI ' );

    }

    protected function execute( InputInterface $input, OutputInterface $output ) {
        $io           = new SymfonyStyle( $input, $output );
        $firstNumber  = $io->ask( 'Enter The First Number' );
        $SecondNumber = $io->ask( 'Enter The Second Number' );

        $result = $firstNumber + $SecondNumber;

        $io->success( "Your Addition of Number is: {$result}" );

        return 1;
    }
}
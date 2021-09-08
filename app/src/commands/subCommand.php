<?php

namespace MathApp\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class SubCommand extends Command {
    protected function configure() {
        $this->setName( 'sub' );
        $this->setDescription( 'Substraction of 2 numbers given in CLI' );
    }

    protected function execute( InputInterface $input, OutputInterface $output ) {
        $io           = new SymfonyStyle( $input, $output );
        $firstNumber  = $io->ask( 'Enter The First Number' );
        $SecondNumber = $io->ask( 'Enter The Second Number' );

        if ( $firstNumber > $SecondNumber ) {
            $result = $firstNumber - $SecondNumber;
            $io->success( "Your Substraction of Number is: {$result}" );
        } else {
            $io->error( "Try again, Your second number is leager then first number" );
        }

        return 1;

    }
}
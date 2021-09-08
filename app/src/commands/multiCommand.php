<?php

namespace MathApp\commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class MultiCommand extends Command {
    protected function configure() {
        $this->setName( 'multi' );
        $this->setDescription( 'Multiply two numbers given in CLI' );
    }

    protected function execute( InputInterface $input, OutputInterface $output ) {
        $IO           = new SymfonyStyle( $input, $output );
        $IO           = new SymfonyStyle( $input, $output );
        $firstNumber  = $IO->ask( 'Enter The First Number' );
        $SecondNumber = $IO->ask( 'Enter The Second Number' );

        $result = $firstNumber * $SecondNumber;

        $IO->success( "Your Multiplication of Number is: {$result}" );

        return 1;
    }
}
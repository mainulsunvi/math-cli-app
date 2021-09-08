<?php
namespace mathApp\style;

use Symfony\Component\Console\Style\StyleInterface;

class CustomStyle implements StyleInterface {

    public function success( $message ) {
        $this->block( $message, 'OK', 'fg=black;bg=green', ' ', true );
    }

}
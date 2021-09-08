<?php

$file = "math.phar";

if ( file_exists( $file ) ) {
    unlink( $file );
}

$phar = new Phar( $file );
$phar->startBuffering();
$stub = $phar->createDefaultStub( 'main.php' );
$phar->buildFromDirectory( __DIR__ . '/app' );
$shebung = "#!/usr/bin/env php \n";
$phar->setStub( $shebung . $stub );
$phar->stopBuffering();

echo "Done";
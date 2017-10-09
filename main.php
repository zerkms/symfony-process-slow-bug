<?php

use Symfony\Component\Process\Process;

require __DIR__ . '/vendor/autoload.php';

$data = new \SplFileObject('/var/log/syslog');

$process = new Process(
    ['dd', 'of=out.file', 'status=none'],
    __DIR__,
    [],
    $data
);
$process->run();

<?php

/**
 * Copyright MediaCT. All rights reserved.
 * https://www.mediact.nl
 */

namespace Youwe\PHPTestingSuite\Composer\Factory;

use Symfony\Component\Process\Process;

interface ProcessFactoryInterface
{
    /**
     * Create a new Process instance.
     *
     * @param string $commandLine
     *
     * @return Process
     */
    public function create(string $commandLine): Process;
}

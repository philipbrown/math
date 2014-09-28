<?php namespace PhilipBrown\Math\Command;

interface CommandInterface
{
    /**
     * Run the command
     *
     * @return PhilipBrown\Math\Number
     */
    public function run();
}

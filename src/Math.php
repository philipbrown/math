<?php namespace PhilipBrown\Math;

use PhilipBrown\Math\Commands\AddCommand;
use PhilipBrown\Math\Commands\PowerCommand;
use PhilipBrown\Math\Commands\DivideCommand;
use PhilipBrown\Math\Commands\CompareCommand;
use PhilipBrown\Math\Commands\ModulusCommand;
use PhilipBrown\Math\Commands\MultiplyCommand;
use PhilipBrown\Math\Commands\SubtractCommand;
use PhilipBrown\Math\Commands\SquareRootCommand;

class Math
{
    /**
     * Add two numbers
     *
     * @param mixed $left
     * @param mixed $right
     * @param mixed $scale
     * @return Number
     */
    public static function add($left, $right, $scale = 0)
    {
        $left    = new AnyNumber($left);
        $right   = new AnyNumber($right);
        $scale   = new PositiveNumber($scale);
        $command = new AddCommand($left, $right, $scale);

        return $command->run();
    }

    /**
     * Compare two numbers
     *
     * @param mixed $left
     * @param mixed $right
     * @param mixed $scale
     * @return Number
     */
    public static function compare($left, $right, $scale = 0)
    {
        $left    = new AnyNumber($left);
        $right   = new AnyNumber($right);
        $scale   = new PositiveNumber($scale);
        $command = new CompareCommand($left, $right, $scale);

        return $command->run();
    }

    /**
     * Divide two numbers
     *
     * @param mixed $left
     * @param mixed $right
     * @param mixed $scale
     * @return Number
     */
    public static function divide($left, $right, $scale = 0)
    {
        $left    = new AnyNumber($left);
        $right   = new AnyNumber($right);
        $scale   = new PositiveNumber($scale);
        $command = new DivideCommand($left, $right, $scale);

        return $command->run();
    }

    /**
     * Find the modulus of two numbers
     *
     * @param mixed $operant
     * @param mixed $modulus
     * @return Number
     */
    public static function modulus($operand, $modulus)
    {
        $operand = new AnyNumber($operand);
        $modulus = new AnyNumber($modulus);
        $command = new ModulusCommand($operand, $modulus);

        return $command->run();
    }

    /**
     * Multiply two numbers
     *
     * @param mixed $left
     * @param mixed $right
     * @param mixed $scale
     * @return Number
     */
    public static function multiply($left, $right, $scale = 0)
    {
        $left    = new AnyNumber($left);
        $right   = new AnyNumber($right);
        $scale   = new PositiveNumber($scale);
        $command = new MultiplyCommand($left, $right, $scale);

        return $command->run();
    }

    /**
     * Find the power two numbers
     *
     * @param mixed $left
     * @param mixed $right
     * @param mixed $scale
     * @return Number
     */
    public static function power($left, $right, $scale = 0)
    {
        $left    = new AnyNumber($left);
        $right   = new AnyNumber($right);
        $scale   = new PositiveNumber($scale);
        $command = new PowerCommand($left, $right, $scale);

        return $command->run();
    }

    /**
     * Find the square root of two numbers
     *
     * @param mixed $operant
     * @param mixed $scale
     * @return Number
     */
    public static function squareRoot($operand, $scale)
    {
        $operand = new AnyNumber($operand);
        $scale   = new AnyNumber($scale);
        $command = new SquareRootCommand($operand, $scale);

        return $command->run();
    }

    /**
     * Subtract two numbers
     *
     * @param mixed $left
     * @param mixed $right
     * @param mixed $scale
     * @return Number
     */
    public static function subtract($left, $right, $scale = 0)
    {
        $left    = new AnyNumber($left);
        $right   = new AnyNumber($right);
        $scale   = new PositiveNumber($scale);
        $command = new SubtractCommand($left, $right, $scale);

        return $command->run();
    }
}

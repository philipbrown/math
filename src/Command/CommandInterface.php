<?php namespace PhilipBrown\Math\Command;

interface CommandInterface {

  /**
   * Run the command
   *
   * @param $left integer
   * @param $right integer
   * @return PhilipBrown\Math\Number
   */
  public function run();

}

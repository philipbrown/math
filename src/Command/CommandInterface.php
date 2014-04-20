<?php namespace PhilipBrown\Math\Command;

interface CommandInterface {

  /**
   * Run
   *
   * @param $left integer
   * @param $right integer
   * @return Math\Number
   */
  public function run();

}

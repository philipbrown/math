<?php namespace Philipbrown\Math\Command;

interface CommandInterface {

  /**
   * Run
   *
   * @param $left integer
   * @param $right integer
   * @return Math\Number
   */
  public function run($left, $right, $scale);

}

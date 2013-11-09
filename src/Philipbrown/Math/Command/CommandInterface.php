<?php namespace Philipbrown\Math\Command;

interface CommandInterface {

  /**
   * Run
   *
   * @param $left Math\Number
   * @param $right Math\Number
   * @return Math\Math
   */
  public function run($left, $right, $scale);

}

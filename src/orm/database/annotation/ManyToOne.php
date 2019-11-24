<?php

namespace fall\data\orm\database\annotation;

use fall\core\lang\Annotation;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface ManyToOne extends Annotation
{
  public function targetEntity();
  public function fetchType();
}

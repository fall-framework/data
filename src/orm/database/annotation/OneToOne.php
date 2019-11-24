<?php

namespace fall\data\orm\database\annotation;

use fall\core\lang\Annotation;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface OneToOne extends Annotation
{
  public function targetEntity();
}

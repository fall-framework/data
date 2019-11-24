<?php

namespace fall\data\orm\database\annotation;

use fall\core\lang\Annotation;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface JoinColumn extends Annotation
{
  public function name();
  public function referencedColumnName();
  public function table();
}

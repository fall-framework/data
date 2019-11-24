<?php

namespace fall\data\orm\database\annotation;

use fall\core\lang\Annotation;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface Table extends Annotation
{
  public function name();
  public function schema();
}

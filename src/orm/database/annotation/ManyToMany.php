<?php

namespace fall\data\orm\database\annotation;

use fall\core\lang\Annotation;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface ManyToMany extends Annotation
{
  public function targetEntity();
}

<?php

namespace fall\data\jpa\repository;

use fall\core\lang\Annotation;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface Query extends Annotation
{
  function value();
}

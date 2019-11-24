<?php

namespace fall\data\orm\database\clause;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class SetClause extends BoundableClause
{
  public function __construct($set, array $bounds = [])
  {
    parent::__construct($set, $bounds);
  }
}

<?php

namespace fall\data\orm\database\clause;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class HavingClause extends BoundableClause
{
  public function __construct($having, array $bounds = [])
  {
    parent::__construct($having, $bounds);
  }
}

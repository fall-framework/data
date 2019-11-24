<?php

namespace fall\data\orm\database\clause;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class WhereClause extends BoundableClause
{
  public function __construct($where, array $bounds = [])
  {
    parent::__construct($where, $bounds);
  }
}

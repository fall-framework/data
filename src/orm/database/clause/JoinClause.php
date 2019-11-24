<?php

namespace fall\data\orm\database\clause;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class JoinClause extends Clause
{
  private $joinClause;
  private $joinTable;
  private $joinAlias;
  private $joinCondition;

  public function __construct($joinClause, $joinTable, $joinAlias, $joinCondition)
  {
    $this->joinClause = $joinClause;
    $this->joinTable = $joinTable;
    $this->joinAlias = $joinAlias;
    $this->joinCondition = $joinCondition;
  }

  public function __toString()
  {
    return $this->joinClause . ' ' . $this->joinTable . ' ' . $this->joinAlias . ' ON ' . $this->joinCondition;
  }
}

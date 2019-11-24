<?php

namespace fall\data\orm\database\query;

use fall\data\orm\database\clause\SelectClause;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class SelectQuery extends Query
{
  private const NO_ALIAS = '$NO_ALIAS$';

  private $alias;
  private $selects = [];
  private $joins = [];
  private $groupBys = [];
  private $havings = [];
  private $orderBys = [];
  private $limit = null;

  public function __construct(string $tableName, string $alias = null)
  {
    parent::__construct($tableName);
    $this->alias = ($alias != null) ? $alias : $tableName;
    $this->selects[self::NO_ALIAS] = new SelectClause($this->alias);
  }

  public function fields($alias, array $fields = [])
  {
    if (\is_numeric($alias)) {
      $fields = array($alias);
      $alias = self::NO_ALIAS;
    }
  }
}

<?php

namespace fall\data\orm\database\query;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class QueryBuilder
{

  private $tableName;

  private function __construct($tableName)
  {
    $this->tableName = $tableName;
  }

  public function select($alias = null): SelectQuery
  {
    return new SelectQuery($this->tableName, $alias);
  }

  public function update(): UpdateQuery
  {
    return new UpdateQuery($this->tableName);
  }

  public static function build($tableName): QueryBuilder
  {
    return new QueryBuilder($tableName);
  }
}

<?php

namespace fall\data\orm\database\query;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class UpdateQuery extends Query
{
  private $sets = [];

  public function __construct($tableName)
  {
    parent::__construct($tableName);
  }

  public function set($set, $bounds): UpdateQuery
  {
    $this->sets[] = new SetClause($set, $bounds);
    return $this;
  }

  public function __toString()
  {
    $sql = 'UPDATE ' . $this->tableName;

    if (!empty($this->sets)) {
      $sql .= ' SET ' . join(', ' . $this->sets);
    }

    if (!empty($this->wheres)) {
      $sql .= ' WHERE ' . join(' AND ' . $this->wheres);
    }

    return $sql;
  }
}

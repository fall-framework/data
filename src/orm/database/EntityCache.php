<?php

namespace fall\data\orm\database;

class EntityCache
{
  private $tableName;
  private $primary;
  private $columns;
  private $joinColumns;

  public function __construct(string $tableName, ExtendedReflectionProperty $primary, array $columns, array $joinColumns)
  {
    $this->tableName = $tableName;
    $this->primary = $primary;
    $this->columns = $columns;
    $this->joinColumns = $joinColumns;
  }

  public function getTableName(): string
  {
    return $this->tableName;
  }

  public function getPrimary(): ExtendedReflectionProperty
  {
    return $this->primary;
  }

  public function getColumns(): array
  {
    return $this->columns;
  }

  public function getJoinColumns(): array
  {
    return $this->joinColumns;
  }
}

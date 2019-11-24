<?php

namespace fall\data\orm\database\query;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
abstract class Query
{
  protected $tableName;
  protected $conditions = [];

  public abstract function __toString(): string;
}

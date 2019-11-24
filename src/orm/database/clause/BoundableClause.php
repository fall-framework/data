<?php

namespace fall\data\orm\database\clause;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
abstract class BoundableClause extends Clause
{
  private $clause;
  private $bounds;

  public function __construct($clause, array $bounds = [])
  {
    $this->clause = $clause;
    $this->bounds = $bounds;
  }

  public function __toString()
  {
    if (empty($this->bounds)) {
      return '(' . $this->clause . ')';
    }

    $keyPatternFunction = function ($key) {
      return '/' . $key . '/';
    };
    $valuePatternFunction = function ($value) {
      $returnedValue = $value;

      switch (true) {
        case is_string($value):
          $returnedValue = '"' . $value . '"';
          break;

        case is_array($value):
          $returnedValue = '"' . join("', '", $value) . '"';
          break;
      }

      return $returnedValue;
    };

    return '(' . \preg_replace(
      array_map($keyPatternFunction, array_keys($this->bounds)),
      array_map($valuePatternFunction, array_values($this->bounds)),
      $this->clause
    ) . ')';
  }
}

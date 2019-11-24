<?php

namespace fall\data\orm\database\clause;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class OrderByClause extends Clause
{
  private $field;
  private $direction;

  public function __construct(string $field, string $direction = '')
  {
    $this->field = $field;
    $this->direction = $direction;
  }

  public function __toString(): string
  {
    return $this->field . ' ' . $this->direction;
  }
}

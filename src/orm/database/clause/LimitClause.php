<?php

namespace fall\data\orm\database\clause;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class LimitClause extends Clause
{
  private $offset;
  private $count;

  public function __construct($offset, $count)
  {
    $this->offset = $offset;
    $this->count = $count;
  }

  public function __toString(): string
  {
    return ' LIMIT ' . $this->offset . ', ' . $this->count;
  }
}

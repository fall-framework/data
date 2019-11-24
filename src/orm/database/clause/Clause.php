<?php

namespace fall\data\orm\database\clause;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
abstract class Clause
{
  public abstract function __toString(): string;
}

<?php

namespace fall\data\orm\database\exception;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class BadEntityConfigurationException extends \Exception
{
  public function __construct($message)
  {
    parent::__construct($message);
  }
}

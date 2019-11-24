<?php

namespace fall\data\orm\persistence;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface Session
{
  public function get(string $entityClassName, $id);
}

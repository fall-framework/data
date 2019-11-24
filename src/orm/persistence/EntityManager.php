<?php

namespace fall\data\orm\persistence;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface EntityManager
{
  public function find($entityClassName, $primaryKey);
  public function persist($entity);
}

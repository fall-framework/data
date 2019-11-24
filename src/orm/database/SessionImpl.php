<?php

namespace fall\data\orm\database;

use fall\data\orm\persistence\Session;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class SessionImpl implements Session
{
  public function get(string $entityClassName, $id)
  {
    $entityCache = $this->buildEntityCache($entityClassName);

    $queryBuilder = new QueryBuilder($entityCache->getTableName(), $entityCache->getTableName());
  }

  private function buildEntityCache(string $entityClassName): EntityCache
  {
    if (isset($this->entityCaches[$entityClassName])) {
      return $this->entityCaches[$entityClassName];
    }

    // TODO
    return new EntityCache();
  }
}

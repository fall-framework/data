<?php

namespace fall\data\orm\database;

use fall\core\lang\reflection\ExtendedReflectionClass;
use fall\data\orm\annotation\Entity;
use fall\data\orm\annotation\Table;

class EntityManagerImpl implements EntityManager
{
  private $entityCaches = [];
  private $managedEntities = [];
  private $persistedEntities = [];

  public function __destruct()
  {
    foreach ($this->persistedEntities as $entityClassName => $entities) {
      $entityCache = $this->getOrBuildEntityCache($entityClassName);
      if ($entityCache == null) {
        // Should never happen
        continue;
      }

      $queryBuilder = new QueryBuilder($entityCache->getTableName());
      foreach ($entities as $entity) {
        $this->updateEntity($entity, $queryBuilder->update());
      }
    }
  }

  private function updateEntity($entiy, &$query)
  {
    $entityCache = $this->getOrBuildEntityCache($entityClassName);
  }

  private function getOrBuildEntityCache(string $entityClassName): EntiyCache
  {
    if (isset($this->entityCache[$entityClassName])) {
      return $this->entityCache[$entityClassName];
    }

    return $this->buildEntityCache($entityClassName);
  }

  private function buildEntityCache(string $entityClassName): EntityCache
  {
    $extendedReflectionClass = new ExtendedReflectionClass($entityClassName);
    if (!$extendedReflectionClass->isAnnotationPresent(Entity::class)) {
      throw new BadEntityConfigurationException('Entity class must have @Entiy annotation');
    }

    $table = $extendedReflectionClass->getAnnotation(Table::class);
    //$columns = $extendedRef

    // TODO
    return null;
  }
}

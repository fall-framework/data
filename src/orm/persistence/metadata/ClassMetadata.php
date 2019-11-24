<?php

namespace fall\data\orm\persitence\metadata;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface ClassMetadata
{
  public function getEntityName(): string;
  public function getIdentifier($object): object;
  public function getIdentifierPropertyName(): string;
  public function getIdentifierType();
  public function getPropertyNames(): array;
}

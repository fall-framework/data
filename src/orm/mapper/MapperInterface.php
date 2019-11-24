<?php

namespace fall\data\orm\mapper;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface MapperInterface
{
  public function map($source, array $mappings = []);
}

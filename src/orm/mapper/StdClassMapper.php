<?php

namespace fall\data\orm\mapper;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class StdClassMapper implements MapperInterface
{

  public function map($source, array $mappings = [])
  {
    $destination = new \stdClass();
    foreach ($source as $key => $value) {
      if (isset($mappings[$key])) {
        $key = $mappings[$key];
      }

      $destination->$key = $value;
    }
    return $destination;
  }
}

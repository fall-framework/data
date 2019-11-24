<?php

namespace fall\data\orm\mapper;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class StdClassArrayMapper implements MapperInterface
{
  /**
   * @Autowired()
   */
  private $stdClassMapper;

  public function map($source, array $mappings = [])
  {
    $destination = [];
    foreach ($source as $key => $value) {
      $destination[$key] = $this->stdClassMapper->map($value, $mappings);
    }
    return $destination;
  }
}

<?php

namespace fall\data\orm\persistence;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface SessionFactory
{
  public function getClassMetadata(): ClassMetaData;
}

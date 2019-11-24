<?php

namespace fall\data\orm\database\clause;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
class SelectClause extends Clause
{
  private $tableAlias;
  private $fields = [];

  public function __construct($tableAlias)
  {
    $this->tableAlias = $tableAlias;
  }

  public function addField($fieldName, $fieldAlias = null)
  {
    $this->field[$fieldName] = $fieldAlias;
  }

  public function addFields(array $fields)
  {
    foreach ($fields as $fieldName => $fieldAlias) {
      // If we didn't set an alias, use the field name
      if (\is_numeric($fieldName)) {
        $fieldName = $fieldAlias;
      }

      if (\is_numeric($fieldAlias) || $fieldAlias === '*') {
        $fieldAlias = null;
      }

      $this->addField($fieldName, $fieldAlias);
    }
  }

  public function __toString(): string
  {
    $selects = [];
    foreach ($this->fields as $fieldName => $fieldAlias) {
      $select = '';
      if (\preg_match('#(.*)\((.*)\)#', $fieldName, $matches)) {
        $fieldName = $matches[1] . '(' . $this->tableAlias . '.' . $matches[2] . ')';
      } else if ($this->tableAlias !== '') {
        $select = $this->tableAlias . '.';
      }

      $select .= $fieldName;
      if ($fieldAlias !== null) {
        $select .= ' as "' . $fieldAlias . '"';
      }

      $selects[] = $select;
    }

    return \join(',', $selects);
  }
}

<?php

namespace fall\core\repository;

/**
 * @author Angelis <angelis@users.noreply.github.com>
 */
interface CrudRepository extends Repository
{
  function count();
  function delete($entity);
  function deleteAll($entities = null);
  function deleteById($id);
  function exists($entity);
  function existsById($id);
  function findAll();
  function findAllById(array $ids);
  function findById();
  function save($entity);
  function saveAll($entities);
}

<?php


namespace Mrsimonbennett\LaravelRepositories;

/**
 * Interface EloquentInterface
 * @package Mrsimonbennett\LaravelRepositories
 */
interface EloquentInterface {
    /**
     * @return mixed
     */
    public function all();

    /**
     * @return mixed
     */
    public function get();

    /**
     * @param $relationship
     * @return mixed
     */
    public function with($relationship);

    /**
     * @param $column
     * @param $operator
     * @param $value
     * @param $boolean
     * @return mixed
     */
    public function where($column, $operator, $value, $boolean);

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param $id
     * @return mixed
     */
    public function FindOrFail($id);
} 
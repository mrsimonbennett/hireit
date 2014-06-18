<?php


namespace Mrsimonbennett\LaravelRepositories;

abstract class MasterService
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * @return mixed
     */
    public function get()
    {
        return $this->model->get();
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @param        $column
     * @param null   $operator
     * @param null   $value
     * @param string $boolean
     * @return mixed
     */
    public function where($column, $operator = null, $value = null, $boolean = 'and')
    {
        return $this->model->where($column, $operator, $value, $boolean);
    }

    /**
     * @param $relationship
     * @return \Illuminate\Database\Eloquent\Builder|static
     */
    public function with($relationship)
    {
        return $this->model->with($relationship);
    }

    /**
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model|static
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|static
     */
    public function FindOrFail($id)
    {
        return $this->model->findOrFail($id);
    }
}
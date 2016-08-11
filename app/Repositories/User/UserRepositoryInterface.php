<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function create($inputs);
    public function insert($inputs);
    public function update($attributes, $id);
    public function destroy($id);
    public function paginate($limit);
    public function find($id);
    public function lists($column, $key = null);
}

<?php

namespace App\Repositories\Entry;

interface EntryRepositoryInterface
{
    public function create($inputs);
    public function insert($inputs);
    public function update($attributes, $id);
    public function destroy($id);
    public function paginate($limit);
    public function find($id);
    public function lists($column, $key = null);
}

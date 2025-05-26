<?php

namespace App\Contracts;

interface UserServiceInterface
{
    public function getAll();
    public function store(array $data);
    public function find($id);
    public function update($id, array $data);
    public function delete($id);
    public function paginateAndSearch(string $keyword = null, int $perPage = 10);
}

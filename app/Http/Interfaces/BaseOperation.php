<?php


namespace App\Http\Interfaces;


interface BaseOperation
{
    public function list();
    public function create($request);
    public function getById($id);
    public function update($request);
    public function delete($object);
}

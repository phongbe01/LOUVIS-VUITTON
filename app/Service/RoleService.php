<?php


namespace App\Service;


use App\Http\Interfaces\BaseOperation;
use App\Repository\RoleRepository;
use App\Role;

class RoleService implements BaseOperation
{

    public function list()
    {
        // TODO: Implement list() method.
        return Role::all();
    }

    public function create($request)
    {
        // TODO: Implement create() method.
        Role::updateOrCreate(['name' => $request->name, ]);
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
        return Role::findOrFail($id);
    }

    public function update($request)
    {
        // TODO: Implement update() method.
        $object = $this->getById($request->id);
        $object->update($request->all());
        $object->save();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $object = $this->getById($id);
        $object->delete();
    }
}

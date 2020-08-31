<?php


namespace App\Repository;


use App\Http\Interfaces\BaseOperation;
use App\Role;

class RoleRepository extends BaseRepository
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
//        $object->update($request->all());
//        $object->save();
    }

    public function delete($object)
    {
        // TODO: Implement delete() method.
        $object->delete();
    }
}

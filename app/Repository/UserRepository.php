<?php


namespace App\Repository;


use App\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    public function list()
    {
        return DB::table('userrecord')->get();
    }

    public function getById($id)
    {
        return User::findOrFail($id);
    }

    public function update($request, $user)
    {
        $user->update($request->all());
        return $user->save();
    }

    public function delete($user)
    {
        return $user->delete();
    }
}

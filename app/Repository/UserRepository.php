<?php


namespace App\Repository;


use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    public function list()
    {
//        return DB::table('userrecord')->get();
        return User::all();
    }

    public function create($request)
    {
        User::updateOrCreate(['name' => $request->name, 'email' => $request->email, 'password' => $request->password, 'roleID' => $request->input('role_user')]);

    }

    public function getById($id)
    {
        return User::findOrFail($id);
    }

    public function update($request,$user)
    {
        $user->update($request->all());
        $user->save();
    }

    public function delete($user)
    {
        $user->delete();
    }
}

<?php


namespace App\Repository;


use App\User;

class UserRepository
{
    public function list()
    {
        return User::all();
    }


}

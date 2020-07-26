<?php


namespace App\Service;


use App\Repository\UserRepository;
use App\User;
use http\Env\Request;

class UserService
{
    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function list()
    {
        return $this->userRepository->list(); // TODO: Change the autogenerated stub
    }

    public function create($request)
    {
        $this->userRepository->create($request);
    }

    public function getById($id)
    {
        return $this->userRepository->getById($id);
    }

    public function update($request)
    {
        $user =$this->getById($request->id);
        $this->userRepository->update($request, $user);
    }

    public function delete($id)
    {
        $user =$this->getById($id);
        $this->userRepository->delete($user);
    }
}

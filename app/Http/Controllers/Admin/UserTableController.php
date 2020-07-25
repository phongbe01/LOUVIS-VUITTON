<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\UserService;
use Illuminate\Http\Request;

class UserTableController extends Controller
{
    public $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function list()
    {
        $users = $this->userService->list();
        return view('admin.user-table.list', compact('users'));
    }

    public function edit($id)
    {
        $user = $this->userService->getById($id);
        return view('admin.user-table.edit', compact('user'));
    }

    public function destroy(Request $request)
    {
        $this->userService->delete($request->user_id);
        return redirect()->route('user.list');
    }
}

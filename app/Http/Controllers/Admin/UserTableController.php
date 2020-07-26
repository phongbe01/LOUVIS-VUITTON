<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\UserService;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserTableController extends Controller
{
    public $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = User::all();
            try {
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {

                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="btn btn-sm lv-data-table-edit fas fa-edit">Edit</a>';

                        $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-sm lv-data-table-delete fas fa-delete">Delete</a>';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            } catch (\Exception $e) {
                echo $e;
            }
        }
        return view('admin.user-table.list', compact('users'));
    }

    public function edit($id)
    {
        $user = $this->userService->getById($id);
        return view('admin.user-table.edit', compact('user'));
    }

//    public function destroy(Request $request)
//    {
//        $this->userService->delete($request->user_id);
//        return redirect()->route('user.list');
//    }

    // using ajax
    public function destroy($id)
    {
        $this->userService->delete($id);
        return response()->json(['success'=>'user deleted successfully']);
    }
}

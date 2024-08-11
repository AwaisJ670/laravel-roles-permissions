<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Modules;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){
        $allModules = Modules::select('id', 'name', 'parent_id')->get();
        $roles =Role::select('id','name')->orderBy('name','asc')->get();

        return view('permissions',['roles' => $roles,'all_modules' => $allModules]);
    }

    public function storeRole(Request $request){
       $role = new Role();
       $role->name = $request->name;
       $role->save();

       return response()->json('Saved Role');

    }


}

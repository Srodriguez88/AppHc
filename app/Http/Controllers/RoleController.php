<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdateRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();    
        return view('theme.back-office.pages.role.index',compact('roles'));
    }

    
    public function create()
    {
        return view('theme.back-office.pages.role.create');
    }

    public function store(StoreRequest $request, Role $role)
    {

    
        $slug = Str::of($request->name)->slug('-');
     
        $role = new Role();
        $role->name = $request->name;
        $role->description = $request->description;
        $role->slug =  $slug;  
        $role->save();
       
        return redirect()->route('backoffice.role.index');

      

    }

    
    public function show(Role $role)
    {
        
        return view('theme.back-office.pages.role.show',compact('role'));
    }

    
    public function edit(Role $role)
    {
        return view('theme.back-office.pages.role.edit',compact('role'));
    }

    public function update(UpdateRequest $request, Role $role)
    {
      
    
        $slug = Str::of($request->name)->slug('-');
        $role = Role::findOrFail($role->id); 
        $role->name = $request->name;
        $role->description = $request->description;
        $role->slug =  $slug;  
        $role->save();
       
        return redirect()->route('backoffice.role.index');
    }

   
    public function destroy(Role $role)
    {
        //
    }
}

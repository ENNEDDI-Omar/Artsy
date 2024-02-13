<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        // $projects=
        // $partners=
        return view('admin', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(UserStoreRequest $request, User $user)
    {
        $user = $request->validated();
       $user['password'] = bcrypt($request->input('password'));

      $CreatedUser=User::create($user);
       
      //création d'user et attacher le role à l'utilisateur //
      $roles = $request->input('roles', []);
      $CreatedUser->roles()->attach($roles);

      return redirect()->route('users.index')->with('success', 'Utilisateur créé avec succés!');
    }

    // /**
    //  * Display the specified resource.
    //  */

     
    public function show(User $user)
    {   
        return view('admin.users.show', compact('user'));
    }
    

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    
    public function edit(User $user, Role $roles)
    {   
        $roles=Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    // /**
    //  * Update the specified resource in storage.
    //  */

    public function update(UserUpdateRequest $request, User $user)
    {

        $userData = $request->validated();
        
        $user->update($userData);
        
      //mettre à jour les roles de l'utilisateur 
        $roles =$request->input('roles', []);
        $user->roles()->sync($roles);

        return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succés!');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    
    public function destroy(User $user)
    {
        $user->delete();
      
        return redirect()->route('users.index');
    }
}
